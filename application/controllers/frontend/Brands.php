<?php
    class Brands extends CI_controller{
        public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Casecatemodel');
    }

        public function index(){
            
            $data['category']= $this->Casecatemodel->fetch_details();
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/template/navbar');
            
            $this->load->view('frontend/brands',$data);
            $this->load->view('frontend/template/footer');

        }
        
       
        
        
}

?>  