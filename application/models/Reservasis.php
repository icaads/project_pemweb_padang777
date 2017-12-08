<?php 

	defined('BASEPATH') OR exit('No direct script access allowed !');

	class Reservasis extends CI_Model{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
        }

        public function insert($data){
            $this->db->insert('Reservasi',$data);
        }


    }
        
?>