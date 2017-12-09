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

        public function kategori_menu(){
            $kategori = $this->input->get('kategori',TRUE);
            $this->db->trans_begin();
            $query = $this->db->get('menu');
            $query = $this->db->get_where('menu', array('IDKategoriMenu' => $kategori));
            $this->db->trans_complete();

            if($this->db->trans_status()==FALSE){
                $this->db->trans_rollback();
                return FALSE;
            }
            else{
                return $query->result_array();
            }
        }
    }
        
?>