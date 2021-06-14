<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Newcase extends CI_Controller
{

    function __construct()
	{
		parent::__construct();
        if(! $this->session->userdata('vendorAuth')){
        redirect('login');}
      $this->load->model('admin/Casecatemodel');
    }


    public function index()
    {
        $data['category']= $this->Casecatemodel->fetch_details();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
  
        $this->load->view('admin/newcase',$data);
        $this->load->view('admin/template/footer');
}


public function creatcase(){
    $this->load->model('admin/Casecatemodel');
    $this->form_validation->set_rules('cate', 'Name', 'trim|required');
    $this->form_validation->set_rules('title', 'Name', 'trim|required');
    $this->form_validation->set_rules('like', 'Name', 'trim|required');
    $this->form_validation->set_rules('stra', 'Name', 'trim|required');
    $this->form_validation->set_rules('view', 'Name', 'trim|required');
    $this->form_validation->set_rules('eng', 'Name', 'trim|required');
    $this->form_validation->set_rules('pages', 'Name', 'trim|required');
    $this->form_validation->set_rules('audi', 'Name', 'trim|required');
    if ($this->form_validation->run()) {
        $img_data = array();
        // Count total files
        $countfiles = count($_FILES['files']['name']);
        for ($i = 0; $i < $countfiles; $i++) {

            if (!empty($_FILES['files']['name'][$i])) {

                // Define new $_FILES array - $_FILES['file']
                $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                $_FILES['file']['size'] = $_FILES['files']['size'][$i];

                // Set preference
                $config['upload_path'] = APPPATH . '../upload/casestudy';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = ''; // max_size in kb
                $config['file_name'] = $_FILES['files']['name'][$i];

                //Load upload library
                $this->load->library('upload', $config);

                // File upload
                if ($this->upload->do_upload('file')) {
                    // Get data about the file
                    $uploadData = $this->upload->data();
                    $filename = $uploadData['file_name'];
                    

                    // Initialize array
                     $img_data[] = $filename;
                   
                }
                
            }
        }

        if (!empty($_FILES['logo']['name'])) {
            $File_name = '' ;
            $config['upload_path'] = APPPATH . '../upload/casestudy';
            $config['file_name'] = $File_name;
            $config['overwrite'] = TRUE;
            $config["allowed_types"] = 'jpg|jpeg|png';
            $config["max_size"] = '';
            $this->load->library('upload', $config);
                if (!$this->upload->do_upload('logo')) {
                $this->data['error'] = $this->upload->display_errors();
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect(base_url().'casecate');
                } else {
                    $dataimage_return = $this->upload->data();
                    $logo = $dataimage_return['file_name'];
                }
            }

            if (!empty($_FILES['images']['name'])) {
                $File_name = '' ;
                $config['upload_path'] = APPPATH . '../upload/casestudy';
                $config['file_name'] = $File_name;
                $config['overwrite'] = TRUE;
                $config["allowed_types"] = 'jpg|jpeg|png';
                $config["max_size"] = '';
                $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('images')) {
                    $this->data['error'] = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect(base_url().'casecate');
                    } else {
                        $dataimage_return = $this->upload->data();
                        $fetured = $dataimage_return['file_name'];
                    }
                }
                $link = $this->input->post('title');
                $link = str_replace(' ', '-', $link);
            $data = array(
                'cate'=>$this->input->post('cate'),
                'title'=>$this->input->post('title'),
                'likee'=>$this->input->post('like'),
                'stra'=>$this->input->post('stra'),
                'view'=>$this->input->post('view'),
                'eng'=>$this->input->post('eng'),
                'pages'=>$this->input->post('pages'),
                'audi'=>$this->input->post('audi'),
                'logo'=>$logo,
                'fetured'=>$fetured,
                'ss1'=>$img_data[0],
                'ss2'=>$img_data[1],
                'ss3'=>$img_data[2],
                'ss4'=>$img_data[3],
                'ss5'=>$img_data[4],
                'ss6'=>$img_data[5],
                'link' => $link
                
            );
            if($this->Casecatemodel->creatcase($data)){
                $this->session->set_flashdata('success', 'Your data have been submitted');
                redirect(base_url().'admin/newcase');
            }else{
                $this->session->set_flashdata('error', 'Error In Submission');
                redirect(base_url().'admin/newcase');
            }
        } else {
            $this->session->set_flashdata('error', 'Please Fill All The Fields');
            redirect(base_url().'admin/newcase');
        }
    }












}
