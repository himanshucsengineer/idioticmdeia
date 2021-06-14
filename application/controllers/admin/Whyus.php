<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Whyus extends CI_Controller
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
      $data['whyus']= $this->Whyusmodel->fetch_details();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
  
        $this->load->view('admin/whyus',$data);
        $this->load->view('admin/template/footer');
}


public function first_update(){
    $this->load->model('frontend/Whyusmodel');
    
    $this->input->post('formSubmit');
    $data = array(
        'head'=>$this->input->post('head'),
        'content'=>$this->input->post('content'),
    );
    if($this->Whyusmodel->first_update($data)){
        $this->session->set_flashdata('error','Error in updating'); 
        redirect(base_url().'admin/whyus');  
    }else{
        $this->session->set_flashdata('success','Updated Successfully'); 
        redirect(base_url().'admin/whyus'); 
    }
}


public function sec_update(){
    $this->load->model('frontend/Whyusmodel');
    $this->input->post('formSubmit');
    $data = array(
        'head'=>$this->input->post('head'),
        'content'=>$this->input->post('content'),
    );
    if($this->Whyusmodel->sec_update($data)){
        $this->session->set_flashdata('error','Error in updating'); 
        redirect(base_url().'admin/whyus');  
    }else{
        $this->session->set_flashdata('success','Updated Successfully'); 
    redirect(base_url().'admin/whyus'); 
    }
}




public function services(){
    $this->load->model('admin/Whyusmodel');



   

     $this->form_validation->set_rules('head', 'Name', 'trim|required');
     $this->form_validation->set_rules('content', 'Email', 'trim|required');
     

    
     if ($this->form_validation->run()) {

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
        
         $data = array(
                    'head'=>$this->input->post('head'),
                    'content'=>$this->input->post('content'),
                    'sec' => "third",
                    'file'=>$imageurl,
                   
                    
             );
       
         if($this->Whyusmodel->services($data)){
            $this->session->set_flashdata('success', 'Your data have been submitted');
            redirect(base_url().'admin/whyus');
             
         }else{
            $this->session->set_flashdata('error', 'Error In Submission');
            redirect(base_url().'admin/whyus');
         }
     } else {
        $this->session->set_flashdata('error', 'Please Fill All The Fields');
        redirect(base_url().'admin/whyus');
     }

 }



 public function addinventory_api(){

    $getPurchaseData = $this->Whyusmodel->fetch_details();


    foreach ($getPurchaseData as $key => $value) { 
        if($value['sec']== "third"){
            $arrya_json[] = array($value['id'],$value['head'],$value['content'],'<a href="'.base_url().'upload/whyus/'.$value['file'].'">view Image </a>','<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value['id'].'" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
            <a class="delete_sliders" data-id="'.$value['id'].'"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>' );
             }
              
        }
        echo json_encode(array('data'=>$arrya_json));
        
    }

    public function delete_service(){ 
    
        if($this->input->post('deletesliderId'))
    {
      $this->form_validation->set_rules('deletesliderId','text','required');
      if($this->form_validation->run() == true)
      {
        $getDeleteStatus = $this->Whyusmodel->delete_service($this->input->post('deletesliderId'));
        if($getDeleteStatus['message'] == 'yes')
        {
          $this->session->set_flashdata('success','Gallery  deleted successfully');
          redirect(base_url()."admin/whyus");
        }
        else
        {
          $this->session->set_flashdata('error','Something went wrong. Please try again');
        redirect(base_url()."admin/whyus");
          
        }
      }
      else
      {
        $this->session->set_flashdata('error','Something went wrong. Please try again');
        redirect(base_url()."admin/whyus");

      }
    }
  }









}
