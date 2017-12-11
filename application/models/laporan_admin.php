<?php 

	defined('BASEPATH') OR exit('No direct script access allowed !');

	class laporan_admin extends CI_Model{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
        }

        public function get_infocust(){
        	$query = $this->db->select('username, Email, NamaDepan, NamaBelakang, Alamat, Kota, NoTlp, KodePos, Tanggallahir')
        					  ->from('customer')
        					  ->get();
        	return $query->result_array();
        }

        public function get_lapreserv(){
        	$query = $this->db->select('*')
        					  ->from('reservasi')
        					  ->get();
        	return $query->result_array();
        }

        public function get_lappenj(){
			$query = $this->db->select('*')
							  ->from('transaction')
							  ->get();
			return $query->result_array();
        }

	}

?>