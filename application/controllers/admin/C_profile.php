<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_profile extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model("profile_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
		$this->load->helper('url');
        $data["profile"] = $this->profile_model->getAll();
        $this->load->view("hypovid/bagian1", $data);
    }

	 public function add()
    {
        $profile = $this->profile_model;
        $validation = $this->form_validation;
        $validation->set_rules($profile->rules());

        if ($validation->run()) {
            $profile->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("hypovid/edit_profile");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/c_model');
       
        $profile = $this->profile_model;
        $validation = $this->form_validation;
        $validation->set_rules($profile->rules());

        if ($validation->run()) {
            $profile->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
			
        }

        $data["profile"] = $product->getById($id);
        if (!$data["profile"]) show_404();
        
        $this->load->view("hypovid/edit_form", $data);
    }
}