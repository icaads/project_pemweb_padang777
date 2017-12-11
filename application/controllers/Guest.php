<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller{
	public function cek(){
        $nama = $this->input->post('nama');
        $nohp = $this->input->post('nohp');
        $alamat = $this->input->post('alamat');
        
        if ($nama == NULL | $nohp == NULL || $alamat == NULL){
            redirect(base_url('login/login_bar'));
        }

		$guest_session = array(
            'nama' => $nama,
            'NoTlp' => $nohp,
            'alamat' => $alamat,
            'status' => "guest",
            'statusreservasi' => 0,
            'statuspesan' => 0
        );
       
        $this->session->set_userdata($guest_session);
        $this->load->model('menu');
		$menu['menu'] = $this->menu->popular();
        $data['js'] = $this->load->view('include/js.php',NULL,TRUE);
		$data['css'] = $this->load->view('include/css.php',NULL,TRUE);
		$data['navbar_guest'] = $this->load->view('include/navbar_guest.php',NULL,TRUE);
		$data['slider'] = $this->load->view('include/slider.php',NULL,TRUE);
		$data['footer'] = $this->load->view('include/footer.php',NULL,TRUE);
		$data['popularitem'] = $this->load->view('include/popularitem.php',$menu,TRUE);
        $data['artikel'] = $this->load->view('include/artikel.php',NULL,TRUE);

		$this->load->view('pages/home.php',$data);
    }
    
    public function shop(){
        $this->load->model('menu');
		$data['js'] = $this->load->view('include/js.php',NULL,TRUE);
		$data['css'] = $this->load->view('include/css.php',NULL,TRUE);
		$data['navbar_guest'] = $this->load->view('include/navbar_guest.php',NULL,TRUE);
		$data['footer'] = $this->load->view('include/footer.php',NULL,TRUE);
		$data['modal_script'] = $this->load->view('include/modal_script.php',NULL,TRUE);
        $data['menu'] = $this->menu->kategori_data($this->input->post('id'));
		$this->load->view('pages/shop.php',$data);
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
?>