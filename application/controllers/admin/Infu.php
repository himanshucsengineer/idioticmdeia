<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Infu extends CI_Controller
{

    function __construct()
	{
		parent::__construct();
        if(! $this->session->userdata('vendorAuth')){
        redirect('login');}
       $this->load->model('admin/Infumodel');
    }


    public function index()
    {
      $data['infu']= $this->Infumodel->fetch_details();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
  
        $this->load->view('admin/infu',$data);
        $this->load->view('admin/template/footer');
}


public function first_update(){
    $this->load->model('frontend/Infumodel');
    
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
    $data = array(
        'head'=>$this->input->post('head'),
        'file' => $imageurl,
    );
    if($this->Infumodel->first_update($data)){
        $this->session->set_flashdata('error','Error in updating'); 
        redirect(base_url().'admin/infu');  
    }else{
        $this->session->set_flashdata('success','Updated Successfully'); 
        redirect(base_url().'admin/infu'); 
    }
}


public function sec_update(){
    $this->load->model('frontend/Infumodel');
    $this->input->post('formSubmit');

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
            $imageurl = $dataimage_return['file_name'];
        }
    }
    $data = array(
        'head'=>$this->input->post('head'),
        'content'=>$this->input->post('content'),
        'file' => $imageurl
    );
    if($this->Infumodel->sec_update($data)){
        $this->session->set_flashdata('error','Error in updating'); 
        redirect(base_url().'admin/infu');  
    }else{
        $this->session->set_flashdata('success','Updated Successfully'); 
    redirect(base_url().'admin/infu'); 
    }
}



public function third_update(){
    $this->load->model('frontend/Infumodel');
    $this->input->post('formSubmit');

    
    $data = array(
        'head'=>$this->input->post('head'),
        'content'=>$this->input->post('content'),
     
    );
    if($this->Infumodel->third_update($data)){
        $this->session->set_flashdata('error','Error in updating'); 
        redirect(base_url().'admin/infu');  
    }else{
        $this->session->set_flashdata('success','Updated Successfully'); 
    redirect(base_url().'admin/infu'); 
    }
}




public function services(){
    $this->load->model('admin/Infumodel');



   


     

    


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
                    
                    'sec' => "net",
                    'file'=>$imageurl,
                   
                    
             );
       
         if($this->Infumodel->services($data)){
            $this->session->set_flashdata('success', 'Your data have been submitted');
            redirect(base_url().'admin/infu');
             
         }else{
            $this->session->set_flashdata('error', 'Error In Submission');
            redirect(base_url().'admin/infu');
         }
     

 }






 public function faq(){
    $this->load->model('admin/Infumodel');



   
    $this->form_validation->set_rules('cate', 'Name', 'trim|required');
    $this->form_validation->set_rules('ques', 'Email', 'trim|required');

    $this->form_validation->set_rules('ans', 'Email', 'trim|required');

    

    if ($this->form_validation->run()) {
       
         $data = array(
                    
                    'sec' =>$this->input->post('cate'),
                    'head' =>$this->input->post('ques'),
                   
                    'content' =>$this->input->post('ans'),
             );
       
         if($this->Infumodel->faq($data)){
            $this->session->set_flashdata('success', 'Your data have been submitted');
            redirect(base_url().'admin/infu');
             
         }else{
            $this->session->set_flashdata('error', 'Error In Submission');
            redirect(base_url().'admin/infu');
         }
        } else {
            $this->session->set_flashdata('error', 'Please Fill All The Fields');
            redirect(base_url().'admin/infu');
         }

 }










 public function addinventory_api(){

    $getPurchaseData = $this->Infumodel->fetch_details();


    foreach ($getPurchaseData as $key => $value) { 
        if($value['sec']== "net"){
            $arrya_json[] = array($value['id'],'<img src="'.base_url().'upload/whyus/'.$value['file'].'">','<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value['id'].'" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
            <a class="delete_sliders" data-id="'.$value['id'].'"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>' );
             }
              
        }
        echo json_encode(array('data'=>$arrya_json));
        
    }
    public function fetch_faq(){

        $getPurchaseData = $this->Infumodel->fetch_details();
    
    
        foreach ($getPurchaseData as $key => $value) { 
            if($value['sec']== "left" || $value['sec']== "right"){
                $arrya_json[] = array($value['id'],$value['sec'],$value['head'],$value['content'],'<a class="edit" href="'.base_url().'admin/brands/galleryedit/'.$value['id'].'" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
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
        $getDeleteStatus = $this->Infumodel->delete_service($this->input->post('deletesliderId'));
        if($getDeleteStatus['message'] == 'yes')
        {
          $this->session->set_flashdata('success','Gallery  deleted successfully');
          redirect(base_url()."admin/infu");
        }
        else
        {
          $this->session->set_flashdata('error','Something went wrong. Please try again');
        redirect(base_url()."admin/infu");
          
        }
      }
      else
      {
        $this->session->set_flashdata('error','Something went wrong. Please try again');
        redirect(base_url()."admin/infu");

      }
    }
  }









}
