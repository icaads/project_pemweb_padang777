<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->model('laporan_admin');
		}

		public function index(){
			$data['js'] = $this->load->view('include/js',NULL,TRUE);
			$data['js_modal'] = $this->load->view('include/modal_script_admin',NULL,TRUE);
			$data['css'] = $this->load->view('include/css',NULL,TRUE);
			$data['footer'] = $this->load->view('include/footer',NULL,TRUE);

			$this->load->view('pages/admin', $data);
		}


//---------------------------------------------------------------------------------ADMINISTRATOR DATABASE---------------------------------------------------------------------------------

		public function admin_website(){
			$data['js'] = $this->load->view('include/js',NULL,TRUE);
			$data['css'] = $this->load->view('include/css',NULL,TRUE);
			$data['navigation_admin_website'] = $this->load->view('include/navigation_admin_website',NULL,TRUE);
			$data['footer'] = $this->load->view('include/footer',NULL,TRUE);

			$this->load->view('pages/admin_website', $data);
		}

		public function promo(){
			$this->load->library('grocery_CRUD');
			$crud = new grocery_CRUD();
			$crud->set_table('promo')
				->columns('IDPromo', 'KodePromo', 'DiskonHarga', 'TanggalBerlaku')
				->fields('IDPromo', 'KodePromo', 'DiskonHarga', 'TanggalBerlaku');
				
			$output = $crud->render();
			$data['crud'] = get_object_vars($output);

			$data['js'] = $this->load->view('include/js',NULL,TRUE);
			$data['css'] = $this->load->view('include/css',NULL,TRUE);
			$data['js_crud'] = $this->load->view('include/js_crud',$data,TRUE);
			$data['css_crud'] = $this->load->view('include/css_crud',$data,TRUE);
			$data['navigation_admin_website'] = $this->load->view('include/navigation_admin_website',NULL,TRUE);
			$data['footer'] = $this->load->view('include/footer',NULL,TRUE);

			$this->load->view('pages/admin_promo', $data);

		}

		public function menu1(){
			$this->load->library('grocery_CRUD');
			$crud = new grocery_CRUD();
			$crud->set_table('menu')
				->columns('IDMenu', 'IDKategoriMenu', 'NamaMenu', 'Harga', 'TipeMenu', 'Deskripsi', 'Rating', 'Status', 'Gambar')
				->fields('IDMenu', 'IDKategoriMenu', 'NamaMenu', 'Harga', 'TipeMenu', 'Deskripsi', 'Rating', 'Status', 'Gambar')
				->set_field_upload('Gambar', 'assets/picture/menu');
				
			$output = $crud->render();
			$data['crud'] = get_object_vars($output);

			$data['js'] = $this->load->view('include/js',NULL,TRUE);
			$data['css'] = $this->load->view('include/css',NULL,TRUE);
			$data['js_crud'] = $this->load->view('include/js_crud',$data,TRUE);
			$data['css_crud'] = $this->load->view('include/css_crud',$data,TRUE);
			$data['navigation_admin_website'] = $this->load->view('include/navigation_admin_website',NULL,TRUE);
			$data['footer'] = $this->load->view('include/footer',NULL,TRUE);

			$this->load->view('pages/admin_website_menu', $data);
		}

		public function infocust(){
			$data['infocust'] = $this->laporan_admin->get_infocust();
			$data['js'] = $this->load->view('include/js',NULL,TRUE);
			$data['js_datatable'] = $this->load->view('include/datatable_script_infocust',NULL,TRUE);
			$data['css'] = $this->load->view('include/css',NULL,TRUE);
			$data['navigation_admin_website'] = $this->load->view('include/navigation_admin_website',NULL,TRUE);
			$data['footer'] = $this->load->view('include/footer',NULL,TRUE);

			$this->load->view('pages/admin_infocust', $data);
		}

		public function lapreserv(){
			$data['lapreserv'] = $this->laporan_admin->get_lapreserv();
			$data['js'] = $this->load->view('include/js',NULL,TRUE);
			$data['js_datatable'] = $this->load->view('include/datatable_script_lapreserv',NULL,TRUE);
			$data['css'] = $this->load->view('include/css',NULL,TRUE);
			$data['navigation_admin_website'] = $this->load->view('include/navigation_admin_website',NULL,TRUE);
			$data['footer'] = $this->load->view('include/footer',NULL,TRUE);

			$this->load->view('pages/admin_lapreserv', $data);
		}

		public function lappenj1(){
			$data['lappenj'] = $this->laporan_admin->get_lappenj();
			$data['js'] = $this->load->view('include/js',NULL,TRUE);
			$data['js_datatable'] = $this->load->view('include/datatable_script_lappenj',NULL,TRUE);
			$data['css'] = $this->load->view('include/css',NULL,TRUE);
			$data['navigation_admin_website'] = $this->load->view('include/navigation_admin_website',NULL,TRUE);
			$data['footer'] = $this->load->view('include/footer',NULL,TRUE);

			$this->load->view('pages/admin_website_lappenj', $data);
		}


