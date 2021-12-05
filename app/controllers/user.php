<?php 

	class user extends DController{
		
		public function __construct(){
			$data = array();
			$message = array();
			parent::__construct();

		}
		// public function list_user(){

		// 	$this->load->view('header');
		// 	$usermodel = $this->load->model('usermodel');

		// 	$table_customer = 'tbl_customers'; 
		// 	$data['user'] = $usermodel->user($table_customer);

		// 	$this->load->view('user', $data);
		// 	$this->load->view('footer');

		// }
		public function list_user(){
			$this->load->view('cpanel/header');
			$this->load->view('cpanel/menu');

			$table = "tbl_customers";

			$customermodel = $this->load->model('customermodel');
			$data['customer'] = $customermodel->products_customers($table);

			$this->load->view('cpanel/product/list_user',$data);
			$this->load->view('cpanel/footer');	
		}
		
		public function usbyid(){

			$this->load->view('header');
			$usermodel = $this->load->model('usermodel');
		
			$table_customer = 'tbl_customers'; 
			$id = 2;
			$data['usrbyid'] = $usermodel->usbyid($table_customer,$id);

			$this->load->view('ursbyid', $data);
			$this->load->view('footer');

		}

	}

?>