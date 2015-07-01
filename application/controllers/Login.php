<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library("session");
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
				$userdata = array('username' => $username );
				$this->session->set_userdata($userdata);
				echo "true";
			}else{
				echo "false";
			}
		}
	}
	public function success()
	{
		if ($this->session->userdata('username')) {
			$this->load->view("welcome_message.php");
		}else{
			header('Location: /nangua/login');
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