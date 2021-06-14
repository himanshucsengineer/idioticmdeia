<?php
    class Brandquery extends CI_controller{
        public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/Homemodel');
        $this->load->model('admin/Casecatemodel');
    }

        public function index(){
            
            $data['category']= $this->Casecatemodel->fetch_details();
            $data['casedata']= $this->Casecatemodel->fetch_casedata();
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/template/navbar');
            
            $this->load->view('frontend/brandquery',$data);
            $this->load->view('frontend/template/footer');

        }
        
        public function insert_brand(){
            $this->load->model('frontend/Homemodel');
            $url = $_SESSION['url'];
    
             $this->form_validation->set_rules('name', 'Name', 'trim|required');
             $this->form_validation->set_rules('email', 'Email', 'trim|required');
             $this->form_validation->set_rules('mob', 'Number', 'trim|required');
             
             $this->form_validation->set_rules('msg', 'Message', 'trim|required');
            
             if ($this->form_validation->run()) {
                
                 $data = array(
                            'name'=>$this->input->post('name'),
                            'email'=>$this->input->post('email'),
                            'mob'=>$this->input->post('mob'),
                         
                            'msg'=>$this->input->post('msg'),
                            
                     );
               
                 if($this->Homemodel->insert_data($data)){
                    $this->session->set_flashdata('success', 'Your data have been submitted');
                    redirect($url);
                     
                 }else{
                    $this->session->set_flashdata('error', 'Error In Submission');
                    redirect($url);
                 }
             } else {
                $this->session->set_flashdata('error', 'Please Fill All The Fields');
                redirect($url);
             }
    
         }
        
        
}

?>  