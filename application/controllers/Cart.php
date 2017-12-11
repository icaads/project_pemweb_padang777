<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller{
    public function shopping_cart(){
        $this->load->model('shop_cart');
        $this->load->library('cart');
        
        $data['js'] = $this->load->view('include/js.php',NULL,TRUE);
        $data['css'] = $this->load->view('include/css.php',NULL,TRUE);
        $data['navigation'] = $this->load->view('include/navigation.php',NULL,TRUE);
        $data['navigation_login'] = $this->load->view('include/navigation_login.php',NULL,TRUE);
        $data['navbar_guest'] = $this->load->view('include/navbar_guest.php',NULL,TRUE);
        $data['footer'] = $this->load->view('include/footer.php',NULL,TRUE);
        $data['cart']=$this->shop_cart->show_cart();
        $this->load->view('pages/shopping_cart', $data);
    }
}
?>