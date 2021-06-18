<?php
    class Home extends CI_controller{
        public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/Homemodel');
        $this->load->model('admin/Brandsmodel');
        
    }

        public function index(){
            $data['brands']=$this->Brandsmodel->fetch_details();
            $data['home']=$this->Homemodel->fetch_homedata();
            $data['casestudy']= $this->Homemodel->fetch_casestudy();
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/template/navbar');
            
            $this->load->view('frontend/home',$data);
            $this->load->view('frontend/template/footer');

        }
         
         public function insert_brand(){
        $this->load->model('frontend/Homemodel');
         
        $six_digit_random_num = random_int(100000, 999999);
         $this->form_validation->set_rules('name', 'Name', 'trim|required');
         $this->form_validation->set_rules('email', 'Email', 'trim|required');
         $this->form_validation->set_rules('phone', 'Number', 'trim|required');
         $this->form_validation->set_rules('marketing', 'Choose Option', 'trim|required');
         $this->form_validation->set_rules('msg', 'Message', 'trim|required');
        
         if ($this->form_validation->run()) {
            
            $_SESSION['brnd_name']=$this->input->post('name');
            $_SESSION['brnd_email']=$this->input->post('email');
            $_SESSION['brnd_mob']=$this->input->post('phone');
            $_SESSION['marketing']=$this->input->post('marketing');
            $_SESSION['msg']=$this->input->post('msg');
         
            $_SESSION['brnd_otp'] = $six_digit_random_num;
            
            redirect(base_url());
           
           
         } else {
            $this->session->set_flashdata('errorbrand', 'Please Fill All The Fields');
            redirect(base_url());
         }

     }




     public function verify_brand(){
        $this->load->model('frontend/Homemodel');
         

         $this->form_validation->set_rules('brnd_name', 'Name', 'trim|required');
         $this->form_validation->set_rules('brnd_email', 'Email', 'trim|required');
         $this->form_validation->set_rules('brnd_mob', 'Number', 'trim|required');
         $this->form_validation->set_rules('marketing', 'Choose Option', 'trim|required');
         $this->form_validation->set_rules('msg', 'Message', 'trim|required');
        
         $this->form_validation->set_rules('ses_otp', 'Message', 'trim|required');
        
         if ($this->form_validation->run()) {
            
            if($this->input->post('ses_otp')==$this->input->post('otp')){
                $data = array(
                    'name'=>$this->input->post('brnd_name'),
                    'email'=>$this->input->post('brnd_email'),
                    'mob'=>$this->input->post('brnd_mob'),
                    'marketing'=>$this->input->post('marketing'),
                    'msg'=>$this->input->post('msg'),
                   
             );
             if($this->Homemodel->insert_data($data)){
                
                $this->session->set_flashdata('successbrand', 'Your data have been submitted');
              
                unset($_SESSION["brnd_name"]);
                unset($_SESSION["brnd_email"]);
                unset($_SESSION["brnd_mob"]);
                
                unset($_SESSION["msg"]);
                unset($_SESSION["marketing"]);
               
                unset($_SESSION["brnd_otp"]);
                redirect(base_url());
                
                 
             }else{
                unset($_SESSION["brnd_name"]);
                unset($_SESSION["brnd_email"]);
                unset($_SESSION["brnd_mob"]);
                
                unset($_SESSION["msg"]);
                unset($_SESSION["marketing"]);
               
                unset($_SESSION["brnd_otp"]);
                $this->session->set_flashdata('errorbrand', 'Error In Submission');
                redirect(base_url());
             }
            }else{
                $this->session->set_flashdata('errorbrandarify', 'Please Enter Correct Otp');
                redirect(base_url());
            }

             
           
             
         } else {
            $this->session->set_flashdata('errorbrand', 'Please Fill All The Fields');
            redirect(base_url());
         }

     }
















     public function verify_infu(){
        $this->load->model('frontend/Homemodel');
         

         $this->form_validation->set_rules('name', 'Name', 'trim|required');
         $this->form_validation->set_rules('email', 'Email', 'trim|required');
         $this->form_validation->set_rules('mob', 'Number', 'trim|required');
         $this->form_validation->set_rules('c_name', 'Choose Option', 'trim|required');
         $this->form_validation->set_rules('p_link', 'Message', 'trim|required');
         $this->form_validation->set_rules('pic', 'Choose Option', 'trim|required');
         $this->form_validation->set_rules('ses_otp', 'Message', 'trim|required');
        
         if ($this->form_validation->run()) {
            
            if($this->input->post('ses_otp')==$this->input->post('otp')){
                $data = array(
                    'name'=>$this->input->post('name'),
                    'email'=>$this->input->post('email'),
                    'mob'=>$this->input->post('mob'),
                    'c_name'=>$this->input->post('c_name'),
                    'p_link'=>$this->input->post('p_link'),
                    'pic'=>$this->input->post('pic'),
             );
             if($this->Homemodel->insert_infu($data)){
                
                $this->session->set_flashdata('successinfu', 'Your data have been submitted');
              
                unset($_SESSION["name"]);
                unset($_SESSION["email"]);
                unset($_SESSION["mob"]);
                
                unset($_SESSION["c_name"]);
                unset($_SESSION["p_link"]);
                unset($_SESSION["pic"]);
                unset($_SESSION["ses_otp"]);
                redirect(base_url());
                
                 
             }else{
                unset($_SESSION["name"]);
                unset($_SESSION["email"]);
                unset($_SESSION["mob"]);
                
                unset($_SESSION["c_name"]);
                unset($_SESSION["p_link"]);
                unset($_SESSION["pic"]);
                unset($_SESSION["ses_otp"]);
                $this->session->set_flashdata('errorinfu', 'Error In Submission');
                redirect(base_url());
             }
            }else{
                $this->session->set_flashdata('errorinfuvarify', 'Please Enter Correct Otp');
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
       
        $six_digit_random_number = random_int(100000, 999999);
        
       

         $this->form_validation->set_rules('name', 'Name', 'trim|required');
         $this->form_validation->set_rules('email', 'Email', 'trim|required');
         $this->form_validation->set_rules('mob', 'Number', 'trim|required');
         $this->form_validation->set_rules('c_name', 'Choose Option', 'trim|required');
         $this->form_validation->set_rules('p_link', 'Message', 'trim|required');
        
         if ($this->form_validation->run()) {

            if (!empty($_FILES['images']['name'])) {

                $File_name = '';

                $config['upload_path'] = APPPATH . '../upload/selfi';
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
           
            
            
                        $_SESSION['name']=$this->input->post('name');
                        $_SESSION['email']=$this->input->post('email');
                        $_SESSION['mob']=$this->input->post('mob');
                        $_SESSION['c_name']=$this->input->post('c_name');
                        $_SESSION['p_link']=$this->input->post('p_link');
                        $_SESSION['pic'] =  $imageurl;
                        $_SESSION['otp'] = $six_digit_random_number;
                        
                        redirect(base_url());
     
           
             //if($this->Homemodel->insert_infu($data)){
               // $this->session->set_flashdata('successinfu', 'Your data have been submitted');
                //redirect(base_url());
                 
            // }else{
              //  $this->session->set_flashdata('errorinfu', 'Error In Submission');
                //redirect(base_url());
            // }
         } else {
            $this->session->set_flashdata('errorinfu', 'Please Fill All The Fields');
            redirect(base_url());
         }

     }
        
        
}

?>  