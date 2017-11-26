<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
	public function index(){
		$data['js'] = $this->load->view('include/js.php',NULL,TRUE);
		$data['css'] = $this->load->view('include/css.php',NULL,TRUE);
		$data['navigation'] = $this->load->view('include/navigation.php',NULL,TRUE);
		$data['slider'] = $this->load->view('include/slider.php',NULL,TRUE);
		$data['footer'] = $this->load->view('include/footer.php',NULL,TRUE);
		$data['login_navbar'] = $this->load->view('include/login_navbar.php',NULL,TRUE);
		$this->load->view('pages/home.php',$data);
	}
}