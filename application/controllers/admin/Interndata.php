<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Interndata extends CI_Controller
{

    function __construct()
	{
		parent::__construct();
        if(! $this->session->userdata('vendorAuth')){
        redirect('login');}
        $this->load->model('admin/Careerdatamodel');
    }


    public function index()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
  
        $this->load->view('admin/interndata');
        $this->load->view('admin/template/footer');
}

public function addinventory_api(){

    $getPurchaseData = $this->Careerdatamodel->fetch_intern();


    foreach ($getPurchaseData as $key => $value) { 


        $arrya_json[] = array($value['id'],$value['name'],$value['email'],$value['mob'],$value['job_name'],'<a href="'.base_url().'upload/career/'.$value['file'].'">view Reasume </a>','<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value['id'].'" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
       <a class="delete_sliders" data-id="'.$value['id'].'"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>' );
        }
         echo json_encode(array('data'=>$arrya_json));
    }

    public function delete_intern(){ 
    
        if($this->input->post('deletesliderId'))
    {
      $this->form_validation->set_rules('deletesliderId','text','required');
      if($this->form_validation->run() == true)
      {
        $getDeleteStatus = $this->Careerdatamodel->delete_intern($this->input->post('deletesliderId'));
        if($getDeleteStatus['message'] == 'yes')
        {
          $this->session->set_flashdata('success','Gallery  deleted successfully');
          redirect(base_url()."admin/interndata");
        }
        else
        {
          $this->session->set_flashdata('error','Something went wrong. Please try again');
        redirect(base_url()."admin/interndata");
          
        }
      }
      else
      {
        $this->session->set_flashdata('error','Something went wrong. Please try again');
        redirect(base_url()."admin/interndata");

      }
    }
  }
   




  public function export(){
    $file_name = 'Intern_Data'.'.csv';
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$file_name");
    header("Content-Type: application/csv");
    
    
    
    $getPurchaseData =$this->Careerdatamodel->fetch_intern();
    
    $file = fopen('php://output','w');
    
    $header = array("Id", "Name", "Email", "Number", "Post Name", "Resume ");
    
    fputcsv($file, $header);
    
    foreach ($getPurchaseData as $key => $value) { 
            fputcsv($file, $value);                

        
    }
    fclose($file);
    exit;
        
    
}








}

?>