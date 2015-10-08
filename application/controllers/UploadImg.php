<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include_once(APPPATH."core/NG_Controller.php");

class UploadImg extends NG_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('img_records');
        $this->load->helper('url_helper');
        $this->load->helper('url');
        $this->load->library("session");
        $this->load->helper('html');
        $this->load->library('image_lib');
        $this->load->library('zip');
    }
    public function index()
    {
        $username = $this->session->userdata('username');
        if($username == 'admin')
        {
            $data['img_records'] = $this->img_records->getInfoByUser();
        }
        else
        {
            $data['img_records'] = $this->img_records->getInfoByUser($username);
        }
        $this->load->view('templates/header');
        $this->load->view('img_records/index',$data);
        $this->load->view('templates/footer');
    }
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        //检查数据合法性
        //1.设置合法性规则
        $this->form_validation->set_rules('username','required');
        //2.执行合法性检查
        if($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('img_records/create');
            $this->load->view('templates/footer');
            return;
        }
        //执行sql,并返回insert的id
        $id = $this->img_records->insert();
        //文件上传、保存
        //判断是否呀
        $username = $this->session->userdata('username');
        $savePath = 'uploadimgs/'.$username.'/'.$id.'/';
        if (!file_exists($savePath)){ mkdir($savePath,0755,true);}
        $config['upload_path'] = $savePath ;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        //$config['max_size'] = 100000000;
        // $config['max_width'] = 1024;
        // $config['max_height'] = 768;
        //初始化文件上传类
        $this->load->library('upload',$config);
        //开始上传
        for($i = 1;$i<=12;$i++)
        {
            $this->upload->do_upload('userfile'.$i);
        // $this->upload->do_upload('userfile2')   
        }
        //返回至index列表
        $this->index();
    }
    public function show()
    {
        $data = array('imgs' => $this->getImgsInfo());
        $this->load->view('img_records/show',$data);
    }
    public function download()
    {
        $imgPath = $this->getImgsPath();
        $this->zip->read_dir($imgPath,FALSE);
        $this->zip->download($this->getUserName().'_'.$this->uri->segment(3).'_zip');
    }
    private function getImgsInfo(){
        $img_basepath = $this->getImgsPath();
        $dir = dir($img_basepath);
        $files = array();
        while (($file = $dir->read()) !== false)
        {
            if($file == '.' || $file =='..')continue;
            $files[$file] = $img_basepath.$file;
        }
        $dir->close();
        return $files;
    }
    private function getImgsPath(){
        $username = $this->getUserName();
        $id = $this->uri->segment(3);
        return 'uploadimgs/'.$username.'/'.$id.'/';
    }
    private function getUserName(){
        return $this->session->userdata('username');
    }
    public function deldir($dir) {
  //先删除目录下的文件：
  $dh=opendir($dir);
  while ($file=readdir($dh)) {
    if($file!="." && $file!="..") {
      $fullpath=$dir."/".$file;
      if(!is_dir($fullpath)) {
          unlink($fullpath);
      } else {
          deldir($fullpath);
      }
    }
  }
 
  closedir($dh);
  //删除当前文件夹：
  if(rmdir($dir)) {
    return true;
  } else {
    return false;
  }
}
    public function delete(){
        echo "libing test delete here!";
        $username = $this->session->userdata('username');
        $id = $this->uri->segment(3);
        $img_basepath = 'uploadimgs/'.$username.'/'.$id.'/';
        $this->deldir($img_basepath);
        $this->img_records->delete($id);
        redirect("/UploadImg/index");
    }
}