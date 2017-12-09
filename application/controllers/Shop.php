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

	function remove() {
		$rowid = $this->input->get('id');
	   $this->cart->update(array(
		'rowid' => $rowid,
		'qty' => 0
	   ));
	   redirect(base_url('cart/shopping_cart'));
	}

	function destroy_cart(){
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
		$data['modal_script'] = $this->load->view('include/modal_script.php',NULL,TRUE);
		$this->load->view('pages/detail_menu.php',$data);

	}
}
?>