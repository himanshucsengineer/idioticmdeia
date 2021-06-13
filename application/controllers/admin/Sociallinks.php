<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sociallinks extends CI_Controller
{

    function __construct()
	{
		parent::__construct();
        if(! $this->session->userdata('vendorAuth')){
        redirect('login');}
        $this->load->model('admin/Sociallinkmodel');
    }


    public function index()
    {
       $data['social']= $this->Sociallinkmodel->fetch_details();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
  
        $this->load->view('admin/sociallinks',$data);
        $this->load->view('admin/template/footer');
}


public function update_link(){
    $this->load->model('frontend/Sociallinkmodel');
    
    $this->input->post('formSubmit');

        
        
       
           
            $data = array(
                'insta'=>$this->input->post('insta'),
                'facebook'=>$this->input->post('facebook'),
                'tei'=>$this->input->post('tei'),
                'you'=>$this->input->post('you'),
                'print'=>$this->input->post('print'),
                'linkedin'=>$this->input->post('linkedin'),
                
         );
                    
            
                if($this->Sociallinkmodel->update_links($data)){
                    
                    $this->session->set_flashdata('error','Error in updating'); 
                    redirect(base_url().'admin/sociallinks');  
                }
                else{
                    $this->session->set_flashdata('success','Updated Successfully'); 
                    redirect(base_url().'admin/sociallinks'); 
                }
            
   
}



   
   




   








}

?>