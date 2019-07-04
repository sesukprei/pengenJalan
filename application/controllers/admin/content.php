<?php
defined('BASEPATH') OR exit('no direct script access allowed');

/**
 *
 */
class Content extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("content_model");
    $this->load->library("form_validation");

  }

  public function index(){
    $data["content"] = $this->content_model->getAll();
    $this->load->view("admin/content/contentList", $data);
  }

  public function contentAdd()
  {
    $content = $this->content_model;
    $validation = $this->form_validation;
    $validation->set_rules($content->rules());

    if ($validation->run()){
      $content->save();
      $this->session->set_flashdata('success', 'berhasil disimpan!!!');
    }
    $this->load->view("admin/content/contentAdd");
  }

  public function contentEdit($id = null)
  {
    if (!isset($id)) redirect('admin/content');

    $content = $this->content_model;
    $validation = $this->form_validation;
    $validation->set_rules($content->rules());

    if($validation->run()){
      $content->update();
      $this->session->set_flashdata('success', 'perubahan berhasil disimpan!!!');
    }

    $data["content"] = $content->getById($id);
    if (!$data["content"]) show_404();

    $this->load->view("admin/content/contentEdit", $data);
  }

  public function contentDelete($id=null)
  {
    if (!isset($id)) show_404();

    if ($this->content_model->delete($id)){
      redirect(site_url('admin/content'));
    }
  }

}
