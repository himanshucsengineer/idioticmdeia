<?php
    class Home extends CI_controller{
        public function __construct()
    {
        parent::__construct();
        
    }

        public function index(){
            
           
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/template/navbar');
            
            $this->load->view('frontend/home');
            $this->load->view('frontend/template/footer');

        }
        
         public function insert_brand(){
        $this->load->model('frontend/Homemodel');
         

         $this->form_validation->set_rules('name', 'Name', 'trim|required');
         $this->form_validation->set_rules('email', 'Email', 'trim|required');
         $this->form_validation->set_rules('mob', 'Number', 'trim|required');
         $this->form_validation->set_rules('marketing', 'Choose Option', 'trim|required');
         $this->form_validation->set_rules('msg', 'Message', 'trim|required');
        
         if ($this->form_validation->run()) {
            
             $data = array(
                        'name'=>$this->input->post('name'),
                        'email'=>$this->input->post('email'),
                        'mob'=>$this->input->post('mob'),
                        'marketing'=>$this->input->post('marketing'),
                        'msg'=>$this->input->post('msg'),
                        
                 );
           
             if($this->Homemodel->insert_data($data)){
                $this->session->set_flashdata('successinfu', 'Your data have been submitted');
                redirect(base_url());
                 
             }else{
                $this->session->set_flashdata('errorinfu', 'Error In Submission');
                redirect(base_url());
             }
         } else {
            $this->session->set_flashdata('errorinfu', 'Please Fill All The Fields');
            redirect(base_url());
         }

     }




     public function insert_infu(){
        $this->load->model('frontend/Homemodel');
        $this->load->helper('url');


       

         $this->form_validation->set_rules('name', 'Name', 'trim|required');
         $this->form_validation->set_rules('email', 'Email', 'trim|required');
         $this->form_validation->set_rules('mob', 'Number', 'trim|required');
         $this->form_validation->set_rules('c_name', 'Choose Option', 'trim|required');
         $this->form_validation->set_rules('p_link', 'Message', 'trim|required');
        
         if ($this->form_validation->run()) {
            
             $data = array(
                        'name'=>$this->input->post('name'),
                        'email'=>$this->input->post('email'),
                        'mob'=>$this->input->post('mob'),
                        'c_name'=>$this->input->post('c_name'),
                        'p_link'=>$this->input->post('p_link'),
                        
                 );
           
             if($this->Homemodel->insert_infu($data)){
                $this->session->set_flashdata('successinfu', 'Your data have been submitted');
                redirect(base_url());
                 
             }else{
                $this->session->set_flashdata('errorinfu', 'Error In Submission');
                redirect(base_url());
             }
         } else {
            $this->session->set_flashdata('errorinfu', 'Please Fill All The Fields');
            redirect(base_url());
         }

     }
        
        
}

?>  