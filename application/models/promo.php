<?php 

	defined('BASEPATH') OR exit('No direct script access allowed !');

	class Promo extends CI_Model{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
        }

        public function kode($table,$where){		
            return $this->db->get_where($table,$where);
        }	


    }
?>