<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class About extends CI_Controller
{

    function __construct()
	{
		parent::__construct();
        if(! $this->session->userdata('vendorAuth')){
        redirect('login');}
       $this->load->model('admin/Aboutusmodel');
    }


    public function index()
    {
        $data['about']= $this->Aboutusmodel->fetch_details();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
  
        $this->load->view('admin/about',$data);
        $this->load->view('admin/template/footer');
}


public function update_about(){
    $this->load->model('frontend/Aboutusmodel');
    
    $this->input->post('formSubmit');
    $data = array(
      
        'content'=>$this->input->post('content'),
    );
    if($this->Aboutusmodel->update_about($data)){
        $this->session->set_flashdata('error','Error in updating'); 
        redirect(base_url().'admin/about');  
    }else{
        $this->session->set_flashdata('success','Updated Successfully'); 
        redirect(base_url().'admin/about'); 
    }
}


public function update_vision(){
    $this->load->model('frontend/Aboutusmodel');
    $this->input->post('formSubmit');
    $data = array(
        'head'=>$this->input->post('head'),
        'content'=>$this->input->post('content'),
    );
    if($this->Aboutusmodel->update_vision($data)){
        $this->session->set_flashdata('error','Error in updating'); 
        redirect(base_url().'admin/about');  
    }else{
        $this->session->set_flashdata('success','Updated Successfully'); 
    redirect(base_url().'admin/about'); 
    }
}


public function update_core_team(){
    $this->load->model('frontend/Aboutusmodel');
    $this->input->post('formSubmit');
    $data = array(
        'head'=>$this->input->post('head'),
        'content'=>$this->input->post('content'),
    );
    if($this->Aboutusmodel->update_core_team($data)){
        $this->session->set_flashdata('error','Error in updating'); 
        redirect(base_url().'admin/about');  
    }else{
        $this->session->set_flashdata('success','Updated Successfully'); 
    redirect(base_url().'admin/about'); 
    }
}


public function update_hq(){
    $this->load->model('frontend/Aboutusmodel');
    $this->input->post('formSubmit');
    $data = array(
        'head'=>$this->input->post('head'),
        'address'=>$this->input->post('address'),
    );
    if($this->Aboutusmodel->update_hq($data)){
        $this->session->set_flashdata('error','Error in updating'); 
        redirect(base_url().'admin/about');  
    }else{
        $this->session->set_flashdata('success','Updated Successfully'); 
    redirect(base_url().'admin/about'); 
    }
}




public function team(){
    $this->load->model('admin/Aboutusmodel');



   

     $this->form_validation->set_rules('name', 'Name', 'trim|required');
   
     

    
     if ($this->form_validation->run()) {

        if (!empty($_FILES['images']['name'])) {

            $File_name = '' ;

            $config['upload_path'] = APPPATH . '../upload/aboutus';
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
                    'name'=>$this->input->post('name'),
                   
                    'sec' => "team",
                    'file'=>$imageurl,
                   
                    
             );
       
         if($this->Aboutusmodel->team($data)){
            $this->session->set_flashdata('success', 'Your data have been submitted');
            redirect(base_url().'admin/about');
             
         }else{
            $this->session->set_flashdata('error', 'Error In Submission');
            redirect(base_url().'admin/about');
         }
     } else {
        $this->session->set_flashdata('error', 'Please Fill All The Fields');
        redirect(base_url().'admin/about');
     }

 }



 public function addinventory_api(){

    $getPurchaseData = $this->Aboutusmodel->fetch_details();


    foreach ($getPurchaseData as $key => $value) { 
        if($value['sec']== "team"){
            $arrya_json[] = array($value['id'],$value['name'],'<a href="'.base_url().'upload/aboutus/'.$value['file'].'">view Image </a>','<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value['id'].'" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
            <a class="delete_sliders" data-id="'.$value['id'].'"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>' );
             }
              
        }
        echo json_encode(array('data'=>$arrya_json));
        
    }

    public function delete_team(){ 
    
        if($this->input->post('deletesliderId'))
    {
      $this->form_validation->set_rules('deletesliderId','text','required');
      if($this->form_validation->run() == true)
      {
        $getDeleteStatus = $this->Aboutusmodel->delete_team($this->input->post('deletesliderId'));
        if($getDeleteStatus['message'] == 'yes')
        {
          $this->session->set_flashdata('success','Gallery  deleted successfully');
          redirect(base_url()."admin/about");
        }
        else
        {
          $this->session->set_flashdata('error','Something went wrong. Please try again');
        redirect(base_url()."admin/about");
          
        }
      }
      else
      {
        $this->session->set_flashdata('error','Something went wrong. Please try again');
        redirect(base_url()."admin/about");

      }
    }
  }









}
