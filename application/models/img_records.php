<?php
class img_records extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    public function getInfoByUser($username = null)
    {
        if($username)
        {
            $query = $this->db->get_where('img_records',array('username' => $username));
        }
        else
        {
            $query = $this->db->get('img_records');
        }
        return $query->result_array();
    }
    public function insert()
    {
        $this->load->helper('url');
        $data = array(
            //'username' => $this->input->post('username'),
            'username' => $this->session->userdata('username'),
            'title' =>  $this->input->post('title'),
            'addr'     => $this->input->post('addr'),
            'square'   => $this->input->post('square'),
            'agency'  => $this->input->post('agency'),
            'village'  => $this->input->post('village'),
            'wechat_num'  => $this->input->post('wechat_num'),
            'canton'  => $this->input->post('canton'),
            'landmark'  => $this->input->post('landmark'),
            'rent'  => $this->input->post('rent'),
            'floor'  => $this->input->post('floor'),
            'total_floor'  => $this->input->post('total_floor'),
            'degree'  => $this->input->post('degree'),
            'check_time'  => $this->input->post('check_time'),
            'nearline'  => $this->input->post('nearline'),
            'filenum'  => $this->input->post('filenum'),
            'create_time' => date('y-m-d h:i:s',time()),
            'update_time' => date('y-m-d h:i:s',time()),
        );
        $this->db->insert('img_records', $data);
        //返回上次insert的ID
        return $this->db->insert_id();
    }
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('img_records');
    }
}