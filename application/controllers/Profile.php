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
			$data['navigation_login'] = $this->load->view('include/navigation_login.php', NULL, TRUE);
			$data['footer'] = $this->load->view('include/footer.php', NULL, TRUE);
			$this->load->view('include/gantipassword.php', $data);
		}

		public function gantipasswordexe(){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
			$this->form_validation->set_rules('repassword', ' Re-type Password', 'required|matches[password]');

			if($this->form_validation->run() == FALSE){

				redirect(base_url('profile/gantipassword'));
			}
			else {
				$username = $this->session->userdata('username');
				$passwordlama = md5($this->input->post('passwordlama')) ;
				$where = array(
					'username' => $username,
					'Password' => $passworlama
				);
				$cekpassword = $this->user->Login("customer",$where)->num_rows();
				var_dump($passwordlama);
				var_dump($cekpassword);
				
				if ($cekpassword == 1){
					$this->user->gantipassword($this->input->post('password'));
					$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Ganti Password Berhasil !!</div>');
				}
				else {
					$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Password salah !!</div>');
				}
			}
		}

		public function isipadangcash(){
			$data['js'] = $this->load->view('include/js.php', NULL, TRUE);
			$data['css'] = $this->load->view('include/css.php', NULL, TRUE);
			$data['navigation'] = $this->load->view('include/navigation_login.php', NULL, TRUE);
			$data['footer'] = $this->load->view('include/footer.php', NULL, TRUE);
		}
	}
?>