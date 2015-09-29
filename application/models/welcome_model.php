<?php
class welcome_Model extends CI_Model {

  public function __construct()
  {
    $this->load->database();
    $this->load->library("session");
  }
  public function save($slug = FALSE){
  if ($slug === FALSE)
  {
  	$content =  $this->input->post('content');
    $data = array(
                 'username' => $this->session->userdata('username'),
                 'content' => $content ,
                 'time' => date('y-m-d h:i:s',time())
              );

    
    if ($this->db->insert('detail', $data)) {
    	return true;
    }
    return FALSE;
  }
  
  $query = $this->db->get_where('users', array('slug' => $slug));
  return $query->row_array();
}
}