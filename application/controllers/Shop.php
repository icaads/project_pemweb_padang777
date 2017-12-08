<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller{
	public function index(){
		$this->load->model('menu');
		$data['js'] = $this->load->view('include/js.php',NULL,TRUE);
		$data['css'] = $this->load->view('include/css.php',NULL,TRUE);
		$data['navigation_login'] = $this->load->view('include/navigation_login.php',NULL,TRUE);
		$data['footer'] = $this->load->view('include/footer.php',NULL,TRUE);
		$data['modal_script'] = $this->load->view('include/modal_script.php',NULL,TRUE);
		$data['menu'] = $this->menu->show_menu();
		$this->load->view('pages/shop.php',$data);
	}

	public function menu_ayam(){
		$this->load->model('menu');
		$data['js'] = $this->load->view('include/js.php',NULL,TRUE);
		$data['css'] = $this->load->view('include/css.php',NULL,TRUE);
		$data['navigation_login'] = $this->load->view('include/navigation_login.php',NULL,TRUE);
		$data['footer'] = $this->load->view('include/footer.php',NULL,TRUE);
		$data['modal_script'] = $this->load->view('include/modal_script.php',NULL,TRUE);
		var_dump($data);
		die();
		$isi= $this->input->post('kategori');
		$this->menu->show($isi);
		

		$this->load->view('pages/menu_ayam.php',$data);
	}
}
?>