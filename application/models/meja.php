<?php 

	defined('BASEPATH') OR exit('No direct script access allowed !');

	class Meja extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
        }

        public function ShowData($lokasi){
            $this->db->where('IDCabang',$lokasi);
            $query = $this->db->get('meja');
            return $query->result_array();
        }
    }
?>
   