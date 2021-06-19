<?php
    class Influancer extends CI_controller{
        public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Infumodel');
    }

        public function index(){
            $data['infu']= $this->Infumodel->fetch_details();
           
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/template/navbar');
            
            $this->load->view('frontend/influancer',$data);
            $this->load->view('frontend/template/footer');

        }
        public function insert_infu(){
            $this->load->model('frontend/Homemodel');
            $this->load->helper('url');


    
            $six_digit_random_number = random_int(100000, 999999);
           $this->load->config('email');
        $this->load->library('email');
        
        
         $from = $this->config->item('smtp_user');
        $to = $this->input->post('email');
        $subject = "Account Verification";
        $message = "<p>Your One time Password for  verication is: ".$six_digit_random_number."</p>
       
                  ";

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);
    
             $this->form_validation->set_rules('name', 'Name', 'trim|required');
             $this->form_validation->set_rules('email', 'Email', 'trim|required');
             $this->form_validation->set_rules('mob', 'Number', 'trim|required');
             $this->form_validation->set_rules('c_name', 'Choose Option', 'trim|required');
             $this->form_validation->set_rules('p_link', 'Message', 'trim|required');
            
             if ($this->form_validation->run()) {
                $this->email->send();
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
                
                $_SESSION['infu_name']=$this->input->post('name');
                $_SESSION['infu_email']=$this->input->post('email');
                $_SESSION['infu_mob']=$this->input->post('mob');
                $_SESSION['infu_c_name']=$this->input->post('c_name');
                $_SESSION['infu_p_link']=$this->input->post('p_link');
                $_SESSION['infu_pic'] =  $imageurl;
                $_SESSION['infu_otp'] = $six_digit_random_number;
                
                redirect(base_url().'influancer');
               
                 
             } else {
                $this->session->set_flashdata('error', 'Please Fill All The Fields');
                redirect(base_url().'influancer');
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
                    
                    $this->session->set_flashdata('success', 'Your data have been submitted');
                  
                    unset($_SESSION["infu_name"]);
                    unset($_SESSION["infu_email"]);
                    unset($_SESSION["infu_mob"]);
                    
                    unset($_SESSION["infu_c_name"]);
                    unset($_SESSION["infu_p_link"]);
                    unset($_SESSION["infu_pic"]);
                    unset($_SESSION["infu_otp"]);
                    redirect(base_url().'influancer');
                    
                     
                 }else{
                    unset($_SESSION["infu_name"]);
                    unset($_SESSION["infu_email"]);
                    unset($_SESSION["infu_mob"]);
                    
                    unset($_SESSION["infu_c_name"]);
                    unset($_SESSION["infu_p_link"]);
                    unset($_SESSION["infu_pic"]);
                    unset($_SESSION["infu_otp"]);
                    $this->session->set_flashdata('error', 'Error In Submission');
                    redirect(base_url().'influancer');
                 }
                }else{
                    $this->session->set_flashdata('errorinfuvari', 'Please Enter Correct Otp');
                    redirect(base_url().'influancer');
                }
    
                 
               
                 
             } else {
                $this->session->set_flashdata('error', 'Please Fill All The Fields');
                redirect(base_url().'influancer');
             }
    
         }
       
        
        
}

?>  