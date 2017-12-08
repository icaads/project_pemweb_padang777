<?php 

	defined('BASEPATH') OR exit('No direct script access allowed !');

	class Cabang extends CI_Model{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
        }

        public function show_cabang(){
            $query = $this->db->get('cabang');
            return $query->result_array();
        }

        public function show_cabang_case($lokasi){
            $this->db->where('IDCabang',$lokasi);
            $query = $this->db->get('cabang');
            return $query->result_array();
        }

    }
        
?>