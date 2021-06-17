<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Career extends CI_Controller
{

    function __construct()
	{
		parent::__construct();
        if(! $this->session->userdata('vendorAuth')){
        redirect('login');}
        $this->load->model('admin/Careermodel');
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

 public function addinventory_api(){

    $getPurchaseData = $this->Careermodel->fetch_career();


    foreach ($getPurchaseData as $key => $value) { 


        $arrya_json[] = array($value['id'],$value['job_name'],$value['job_type'],$value['location'],$value['exp'],$value['lang'],$value['descc'],$value['quali'],'<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value['id'].'" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
       <a class="delete_sliders" data-id="'.$value['id'].'"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>' );
        }
         echo json_encode(array('data'=>$arrya_json));
    }

    public function delete_listed_job(){ 
    
        if($this->input->post('deletesliderId'))
    {
      $this->form_validation->set_rules('deletesliderId','text','required');
      if($this->form_validation->run() == true)
      {
        $getDeleteStatus = $this->Careermodel->delete_listed_job($this->input->post('deletesliderId'));
        if($getDeleteStatus['message'] == 'yes')
        {
          $this->session->set_flashdata('success','Gallery  deleted successfully');
          redirect(base_url()."admin/career");
        }
        else
        {
          $this->session->set_flashdata('error','Something went wrong. Please try again');
        redirect(base_url()."admin/career");
          
        }
      }
      else
      {
        $this->session->set_flashdata('error','Something went wrong. Please try again');
        redirect(base_url()."admin/career");

      }
    }
  }


  public function export(){
    $file_name = 'Listed_job'.'.csv';
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$file_name");
    header("Content-Type: application/csv");
    
    
    
    $getPurchaseData = $this->Careermodel->fetch_career();
    
    $file = fopen('php://output','w');
    
    $header = array("Id", "Job Type", "Job Name", "Location", "Experiance", "Language ", "Description", "Qualification","date");
    
    fputcsv($file, $header);
    
    foreach ($getPurchaseData as $key => $value) { 
            fputcsv($file, $value);                

        
    }
    fclose($file);
    exit;
        
    
}





}
