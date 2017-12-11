<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dummy extends CI_Controller{
	public function index(){
        $data['css'] = $this->load->view('include/css.php',NULL,TRUE);
		$data['js'] = $this->load->view('include/js.php',NULL,TRUE);
		$this->load->view('include/dummytopup.php',$data);
	}
}
?>