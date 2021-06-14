<?php
    class Why extends CI_controller{
        public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Whyusmodel');
    }

        public function index(){
            
            $data['whyus']= $this->Whyusmodel->fetch_details();
            $this->load->view('frontend/template/header');
            $this->load->view('frontend/template/navbar');
            
            $this->load->view('frontend/why',$data);
            $this->load->view('frontend/template/footer');

        }
        
       
        
        
}

?>  