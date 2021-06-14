<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Casecate extends CI_Controller
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
  
        $this->load->view('admin/casecate');
        $this->load->view('admin/template/footer');
}


public function create(){
  $this->load->model('admin/Casecatemodel');



 

   $this->form_validation->set_rules('name', 'Name', 'trim|required');
   
   

  
   if ($this->form_validation->run()) {

      if (!empty($_FILES['images']['name'])) {

          $File_name = '' ;

          $config['upload_path'] = APPPATH . '../upload/casecate';
          $config['file_name'] = $File_name;
          $config['overwrite'] = TRUE;
          $config["allowed_types"] = 'jpg|jpeg|png';
          $config["max_size"] = '';

          $this->load->library('upload', $config);

          if (!$this->upload->do_upload('images')) {

              $this->data['error'] = $this->upload->display_errors();
              $this->session->set_flashdata('error', $this->upload->display_errors());

              redirect(base_url().'casecate');
          } else {
              $dataimage_return = $this->upload->data();
              $imageurl = $dataimage_return['file_name'];
          }
      }
      
       $data = array(
                  'name'=>$this->input->post('name'),
                  
                  'file'=>$imageurl,
                 
                  
           );
     
       if($this->Casecatemodel->create($data)){
          $this->session->set_flashdata('success', 'Your data have been submitted');
          redirect(base_url().'admin/casecate');
           
       }else{
          $this->session->set_flashdata('error', 'Error In Submission');
          redirect(base_url().'admin/casecate');
       }
   } else {
      $this->session->set_flashdata('error', 'Please Fill All The Fields');
      redirect(base_url().'admin/casecate');
   }

}



public function addinventory_api(){

  $getPurchaseData = $this->Casecatemodel->fetch_details();


  foreach ($getPurchaseData as $key => $value) { 
      
          $arrya_json[] = array($value['id'],$value['name'],'<a href="'.base_url().'upload/casecate/'.$value['file'].'">view Image </a>','<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value['id'].'" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
          <a class="delete_sliders" data-id="'.$value['id'].'"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>' );
           
            
      }
      echo json_encode(array('data'=>$arrya_json));
      
  }

  public function delete_casecate(){ 
  
      if($this->input->post('deletesliderId'))
  {
    $this->form_validation->set_rules('deletesliderId','text','required');
    if($this->form_validation->run() == true)
    {
      $getDeleteStatus = $this->Casecatemodel->delete_casecate($this->input->post('deletesliderId'));
      if($getDeleteStatus['message'] == 'yes')
      {
        $this->session->set_flashdata('success','Gallery  deleted successfully');
        redirect(base_url()."admin/casecate");
      }
      else
      {
        $this->session->set_flashdata('error','Something went wrong. Please try again');
      redirect(base_url()."admin/casecate");
        
      }
    }
    else
    {
      $this->session->set_flashdata('error','Something went wrong. Please try again');
      redirect(base_url()."admin/casecate");

    }
  }
}









}
