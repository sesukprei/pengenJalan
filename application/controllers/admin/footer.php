<?php
defined('BASEPATH') OR exit('no direct script access allowed');

/**
 *
 */
class footer extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("footer_model");
    $this->load->library("form_validation");

  }

  public function index()
  {
    $data["footer"] = $this->footer_model->getAll();
    $this->load->view("admin/footer/footerList", $data);
  }

  public function footerAdd()
  {
    $footer = $this->footer_model;
    $validation = $this->form_validation;
    $validation->set_rules($footer->rules());

    if ($validation->run()){
      $footer->save();
      $this->session->set_flashdata('success', 'berhasil disimpan!!!');
    }
    $this->load->view("admin/footer/footerAdd");
  }

  public function footerList()
  {
    if (!isset($id)) redirect('admin/footer/');

    $footer = $this->footer_model;
    $validation = $this->form_validation;
    $validation->set_rules($footer->rules());

    if($validation->run()){
      $footer->update();
      $this->session->set_flashdata('success', 'berhasil disimpan!!!');
    }

    $data["footer"] = $footer->getById();
    if (!$data["footer"]) show_404();

    $this->load->view("admin/footer/footerList", $data);
  }

}
