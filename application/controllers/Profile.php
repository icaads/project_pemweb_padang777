<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Profile extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('user');
		}
		
		public function index(){
			$username = $this->session->userdata('username');
			$data['semua'] = $this->user->profile($username);
			$data['js'] = $this->load->view('include/js.php', NULL, TRUE);
			$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
			$data['profile_script'] = $this->load->view('include/profile_script.php', NULL, TRUE);
			$data['navigation'] = $this->load->view('include/navigation_login.php', NULL, TRUE);
			$data['footer'] = $this->load->view('include/footer.php', NULL, TRUE);
			$this->load->view('pages/profile.php', $data);
		}
		
		public function gantipassword(){
			$data['js'] = $this->load->view('include/js.php', NULL, TRUE);
			$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
			$data['navigation'] = $this->load->view('include/navigation_login.php', NULL, TRUE);
			$data['footer'] = $this->load->view('include/footer.php', NULL, TRUE);
			
			$this->load->view('pages/gantipassword.php', $data);
		}

		public function isipadangcash(){
			$data['js'] = $this->load->view('include/js.php', NULL, TRUE);
			$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
			$data['navigation'] = $this->load->view('include/navigation_login.php', NULL, TRUE);
			$data['footer'] = $this->load->view('include/footer.php', NULL, TRUE);

		}
	}
?>