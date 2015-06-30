<?php
class Login_Model extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }
  public function checkUser($slug = FALSE){
  if ($slug === FALSE)
  {
  	$username =  $this->input->post('username');
	$password =  $this->input->post('password');
    $query = $this->db->get_where('users', array('username' => $username));
    $query = $query->row_array();
    if (!empty($query)) {
    	return true;
    }
    return FALSE;
  }
  
  $query = $this->db->get_where('users', array('slug' => $slug));
  return $query->row_array();
}
}