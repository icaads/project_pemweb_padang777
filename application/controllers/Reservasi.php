<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Cabang');
		$this->load->model('Meja');
	}

	public function index(){
		$idlokasi = $this->input->post('kota_cabang');
		$data['meja'] = $this->Meja->showData($idlokasi);
		$data['js'] = $this->load->view('include/js.php',NULL,TRUE);
		$data['css'] = $this->load->view('include/css.php',NULL,TRUE);
		$data['navigation_login'] = $this->load->view('include/navigation_login.php',NULL,TRUE);
		$data['navbar_guest'] = $this->load->view('include/navbar_guest.php',NULL,TRUE);
		$data['footer'] = $this->load->view('include/footer.php',NULL,TRUE);
		$this->load->view('pages/reservationform.php',$data);
	}

	function modal(){
		$data['js'] = $this->load->view('include/js.php',NULL,TRUE);
		$data['css'] = $this->load->view('include/css.php',NULL,TRUE);
		$data['modal_script'] = $this->load->view('include/modal_script.php',NULL,TRUE);
		$this->load->view('include/modal.php',$data);
	}

	
}