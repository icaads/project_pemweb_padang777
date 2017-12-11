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

        public function cari($id){
           // var_dump($id);
            $this->db->where('IDMenu',$id);
            $query = $this->db->get('menu');
           // var_dump($query->result_array());
            return $query->row_array();
        }

        public function transaction($data){
            $this->db->insert('transaction',$data);
         }

         public function order($data){
            $this->db->insert('shoppingcart',$data);
        }

        public function popular(){
            $this->db->select('NamaMenu','HargaMenu','IDMenu','Rating');
            $this->db->select_sum('JumlahMenu');
            $this->db->from('shoppingcart');
            $this->db->join('menu','shoppingcart.IDMenu = menu.IDMenu');
            $this->db->group_by('shoppingcart.IDMenu');
            $this->db->order_by('JumlahMenu');
            $this->db->limit(10);
            $query = $this->db->get();
            return $query->result_array();
        }

         public function idtransaksi(){
            $data = "SELECT IDTransaksi FROM transaction ORDER BY IDTransaksi DESC LIMIT 1";
            $query = $this->db->query($data);
            return $query->result_array();
        }

        public function details($id){
            $this->db->trans_begin ();
                $this->db->select('*');
                $this->db->from('menu');
                $this->db->where('IDMenu',$id);
                $query = $this->db->get('');
            $this->db->trans_complete();
            if($this->db->trans_status()==FALSE){
                $this->db->trans_rollback();
                return FALSE;
            }
            else{
                return $query->result_array();
            }            
        }

        public function kategori_data($id){
            $this->db->trans_begin();
                $this->db->select('*');
                $this->db->from('menu');
                //$query="select * from menu,kategorimenu where kategorimenu.IDKategoriMenu = menu.IDKategoriMenu"
                $this->db->join('kategorimenu', 'kategorimenu.IDKategoriMenu = menu.IDKategoriMenu');
                $this->db->where('kategorimenu.IDKategoriMenu',$id);
                $query = $this->db->get();
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