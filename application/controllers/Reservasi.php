<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi extends CI_Controller{

	public function __construct(){
		parent::__construct();
		
		$this->load->model('Cabang');
		$this->load->model('Meja'); 
		$this->load->model('Reservasis');
		
	}

	public function index(){
		$idlokasi = $this->input->post('kota_cabang');
		$this->session->set_userdata('lokasi',$idlokasi);
		$data['Cabang'] = $this->Cabang->show_cabang_Case($this->session->userdata('lokasi'));
		$data['meja'] = $this->Meja->showData($this->session->userdata('lokasi'));
		$data['js'] = $this->load->view('include/js.php',NULL,TRUE);
		$data['css'] = $this->load->view('include/css.php',NULL,TRUE);
		$data['navigation_login'] = $this->load->view('include/navigation_login.php',NULL,TRUE);
		$data['navbar_guest'] = $this->load->view('include/navbar_guest.php',NULL,TRUE);
		$data['footer'] = $this->load->view('include/footer.php',NULL,TRUE);
		$data['button_script'] = $this->load->view('include/button_script.php',NULL,TRUE);
		$data['modal_picture'] = $this->load->view('include/modal_picture.php',NULL,TRUE);
		$data['modalcss'] = $this->load->view('include/modalcss.php',NULL,TRUE);
		$this->load->view('pages/reservationform.php',$data);

		
	}


	function modal(){
		$data['js'] = $this->load->view('include/js.php',NULL,TRUE);
		$data['css'] = $this->load->view('include/css.php',NULL,TRUE);
		$data['modal_script'] = $this->load->view('include/modal_script.php',NULL,TRUE);
		$this->load->view('include/modal.php',$data);
	}

	function modal_konfirmasi(){
		$data['js'] = $this->load->view('include/js.php',NULL,TRUE);
		$data['css'] = $this->load->view('include/css.php',NULL,TRUE);
		$data['modal_script'] = $this->load->view('include/modal_script.php',NULL,TRUE);
		$this->load->view('include/modal_konfirmasi.php',$data);
	}

	function konfirmasi_reservasi(){
		$data['reservasi'] = $this->Reservasis->showdata($this->session->userdata('idtransreservasi'));
		$data['js'] = $this->load->view('include/js.php',NULL,TRUE);
		$data['css'] = $this->load->view('include/css.php',NULL,TRUE);
		$data['navigation_login'] = $this->load->view('include/navigation_login.php',NULL,TRUE);
		$data['navbar_guest'] = $this->load->view('include/navbar_guest.php',NULL,TRUE);
		$data['footer'] = $this->load->view('include/footer.php',NULL,TRUE);
		$this->load->view('pages/konfirmasireservasi.php',$data);
	}

	
	function konfirmasi_akhir(){
		$this->session->sess_destroy('idtransreservasi');
        redirect(base_url());
	}

	function hapus_reservasi(){
		$id = $this->input->get('id');
		$this->Reservasis->delete($id);
		redirect (base_url('reservasi/konfirmasi_reservasi'));
	}

	function pesan(){
		
		$tanggal = $this->input->post('waktu_datang');
		$jumlah = $this->input->post('quantity');
		$meja = $this->input->post('Meja');
		$this->load->library('form_validation');
		$status = 1;
		if ($tanggal < date('Y-m-d')){
			$status = 0;
		}

		
		if ($this->session->userdata('status')=='guest' & $this->session->userdata('statusreservasi') == 0 & $this->session->userdata('reservasi') == 0 ){
			$username= $this->session->userdata('nama').'guest';
			$datareservasi = array (
				'username' => $username,
				'NoTlp' => $this->session->userdata('NoTlp')
			);
			$this->Reservasis->transaction($datareservasi);
			$dsa = $this->Reservasis->idtransaksireservasi();
			//var_dump($dsa);
			$datareservasi = array(
				'reservasi' => 1,
				'idtransreservasi' => $dsa[0]['IDTransactionReserv']
			);
			$this->session->set_userdata($datareservasi);
			
		}
		else if ($this->session->userdata('status')=='member' & $this->session->userdata('statusreservasi')== 0 & $this->session->userdata('reservasi') == 0 ){
			$username= $this->session->userdata('username');
			$statusreservasi = 0;
			$dsa = $this->Reservasis->idtransaksireservasi();
			$datareservasi = array (
				'username' => $username,
				'NoTlp' => $this->session->userdata('NoTlp')
			);
			$this->Reservasis->transaction($datareservasi);
			$idtransaksireservasi = $dsa[0]['IDTransactionReserv'];
			//$this->session->set_userdata('statusreservasi') = 1;
			$datareservasi = array(
				'reservasi' => 1,
				'idtransreservasi' => $dsa[0]['IDTransactionReserv']
			);
			$this->session->set_userdata($datareservasi);
		}
			$idlokasi = $this->session->userdata('lokasi');

			$data = array(
				
				'jumlah_tamu' => $jumlah,
				'tanggalreservasi' => $tanggal,
				'IDMeja'=>$meja,
				'IDCabang' => $idlokasi,
				'IDTransactionReserv' => $this->session->userdata('idtransreservasi')
				
			);
		if($status == 0){		
			$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Terjadi Kesalahan saat mengisi form!</div>');
			redirect(base_url('reservasi/modal'));
		}
		else {
			$cek = $this->Reservasis->cek($data);
			//var_dump($cek);
			if($cek == 1){
				$this->session->set_flashdata('msg','<div class="alert alert-warning text-center">Meja sudah dipesan pada tanggal yang anda pilih!</div>');
				redirect(base_url('reservasi/modal'));
			}
			else {
				$this->Reservasis->insert($data);
				redirect(base_url('reservasi/konfirmasi_reservasi'));
			}
			
		}
	}


}