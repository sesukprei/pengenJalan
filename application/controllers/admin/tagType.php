<?php
defined('BASEPATH') OR exit('no direct script access allowed');

/**
 *
 */
class tagType extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model("tagType_model");
    $this->load->library("form_validation");
  }

  public function index()
  {
    $data["tagType"] = $this->tagType_model->getAll();
    $this->load->view("admin/tagType/tagType", $data);
  }

  public function tagTypeAdd()
  {
    $tagType = $this->tagType_model;
    $validation = $this->form_validation;
    $validation->set_rules($tagType->rules());

    if ($validation->run()){
      $tagType->save();
      $this->session->set_flashdata('success', 'berhasil disimpan!!!');
    }
    $this->load->view("admin/tagType/tagTypeAdd");
  }

  public function tagTypeEdit($id = null)
  {
    if (!isset($id)) redirect('admin/tagType');

    $tagType = $this->tagType_model;
    $validation = $this->form_validation;
    $validation->set_rules($tagType->rules());

    if($validation->run()){
      $tagType->update();
      $this->session->set_flashdata('success', 'berhasil disimpan!!!');
    }

    $data["tagType"] = $tagType->getById($id);
    if (!$data["tagType"]) show_404();

    $this->load->view("admin/tagType/tagTypeEdit", $data);
  }

  public function delete($id=null)
  {
    if (!isset($id)) show_404();

    if ($this->tagType_model->delete($id)){
      redirect(site_url('admin/tagType'));
    }
  }

}
