<?php
    defined('BASEPATH') OR exit('No direct script access allowed !');

    class Shop_cart extends CI_Model{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
        }
        
        public function show_cart(){
            $query = $this->db->get('menu');
            return $query->result_array();
        }
    }
?>