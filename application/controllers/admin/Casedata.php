<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Casedata extends CI_Controller
{

    function __construct()
	{
		parent::__construct();
        if(! $this->session->userdata('vendorAuth')){
        redirect('login');}
      $this->load->model('admin/Casecatemodel');
    }


    public function index()
    {
     // $data['whyus']= $this->Whyusmodel->fetch_details();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
  
        $this->load->view('admin/casedata');
        $this->load->view('admin/template/footer');
}





public function addinventory_api(){

  $getPurchaseData = $this->Casecatemodel->fetch_casedata();


  foreach ($getPurchaseData as $key => $value) { 
      
          $arrya_json[] = array($value['id'],$value['cate'],$value['title'],$value['likee'],$value['stra'],$value['view'],$value['eng'],$value['pages'],$value['audi'],'<a href="'.base_url().'upload/casestudy/'.$value['logo'].'">view Image </a>','<a href="'.base_url().'upload/casestudy/'.$value['fetured'].'">view Image </a>','<a href="'.base_url().'upload/casestudy/'.$value['ss1'].'">view Image </a>','<a href="'.base_url().'upload/casestudy/'.$value['ss2'].'">view Image </a>','<a href="'.base_url().'upload/casestudy/'.$value['ss3'].'">view Image </a>','<a href="'.base_url().'upload/casestudy/'.$value['ss4'].'">view Image </a>','<a href="'.base_url().'upload/casestudy/'.$value['ss5'].'">view Image </a>','<a href="'.base_url().'upload/casestudy/'.$value['ss6'].'">view Image </a>','<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value['id'].'" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
          <a class="delete_sliders" data-id="'.$value['id'].'"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>' );
           
            
      }
      echo json_encode(array('data'=>$arrya_json));
      
  }

  public function delete_casedata(){ 
  
      if($this->input->post('deletesliderId'))
  {
    $this->form_validation->set_rules('deletesliderId','text','required');
    if($this->form_validation->run() == true)
    {
      $getDeleteStatus = $this->Casecatemodel->delete_casedata($this->input->post('deletesliderId'));
      if($getDeleteStatus['message'] == 'yes')
      {
        $this->session->set_flashdata('success','Gallery  deleted successfully');
        redirect(base_url()."admin/casedata");
      }
      else
      {
        $this->session->set_flashdata('error','Something went wrong. Please try again');
      redirect(base_url()."admin/casedata");
        
      }
    }
    else
    {
      $this->session->set_flashdata('error','Something went wrong. Please try again');
      redirect(base_url()."admin/casedata");

    }
  }
}









}
