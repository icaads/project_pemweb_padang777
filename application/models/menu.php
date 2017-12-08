<?php 

	defined('BASEPATH') OR exit('No direct script access allowed !');

	class Menu extends CI_Model{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
        }

        public function show_menu(){
            $query = $this->db->get('menu');
            return $query->result_array();
        }

        public function show_menu($values){
            $query = $this->db->get_where('menu',$values, );
            return $query->result_array();
        }
    }
        
?>