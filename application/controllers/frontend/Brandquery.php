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
            $six_digit_random_num = random_int(100000, 999999);
             $this->form_validation->set_rules('name', 'Name', 'trim|required');
             $this->form_validation->set_rules('email', 'Email', 'trim|required');
             $this->form_validation->set_rules('mob', 'Number', 'trim|required');
             
             $this->form_validation->set_rules('msg', 'Message', 'trim|required');
            
             if ($this->form_validation->run()) {
                $_SESSION['brand_name']=$this->input->post('name');
                $_SESSION['brand_email']=$this->input->post('email');
                $_SESSION['brand_mob']=$this->input->post('mob');
                
                $_SESSION['brand_msg']=$this->input->post('msg');
             
                $_SESSION['brand_otp'] = $six_digit_random_num;
                
                redirect($url);
                
               
                 
             } else {
                $this->session->set_flashdata('error', 'Please Fill All The Fields');
                redirect($url);
             }
    
        }
        


        public function verify_brand(){
            $this->load->model('frontend/Homemodel');
            $url = $_SESSION['url'];
    
             $this->form_validation->set_rules('brand_name', 'Name', 'trim|required');
             $this->form_validation->set_rules('brand_email', 'Email', 'trim|required');
             $this->form_validation->set_rules('brand_mob', 'Number', 'trim|required');
   
             $this->form_validation->set_rules('brand_msg', 'Message', 'trim|required');
            
             $this->form_validation->set_rules('ses_otp', 'Message', 'trim|required');
            
             if ($this->form_validation->run()) {
                
                if($this->input->post('ses_otp')==$this->input->post('otp')){
                    $data = array(
                        'name'=>$this->input->post('brand_name'),
                        'email'=>$this->input->post('brand_email'),
                        'mob'=>$this->input->post('brand_mob'),
                     
                        'msg'=>$this->input->post('brand_msg'),
                       
                 );
                 if($this->Homemodel->insert_data($data)){
                    
                    $this->session->set_flashdata('success', 'Your data have been submitted');
                  
                    unset($_SESSION["brand_name"]);
                    unset($_SESSION["brand_email"]);
                    unset($_SESSION["brand_mob"]);
                    
                    unset($_SESSION["brand_msg"]);
                
                   
                    unset($_SESSION["brand_otp"]);
                    redirect($url);
                    
                     
                 }else{
                    unset($_SESSION["brnd_name"]);
                    unset($_SESSION["brnd_email"]);
                    unset($_SESSION["brnd_mob"]);
                    
                    unset($_SESSION["msg"]);
                    unset($_SESSION["marketing"]);
                   
                    unset($_SESSION["brnd_otp"]);
                    $this->session->set_flashdata('error', 'Error In Submission');
                    redirect($url);
                 }
                }else{
                    $this->session->set_flashdata('errorbrandari', 'Please Enter Correct Otp');
                    redirect($url);
                }
    
                 
               
                 
             } else {
                $this->session->set_flashdata('error', 'Please Fill All The Fields');
                redirect($url);
             }
    
         }
    
        
}

?>  