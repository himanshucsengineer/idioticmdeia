<?php
class Casestudy extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Casecatemodel');
        $this->load->helper('url');
    }

    public function index($slug = "")
    {

        $data['casedata'] = $this->Casecatemodel->blog_detail($slug);
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/casestudy',$data);
        $this->load->view('frontend/template/footer');
    }

    

    
}
