<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('login.php');
	}
	public function loginHandler(){
		$username = $this->input->post('username');
		if (!empty($username)) {
			$this->load->model("login_Model");
			$existedUser = $this->login_Model->checkUser();
			$data["existedUser"] = $existedUser;
			if ($existedUser==true) {
				$this->load->view('welcome_message.php');
			}else{
				
			}
		}

		
	}
	public function welcome_message(){
		$this->load->helper('url');
		$data["username"] =  $this->input->post('username');
		$data["password"] =  $this->input->post('password');
		$this->load->view('welcome_message.php',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */