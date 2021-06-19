<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contactus extends CI_Controller
{

    function __construct()
	{
		parent::__construct();
        if(! $this->session->userdata('vendorAuth')){
        redirect('login');}
       $this->load->model('admin/Whyusmodel');
    }


    public function index()
    {
      //$data['whyus']= $this->Whyusmodel->fetch_details();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
  
        $this->load->view('admin/contactus');
        $this->load->view('admin/template/footer');
}


public function update(){
    $this->load->model('frontend/Whyusmodel');
    
    $this->input->post('formSubmit');

    if (!empty($_FILES['images']['name'])) {

        $File_name = '' ;

        $config['upload_path'] = APPPATH . '../upload/whyus';
        $config['file_name'] = $File_name;
        $config['overwrite'] = TRUE;
        $config["allowed_types"] = 'jpg|jpeg|png';
        $config["max_size"] = '';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('images')) {

            $this->data['error'] = $this->upload->display_errors();
            $this->session->set_flashdata('error', $this->upload->display_errors());

            redirect(base_url());
        } else {
            $dataimage_return = $this->upload->data();
            $imageurl = $dataimage_return['file_name'];
        }
    }

    if (!empty($_FILES['image']['name'])) {

        $File_name = '' ;

        $config['upload_path'] = APPPATH . '../upload/whyus';
        $config['file_name'] = $File_name;
        $config['overwrite'] = TRUE;
        $config["allowed_types"] = 'jpg|jpeg|png';
        $config["max_size"] = '';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {

            $this->data['error'] = $this->upload->display_errors();
            $this->session->set_flashdata('error', $this->upload->display_errors());

            redirect(base_url());
        } else {
            $dataimage_return = $this->upload->data();
            $imageurl2 = $dataimage_return['file_name'];
        }
    }
    
    $data = array(
        'file'=>$imageurl,
        'file2'=> $imageurl2,
    );
    if($this->Whyusmodel->contact_update($data)){
        $this->session->set_flashdata('error','Error in updating'); 
        redirect(base_url().'admin/contactus');  
    }else{
        $this->session->set_flashdata('success','Updated Successfully'); 
        redirect(base_url().'admin/contactus'); 
    }
}















}
