<?php

class Login extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('user');
    }

    public function Login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );
        //var_dump($where);
        $cek = $this->user->Login("customer",$where)->num_rows();
        $profile = $this->user->profile($username);
        if($cek > 0){
            $data_session = array(
                'username' => $username,
                'namadepan' => $profile['NamaDepan'], 
                'status' => "member",
                'NoTlp' => $profile['NoTlp'],
                'statusreservasi' =>  0,
                'statuspesan' => 0,
                'ongkir' => 15000
            );

            
            $this->session->set_userdata($data_session);

            redirect(base_url('home'));
        }
        else{
            redirect(base_url('login/failed'));
        }
    }


    public function failed()
	{
        $data['js'] = $this->load->view('include/js.php',NULL,TRUE);
        //$data['captcha_script'] = $this->load->view('include/captcha_script.php',NULL,TRUE);
		$data['css'] = $this->load->view('include/css.php',NULL,TRUE);
		$data['navigation'] = $this->load->view('include/navigation.php',NULL,TRUE);
        $data['footer'] = $this->load->view('include/footer.php',NULL,TRUE);
        $this->load->view('pages/login_failed',$data);
    }

    public function login_bar()
	{
        
        $data['js'] = $this->load->view('include/js.php',NULL,TRUE);
        //$data['captcha_script'] = $this->load->view('include/captcha_script.php',NULL,TRUE);
		$data['css'] = $this->load->view('include/css.php',NULL,TRUE);
		$data['navigation'] = $this->load->view('include/navigation.php',NULL,TRUE);
        $data['footer'] = $this->load->view('include/footer.php',NULL,TRUE);
        $data['modal_script'] = $this->load->view('include/modal_script.php',NULL,TRUE);
        $this->load->view('pages/login',$data);
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
}

?>
