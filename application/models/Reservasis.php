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
        
        public function idtransaksireservasi(){
            $data = "SELECT IDTransactionReserv FROM transactionreservasi ORDER BY IDTransactionReserv DESC LIMIT 1";
            $query = $this->db->query($data);
            return $query->result_array();
        }

        public function delete($id){
            $this->db->where('IDReservasi',$id);
            $this->db->delete('reservasi');
        }

        

        public function transaction(){
           $data = array ('IDReservasi' => 0);
           $this->db->insert('transactionreservasi',$data);
        }

        public function showdata($id){
            $this->db->select('IDReservasi,NamaCabang,IDMeja,tanggalreservasi');
            $this->db->from('reservasi');
            //$query="select * from menu,kategorimenu where kategorimenu.IDKategoriMenu = menu.IDKategoriMenu"
            $this->db->join('cabang', 'reservasi.IDCabang = cabang.IDCabang');
            $this->db->where('IDTransactionReserv',$id);
            $query = $this->db->get();
            return $query->result_array();
        }
    }
        
?>