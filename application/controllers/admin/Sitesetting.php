<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sitesetting extends CI_Controller
{

    function __construct()
	{
		parent::__construct();
        if(! $this->session->userdata('vendorAuth')){
        redirect('login');}
        $this->load->model('admin/Sitesettingmodel');
    }


    public function index()
    {
       $data['setting']= $this->Sitesettingmodel->fetch_details();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
  
        $this->load->view('admin/sitesetting',$data);
        $this->load->view('admin/template/footer');
}






   
   
public function logo_update(){
  $this->load->model('frontend/Sitesettingmodel');
  
  $this->input->post('formSubmit');

  if (!empty($_FILES['images']['name'])) {

    $File_name = '' ;

    $config['upload_path'] = APPPATH . '../upload/sitesetting';
    $config['file_name'] = $File_name;
    $config['overwrite'] = TRUE;
    $config["allowed_types"] = 'jpg|jpeg|png|svg';
    $config["max_size"] = '';

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('images')) {

        $this->data['error'] = $this->upload->display_errors();
        $this->session->set_flashdata('error', $this->upload->display_errors());

        redirect(base_url().'admin/sitesetting');
    } else {
        $dataimage_return = $this->upload->data();
        $imageurl = $dataimage_return['file_name'];
    }
}



  $data = array(
      'logo'=>$imageurl,
      
  );
  if($this->Sitesettingmodel->logo_update($data)){
      $this->session->set_flashdata('error','Error in updating'); 
      redirect(base_url().'admin/sitesetting');  
  }else{
      $this->session->set_flashdata('success','Updated Successfully'); 
      redirect(base_url().'admin/sitesetting'); 
  }
}



   

public function about_update(){
  $this->load->model('frontend/Sitesettingmodel');
  $this->input->post('formSubmit');
  $data = array(
    
      'content'=>$this->input->post('content'),
  );
  if($this->Sitesettingmodel->about_update($data)){
      $this->session->set_flashdata('error','Error in updating'); 
      redirect(base_url().'admin/sitesetting');  
  }else{
      $this->session->set_flashdata('success','Updated Successfully'); 
  redirect(base_url().'admin/sitesetting'); 
  }
}







}

?>