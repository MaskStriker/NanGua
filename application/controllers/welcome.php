<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library("session");
	}
	public function save(){
		$content = $this->input->post('content');
		if (!empty($content)) {
			// echo $content;

			$this->load->model("welcome_Model");
			$result = $this->welcome_Model->save();
			if ($result==true) {
				// $userdata = array('username' => $username );
				// $this->session->set_userdata($userdata);
				echo "true";
			}else{
				echo "false";
			}
		}else{
			echo "null";
		}
	}
	public function success()
	{
		if ($this->session->userdata('username')) {
			$this->load->view("success.php");
		}else{
			header('Location: /nangua/login');
		}
	}
}
