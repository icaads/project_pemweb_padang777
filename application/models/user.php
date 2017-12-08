<?php 

	defined('BASEPATH') OR exit('No direct script access allowed !');

	class User extends CI_Model{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
        }
        
        public function Login($table,$where){		
            return $this->db->get_where($table,$where);
        }	

        public function username_exists($username){
            $this->db->where('username',$username);
            $query = $this->db->get('customer');
            if ($query->num_rows()>0)  {
                return 1;
            }
            else{
                return 0;
            }
        }
        
		public function AddData($username, $email, $namadepan, $namabelakang, $alamat, $kota, $notlp, $password, $repassword, $kodepos, $tanggallahir)
		{
                $password = md5($password);
                $repassword = md5($repassword);
				$data = array(
					'username' => "$username",
                    'email' => "$email",
                    'namadepan' => "$namadepan",
                    'namabelakang' => "$namabelakang",
                    'alamat' => "$alamat",
                    'kota' => "$kota",
                    'notlp' => "$notlp",
                    'password'=> "$password",
                    'repassword' => "$repassword",
                    'kodepos' => "$kodepos",
                    'tanggallahir' => "$tanggallahir"
				);
			//var_dump($data);
			$this->db->insert('customer', $data);
        }
        public function profile($username){
			$this->db->where('username', $username);
			$query = $this->db->get('customer');
			$row = $query->row_array();
			return $row;
		}

        public function gantipassword($password_lama, $password_baru){
            $data = array(
                'password_lama' => "$password_lama",
                'password_baru' => "$password_baru"
            );
        }

	}

?>