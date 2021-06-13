<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Career extends CI_Controller
{

    function __construct()
	{
		parent::__construct();
        if(! $this->session->userdata('vendorAuth')){
        redirect('login');}
        //$this->load->model('admin/Branddatamodel');
    }


    public function index()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
  
        $this->load->view('admin/career');
        $this->load->view('admin/template/footer');
}


public function create_post(){
    $this->load->model('admin/Careermodel');



   

     $this->form_validation->set_rules('job_type', 'Name', 'trim|required');
     $this->form_validation->set_rules('job_name', 'Email', 'trim|required');
     $this->form_validation->set_rules('location', 'Number', 'trim|required');
     $this->form_validation->set_rules('exp', 'Choose Option', 'trim|required');
     $this->form_validation->set_rules('lang', 'Message', 'trim|required');

     $this->form_validation->set_rules('desc', 'Number', 'trim|required');
     $this->form_validation->set_rules('quali', 'Choose Option', 'trim|required');

    
     if ($this->form_validation->run()) {
        
         $data = array(
                    'job_type'=>$this->input->post('job_type'),
                    'job_name'=>$this->input->post('job_name'),
                    'location'=>$this->input->post('location'),
                    'exp'=>$this->input->post('exp'),
                    'lang'=>$this->input->post('lang'),
                    'descc'=>$this->input->post('desc'),
                    'quali'=>$this->input->post('quali'),
                    
             );
       
         if($this->Careermodel->create_post($data)){
            $this->session->set_flashdata('success', 'Your data have been submitted');
            redirect(base_url().'admin/career');
             
         }else{
            $this->session->set_flashdata('error', 'Error In Submission');
            redirect(base_url().'admin/career');
         }
     } else {
        $this->session->set_flashdata('error', 'Please Fill All The Fields');
        redirect(base_url().'admin/career');
     }

 }

   








}
