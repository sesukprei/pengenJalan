<?php
defined('BASEPATH') OR exit('no direct script access allowed');

/**
 *
 */
class Package extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("package_model");
    $this->load->library("form_validation");
  }

  public function index()
  {
    $data["package"] = $this->package_model->getAll();
    $this->load->view("admin/package/list", $data);
  }

  public function add()
  {
    $package = $this->package_model;
    $validation = $this->form_validation;
    $validation->set_rules($package->rules());

    if ($validation->run()){
      $package->save();
      $this->session->set_flashdata('success', 'berhasil disimpan!!!');
    }
    // $data['package_type'] = $this->package_model->getAllPackageType();
    $this->load->view("admin/package/add");
  }

  public function edit($id = null)
  {
    if (!isset($id)) redirect('admin/package');

    $package = $this->package_model;
    $validation = $this->form_validation;
    $validation->set_rules($package->rules());

    if($validation->run()){
      $package->update();
      $this->session->set_flashdata('success', 'berhasil disimpan!!!');
    }

    $data["package"] = $package->getById($id);
    if (!$data["package"]) show_404();

    $this->load->view("admin/package/edit_form", $data);
  }

  public function delete($id=null)
  {
    if (!isset($id)) show_404();

    if ($this->package_model->delete($id)){
      redirect(site_url('admin/package'));
    }
  }



}
