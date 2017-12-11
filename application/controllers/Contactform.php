<?php
class Contactform extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->library(array('email','form_validation'));
        $this->load->model('cabang');
    }

    function alpha_space_only($str){
        if (!preg_match("/^[a-zA-Z ]+$/",$str)){
            $this->form_validation->set_message('alpha_space_only', 'The %s field must contain only alphabets and space');
            return FALSE;
        }
        else{
            return TRUE;
        }
    }

    function index() {
        $cabang['data'] = $this->cabang->show_cabang();
        $data['js'] = $this->load->view('include/js.php',NULL,TRUE);
        $data['css'] = $this->load->view('include/css.php',NULL,TRUE);
        $data['alamat'] = $this->load->view('include/alamat.php',$cabang,TRUE);
        $data['navigation'] = $this->load->view('include/navigation.php',NULL,TRUE);
        $data['navigation_login'] = $this->load->view('include/navigation_login.php',NULL,TRUE);
        $data['navbar_guest'] = $this->load->view('include/navbar_guest.php',NULL,TRUE);
		$data['footer'] = $this->load->view('include/footer.php',NULL,TRUE);
        $this->form_validation->set_rules('name', 'Name', 'trim|required|callback_alpha_space_only');
        $this->form_validation->set_rules('email', 'Emaid ID', 'trim|required|valid_email');
        $this->form_validation->set_rules('subject', 'Subject', 'trim|required');
        $this->form_validation->set_rules('message', 'Message', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('pages/contactus',$data);
        }
        else{
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');

            $to_email = 'paponik205@gmail.com';

            //konfigurasi email
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.gmail.com';
            $config['smtp_port'] = '465';
            $config['smtp_user'] = 'paponik205@gmail.com';
            $config['smtp_pass'] = 'wimluarbiasa';
            $config['mailtype'] = 'html';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['newline'] = "\r\n"; 
            $this->email->initialize($config);                        

            //kirim email
            $this->email->from($from_email, $name);
            $this->email->to($to_email);
            $this->email->subject($subject);
            $this->email->message($message);
            if ($this->email->send()){
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Your mail has been sent successfully!</div>');
                redirect(base_url('contactus'));
            }
            else {
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">There is error in sending mail! Please try again later</div>');
                redirect(base_url('contactus'));
            }
        }
    }
}
?>