<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regist extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user');
	}

	public function success(){
        $data['js'] = $this->load->view('include/js.php',NULL,TRUE);
        //$data['captcha_script'] = $this->load->view('include/captcha_script.php',NULL,TRUE);
		$data['css'] = $this->load->view('include/css.php',NULL,TRUE);
		$data['navigation'] = $this->load->view('include/navigation.php',NULL,TRUE);
        $data['footer'] = $this->load->view('include/footer.php',NULL,TRUE);
        $this->load->view('pages/login_bar',$data);
    }
    
	public function AddUser(){
        $tanggal = $this->input->post('tanggallahir');   
        $username = $this->input->post('username');
        $flag = $this->user->username_exists($username);

        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[8]|max_length[15]');
        $this->form_validation->set_rules('username','Username',$flag == 0);
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|valid_emails');
        $this->form_validation->set_rules('namadepan', 'Nama Depan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('repassword', ' Re-type Password', 'required|matches[password]');
        $this->form_validation->set_rules('termcondition', 'Check Box', 'required');
        $this->form_validation->set_rules('notlp', 'No. Telp', 'integer');
        $this->form_validation->set_rules('kodepos', 'Kode Pos' ,'integer|max_length[5]');
        $this->form_validation->set_rules('tanggallahir','Tanggal Lahir',$tanggal < date('Y-m-d'));
       
		
        $data['js'] = $this->load->view('include/js.php',NULL,TRUE);
        $data['captcha_script'] = $this->load->view('include/captcha_script.php',NULL,TRUE);
		$data['css'] = $this->load->view('include/css.php',NULL,TRUE);
		$data['navigation'] = $this->load->view('include/navigation.php',NULL,TRUE);
        $data['footer'] = $this->load->view('include/footer.php',NULL,TRUE);

        if (isset($_POST['g-recaptcha-response'])) $captcha=$_POST['g-recaptcha-response'];
		if($this->form_validation->run() == FALSE){
            $this->load->view('pages/registform',$data);
		}
		else{
            if(!$captcha){
                $this->load->view('pages/registform',$data);
            }
            $str = "https://www.google.com/recaptcha/api/siteverify?secret=6LfqFTsUAAAAACw20F5HpqVQgGOm74_pw-geUipw"."&response=".$captcha."&remoteip".$_SERVER['REMOTE_ADDR'];
            $response = file_get_contents($str);
            $response_arr = (array) json_decode($response);
            if($response_arr["success"]==false)
                $this->load->view('pages/registform',$data);
            else{
                $this->user->AddData(
                $this->input->post('username'),
                $this->input->post('email'),
                $this->input->post('namadepan'),
                $this->input->post('namabelakang'),
                $this->input->post('alamat'),
                $this->input->post('kota'),
                $this->input->post('notlp'),
                $this->input->post('password'),
                $this->input->post('repassword'),
                $this->input->post('kodepos'),
                $this->input->post('tanggallahir')
                );
                redirect(base_url('regist/success'));
            }	
		}
	}
}
?>