<?php
    class About extends CI_controller{
        public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Aboutusmodel');
    }

        public function index(){
            
            $data['about']= $this->Aboutusmodel->fetch_details();
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/template/navbar');
            
            $this->load->view('frontend/about',$data);
            $this->load->view('frontend/template/footer');

        }
        
       
        
        
}

?>  