//---------------------------------------------------------------------------------ADMINISTRATOR DATABASE---------------------------------------------------------------------------------

		public function admin_database(){
			$data['js'] = $this->load->view('include/js',NULL,TRUE);
			$data['css'] = $this->load->view('include/css',NULL,TRUE);
			$data['navigation_admin_database'] = $this->load->view('include/navigation_admin_database',NULL,TRUE);
			$data['footer'] = $this->load->view('include/footer',NULL,TRUE);

			$this->load->view('pages/admin_database', $data);
		}

		public function menu2(){
			$this->load->library('grocery_CRUD');
			$crud = new grocery_CRUD();
			$crud->set_table('menu')
				->columns('IDMenu', 'IDKategoriMenu', 'NamaMenu', 'Harga', 'TipeMenu', 'Deskripsi', 'Rating', 'Status', 'Gambar')
				->fields('IDMenu', 'IDKategoriMenu', 'NamaMenu', 'Harga', 'TipeMenu', 'Deskripsi', 'Rating', 'Status', 'Gambar')
				->set_field_upload('Gambar', 'assets/picture/menu');
				
			$output = $crud->render();
			$data['crud'] = get_object_vars($output);

			$data['js'] = $this->load->view('include/js',NULL,TRUE);
			$data['css'] = $this->load->view('include/css',NULL,TRUE);
			$data['js_crud'] = $this->load->view('include/js_crud',$data,TRUE);
			$data['css_crud'] = $this->load->view('include/css_crud',$data,TRUE);
			$data['navigation_admin_database'] = $this->load->view('include/navigation_admin_database',NULL,TRUE);
			$data['footer'] = $this->load->view('include/footer',NULL,TRUE);

			$this->load->view('pages/admin_database_menu', $data);
		}

		public function kategori_menu(){
			$this->load->library('grocery_CRUD');
			$crud = new grocery_CRUD();
			$crud->set_table('kategorimenu')
				->columns('IDKategoriMenu', 'NamaKategoriMenu')
				->fields('IDKategoriMenu', 'NamaKategoriMenu');
				
			$output = $crud->render();
			$data['crud'] = get_object_vars($output);

			$data['js'] = $this->load->view('include/js',NULL,TRUE);
			$data['css'] = $this->load->view('include/css',NULL,TRUE);
			$data['js_crud'] = $this->load->view('include/js_crud',$data,TRUE);
			$data['css_crud'] = $this->load->view('include/css_crud',$data,TRUE);
			$data['navigation_admin_database'] = $this->load->view('include/navigation_admin_database',NULL,TRUE);
			$data['footer'] = $this->load->view('include/footer',NULL,TRUE);

			$this->load->view('pages/admin_kategori_menu', $data);
		}

		public function lappenj2(){
			$data['lappenj'] = $this->laporan_admin->get_lappenj();
			$data['js'] = $this->load->view('include/js',NULL,TRUE);
			$data['js_datatable'] = $this->load->view('include/datatable_script_lappenj',NULL,TRUE);
			$data['css'] = $this->load->view('include/css',NULL,TRUE);
			$data['navigation_admin_database'] = $this->load->view('include/navigation_admin_database',NULL,TRUE);
			$data['footer'] = $this->load->view('include/footer',NULL,TRUE);

			$this->load->view('pages/admin_database_lappenj', $data);
		}
	}
 ?>