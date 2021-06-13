<?php
class Career extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/Careermodel');
    }

    public function index()
    {

        $data['career'] = $this->Careermodel->fetch_career();
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/career', $data);
        $this->load->view('frontend/template/footer');
    }

    public function intern_req()
    {
        $this->load->model('frontend/Careermodel');
        $this->input->post('formSubmit');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('mob', '', 'required');
        $this->form_validation->set_rules('job_name', '', 'required');
        
        if ($this->form_validation->run()) {
            if (!empty($_FILES['images']['name'])) {

                $File_name = 'resume-' . strtotime(date('YmdHis'));

                $config['upload_path'] = APPPATH . '../upload/career';
                $config['file_name'] = $File_name;
                $config['overwrite'] = TRUE;
                $config["allowed_types"] = 'pdf|doc|docx';
                $config["max_size"] = '2048';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('images')) {

                    $this->data['error'] = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $this->upload->display_errors());

                    redirect(base_url().'career');
                } else {
                    $dataimage_return = $this->upload->data();
                    $imageurl = $dataimage_return['file_name'];
                }
            }

            $datas = array(
                'name' => $this->input->post('name'),
                'mob' => $this->input->post('mob'),
                'email' => $this->input->post('email'),
                'job_name' => $this->input->post('job_name'),
              

                'file' => $imageurl,
            );





            if ($this->Careermodel->intern_req($datas)) {

                $this->session->set_flashdata('success', 'Thank You For Apply');
                redirect(base_url().'career');
            } else {
                $this->session->set_flashdata('error', 'Error In Submission');
                redirect(base_url().'career');
            }
        } else {


            $this->session->set_flashdata('error', 'fill all the fields.');
            redirect(base_url().'career');
        }
    }

    public function job_req()
    {
        $this->load->model('frontend/Careermodel');
        $this->input->post('formSubmit');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('mob', '', 'required');
        $this->form_validation->set_rules('job_name', '', 'required');
        
        if ($this->form_validation->run()) {
            if (!empty($_FILES['images']['name'])) {

                $File_name = 'resume-' . strtotime(date('YmdHis'));

                $config['upload_path'] = APPPATH . '../upload/career';
                $config['file_name'] = $File_name;
                $config['overwrite'] = TRUE;
                $config["allowed_types"] = 'pdf|doc|docx';
                $config["max_size"] = '2048';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('images')) {

                    $this->data['error'] = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $this->upload->display_errors());

                    redirect(base_url().'career');
                } else {
                    $dataimage_return = $this->upload->data();
                    $imageurl = $dataimage_return['file_name'];
                }
            }
           
            $datas = array(
                'name' => $this->input->post('name'),
                'mob' => $this->input->post('mob'),
                'email' => $this->input->post('email'),
                'job_name' => $this->input->post('job_name'),
              

                'file' => $imageurl,
            );





            if ($this->Careermodel->job_req($datas)) {

                $this->session->set_flashdata('success', 'Thank You For Apply');
                redirect(base_url().'career');
            } else {
                $this->session->set_flashdata('error', 'Error In Submission');
                redirect(base_url().'career');
            }
        } else {


            $this->session->set_flashdata('error', 'fill all the fields.');
            redirect(base_url().'career');
        }
    }
}
