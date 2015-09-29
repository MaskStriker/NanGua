<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class NG_Controller extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        if(!isset($this->session->userdata['username']))
        {
            $this->load->helper('url');
            redirect('/login');
            #header('Location: /login');
        }
    }
}