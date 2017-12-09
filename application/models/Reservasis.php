<?php 

	defined('BASEPATH') OR exit('No direct script access allowed !');

	class Reservasis extends CI_Model{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
        }

        public function insert($data){
            $this->db->insert('reservasi',$data);
        }

		public function cek($data){

			$this->db->where('tanggalreservasi',$data['tanggalreservasi']);
			$this->db->where('IDMeja',$data['IDMeja']);
            $query = $this->db->get('reservasi');
            if ($query->num_rows()>0)  {
                return 1;
            }
            else{
                return 0;
            }
        }
		

    }
        
?>