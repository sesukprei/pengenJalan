<?php
defined('BASEPATH') OR exit('no direct script access allowed');

/**
 *
 */
class keunggulan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("keunggulan_model");
    $this->load->library("form_validation");

  }

  public function index()
  {
    $data["keunggulan"] = $this->keunggulan_model->getAll();
    $this->load->view("admin/keunggulan/keunggulanList", $data);
  }

  public function keunggulanAdd()
  {
    $keunggulan = $this->keunggulan_model;
    $validation = $this->form_validation;
    $validation->set_rules($keunggulan->rules());

    if ($validation->run()){
      $keunggulan->save();
      $this->session->set_flashdata('success', 'berhasil disimpan!!!');
    }
    $this->load->view("admin/keunggulan/keunggulanAdd");
  }

  public function keunggulanEdit($id = null)
  {
    if (!isset($id)) redirect('admin/keunggulan');

    $keunggulan = $this->keunggulan_model;
    $validation = $this->form_validation;
    $validation->set_rules($keunggulan->rules());

    if($validation->run()){
      $keunggulan->update();
      $this->session->set_flashdata('success', 'berhasil disimpan!!!');
    }

    $data["keunggulan"] = $keunggulan->getById($id);
    if (!$data["keunggulan"]) show_404();

    $this->load->view("admin/keunggulan/keunggulanEdit", $data);
  }

  public function delete($id=null)
  {
    if (!isset($id)) show_404();

    if ($this->keunggulan_model->delete($id)){
      redirect(site_url('admin/keunggulan'));
    }
  }
}
