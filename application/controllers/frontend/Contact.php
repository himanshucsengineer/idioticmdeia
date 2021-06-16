<?php
    class Contact extends CI_controller{
        public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/Contactmodel');
    }

        public function index(){
            
           
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/template/navbar');
            
            $this->load->view('frontend/contact');
            $this->load->view('frontend/template/footer');

        }
        public function insert_data(){
            $this->load->model('frontend/Contactmodel');
             
    
             $this->form_validation->set_rules('name', 'Name', 'trim|required');
             $this->form_validation->set_rules('email', 'Email', 'trim|required');
             $this->form_validation->set_rules('mob', 'Number', 'trim|required');
             $this->form_validation->set_rules('linkdin', 'Choose Option', 'trim|required');
             $this->form_validation->set_rules('msg', 'Message', 'trim|required');
             $this->form_validation->set_rules('profile_link', 'profile_link', 'trim|required');
             if ($this->form_validation->run()) {
                
                 $data = array(
                            'name'=>$this->input->post('name'),
                            'email'=>$this->input->post('email'),
                            'mob'=>$this->input->post('mob'),
                            'linkdin'=>$this->input->post('linkdin'),
                            'msg'=>$this->input->post('msg'),
                            'profile_link'=>$this->input->post('profile_link'),
                     );
               
                 if($this->Contactmodel->insert_data($data)){
                    $this->session->set_flashdata('success', 'Your data have been submitted');
                    redirect(base_url().'contact-us');
                     
                 }else{
                    $this->session->set_flashdata('error', 'Error In Submission');
                    redirect(base_url().'contact-us');
                 }
             } else {
                $this->session->set_flashdata('error', 'Please Fill All The Fields');
                redirect(base_url().'contact-us');
             }
    
         }
       
        
        
}

?>  