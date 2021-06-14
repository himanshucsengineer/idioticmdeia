<?php
    class Home extends CI_controller{
        public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/Homemodel');
    }

        public function index(){
            
            $data['casestudy']= $this->Homemodel->fetch_casestudy();
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/template/navbar');
            
            $this->load->view('frontend/home',$data);
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

            if (!empty($_FILES['images']['name'])) {

                $File_name = 'resume-' . strtotime(date('YmdHis'));

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
           
            
             $data = array(
                        'name'=>$this->input->post('name'),
                        'email'=>$this->input->post('email'),
                        'mob'=>$this->input->post('mob'),
                        'c_name'=>$this->input->post('c_name'),
                        'p_link'=>$this->input->post('p_link'),
                        'pic' =>  $imageurl
                        
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