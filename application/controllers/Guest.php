<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('menu');
    }

	public function index(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nohp', 'Nomor Telepon', 'required|int');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $nama = $this->input->post('nama');
        $nohp = $this->input->post('nohp');
        $alamat = $this->input->post('alamat');


		$guest_session = array(
            'nama' => $nama,
            'nohp' => $nohp,
            'alamat' => $alamat,
            'status' => $guest
        );

        //var_dump($data_session);
        $this->session->set_userdata($guest_session);
        $data['js'] = $this->load->view('include/js.php',NULL,TRUE);
		$data['css'] = $this->load->view('include/css.php',NULL,TRUE);
		$data['navbar_guest'] = $this->load->view('include/navbar_guest.php',NULL,TRUE);
		$data['slider'] = $this->load->view('include/slider.php',NULL,TRUE);
		$data['footer'] = $this->load->view('include/footer.php',NULL,TRUE);
		$data['popularitem'] = $this->load->view('include/popularitem.php',NULL,TRUE);
		$data['artikel'] = $this->load->view('include/artikel.php',NULL,TRUE);
		$this->load->view('pages/home_guest.php',$data);
    }
    
    public function shop(){
        $this->load->model('menu');
		$data['js'] = $this->load->view('include/js.php',NULL,TRUE);
		$data['css'] = $this->load->view('include/css.php',NULL,TRUE);
		$data['navbar_guest'] = $this->load->view('include/navbar_guest.php',NULL,TRUE);
		$data['footer'] = $this->load->view('include/footer.php',NULL,TRUE);
		$data['modal_script'] = $this->load->view('include/modal_script.php',NULL,TRUE);
		$data['menu'] = $this->menu->show_menu();
		$this->load->view('pages/shop_guest.php',$data);
    }

    public function reservasi(){
		$data['js'] = $this->load->view('include/js.php',NULL,TRUE);
		$data['css'] = $this->load->view('include/css.php',NULL,TRUE);
        $data['navbar_guest'] = $this->load->view('include/navbar_guest.php',NULL,TRUE);
        $data['footer'] = $this->load->view('include/footer.php',NULL,TRUE);
        $data['modal_script'] = $this->load->view('include/modal_script.php',NULL,TRUE);
		$this->load->view('pages/reservation_guest.php',$data);
    }
}