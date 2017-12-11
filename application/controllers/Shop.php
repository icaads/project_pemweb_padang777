<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller{
	public function index(){
		$this->load->model('menu');
		$data['js'] = $this->load->view('include/js.php',NULL,TRUE);
		$data['css'] = $this->load->view('include/css.php',NULL,TRUE);
		$data['navigation_login'] = $this->load->view('include/navigation_login.php',NULL,TRUE);
		$data['navbar_guest'] = $this->load->view('include/navbar_guest.php',NULL,TRUE);
		$data['footer'] = $this->load->view('include/footer.php',NULL,TRUE);
		$data['modal_script'] = $this->load->view('include/modal_script.php',NULL,TRUE);
		$data['menu'] = $this->menu->show_menu();
		$this->load->view('pages/shop.php',$data);
	}

	public function kategori_menu(){
		$this->load->model('menu');
		$asd = $this->input->get('id');
		$data['menu'] = $this->menu->kategori_data($asd);
		$data['js'] = $this->load->view('include/js.php',NULL,TRUE);
		$data['css'] = $this->load->view('include/css.php',NULL,TRUE);
		$data['navbar_guest'] = $this->load->view('include/navbar_guest.php',NULL,TRUE);
		$data['navigation_login'] = $this->load->view('include/navigation_login.php',NULL,TRUE);
		$data['footer'] = $this->load->view('include/footer.php',NULL,TRUE);
		$data['modal_script'] = $this->load->view('include/modal_script.php',NULL,TRUE);
		$this->load->view('pages/shop.php',$data);
	}

	function Belanja(){
		$this->load->model('menu');
		$this->load->library('cart');
		$asd = $this->input->get('id');
		
		$product = $this->menu->cari($asd);
		//var_dump($product);
	    $insert = array(
		'id' => $asd,
		'qty' => 1,
		'price' => $product['Harga'],
		'name' => $product['NamaMenu'],
		'options' => $product['Gambar']
	   );	
	   //var_dump($insert);
	   $this->cart->insert($insert);	
	  // var_dump($lala);
	   //var_dump($this->cart->contents()); 
	   redirect(base_url('shop'));
	}

	function BelanjaPopuler(){
		$this->load->model('menu');
		$this->load->library('cart');
		$asd = $this->input->get('id');
		if ($this->session->userdata('status') != 'guest' | $this->session->userdata('status') != 'guest'){
			redirect (base_url('login/login_bar'));
		}
		
		$product = $this->menu->cari($asd);
		//var_dump($product);
	    $insert = array(
		'id' => $asd,
		'qty' => 1,
		'price' => $product['Harga'],
		'name' => $product['NamaMenu'],
		'options' => $product['Gambar']
	   );	
	   //var_dump($insert);
	   $this->cart->insert($insert);	
	  // var_dump($lala);
	   //var_dump($this->cart->contents()); 
	   redirect(base_url('shop'));
	}

	function BelanjaBanyak(){
		$this->load->model('menu');
		$this->load->library('cart');
		$asd = $this->input->post('id');
		var_dump($asd);
		$product = $this->menu->cari($asd);
		var_dump($product);
	    $insert = array(
		'id' => $asd,
		'qty' => $this->input->post('qty'),
		'price' => $product['Harga'],
		'name' => $product['NamaMenu'],
		'options' => $product['Gambar']
	   );	
	   var_dump($insert);
	   $this->cart->insert($insert);	
	  // var_dump($lala);
	   //var_dump($this->cart->contents()); 
	   redirect(base_url('shop'));
	}


	function remove() {
		$rowid = $this->input->get('id');
	   $this->cart->update(array(
		'rowid' => $rowid,
		'qty' => 0
	   ));
	   redirect(base_url('cart/shopping_cart'));
	}

	function promo(){
		$this->load->model('promo');
		$kodepromo = $this->input->post('promo');
		//var_dump($kodepromo);
		$kode = array(
			'KodePromo' => $kodepromo
		);
		//var_dump($kode);
		$diskon = $this->promo->kode("promo",$kode)->num_rows();
		var_dump($diskon);
		if ($diskon == 1){
			$this->session->set_userdata('ongkir',4500);
			//$this->session->set_userdata($data_session['ongkir'],4500);
			echo $this->session->userdata('ongkir');
			redirect(base_url('Cart/shopping_cart'));
		}
		else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Kode Voucher Tidak Tersedia !!</div>');
			redirect(base_url('Cart/shopping_cart'));
		}
	}

	function destroy_cart(){
		$cart = $this->cart->contents();
		$this->load->model('menu');
		//var_dump($cart);
		if ($this->session->userdata('status')=='guest' & $this->session->userdata('statuspesan') == 0 & $this->session->userdata('pesan') == 0 ){
			$username= $this->session->userdata('nama').'guest';
			$datapesan = array (
				'username' => 'guest',
				'TanggalTransaksi' => date('Y-m-d'),
				'Status' => 0,
				'JenisPembayaran' => 'transfer',
				'IDCabang' => 'CB001'
			);
			$this->menu->transaction($datapesan);
			$dsa = $this->menu->idtransaksi();
			//var_dump($dsa);
			$datapesanan = array(
				'pesan' => 1,
				'idtransaksi' => $dsa[0]['IDTransaksi']
			);
			$this->session->set_userdata($datapesanan);
			
		}
		else if ($this->session->userdata('status')=='member' & $this->session->userdata('statuspesan')== 0 & $this->session->userdata('pesan') == 0 ){
			$username= $this->session->userdata('username');
			$datapesan = array (
				'username' => $username,
				'TanggalTransaksi' => date('Y-m-d'),
				'Status' => 0,
				'JenisPembayaran' => 'transfer',
				'IDCabang' => 'CB001'
			);
			$this->menu->transaction($datapesan);
			$dsa = $this->menu->idtransaksi();
			//var_dump($dsa);
			$datapesanan = array(
				'pesan' => 1,
				'idtransaksi' => $dsa[0]['IDTransaksi']
			);
			//var_dump($datapesanan);
			$this->session->set_userdata($datapesanan);
			
		}
		foreach ($cart as $row){
			$data = array (
				'IDMenu' => $row["id"],
				'JumlahMenu' => $row['qty'],
				'IDTransaksi' => $this->session->userdata('idtransaksi')
			);
			$this->menu->order($data);
			//var_dump($data);
		}
		//for ($i=0;$i<count($cart);$i++){
		//}
		$this->cart->destroy();
		redirect(base_url('home'));
	}
	
	public function detail(){
		$this->load->model('menu');
		$asd = $this->input->get('id');
		$data['menu']=$this->menu->details($asd);
		$data['js'] = $this->load->view('include/js.php',NULL,TRUE);
		$data['css'] = $this->load->view('include/css.php',NULL,TRUE);
		$data['navbar_guest'] = $this->load->view('include/navbar_guest.php',NULL,TRUE);
		$data['navigation_login'] = $this->load->view('include/navigation_login.php',NULL,TRUE);
		$data['footer'] = $this->load->view('include/footer.php',NULL,TRUE);
		$data['button_script'] = $this->load->view('include/button_script.php',NULL,TRUE);
		$data['modal_script'] = $this->load->view('include/modal_script.php',NULL,TRUE);
		$this->load->view('pages/detail_menu.php',$data);

	}
}
?>