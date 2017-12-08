<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Artikel extends CI_Controller{
		public function artikel1(){
			$data['js'] = $this->load->view('include/js.php',NULL,TRUE);
			$data['css'] = $this->load->view('include/css.php',NULL,TRUE);
			$data['navigation'] = $this->load->view('include/navigation.php',NULL,TRUE);
			//$data['about'] = $this->load->view('include/about.php',NULL,TRUE);
			$data['footer'] = $this->load->view('include/footer.php',NULL,TRUE);
			$this->load->view('pages/artikel1',$data);
		}

		public function artikel2(){
			$data['js'] = $this->load->view('include/js.php',NULL,TRUE);
			$data['css'] = $this->load->view('include/css.php',NULL,TRUE);
			$data['navigation'] = $this->load->view('include/navigation.php',NULL,TRUE);
			//$data['about'] = $this->load->view('include/about.php',NULL,TRUE);
			$data['footer'] = $this->load->view('include/footer.php',NULL,TRUE);
			$this->load->view('pages/artikel2',$data);
		}
	}
?>