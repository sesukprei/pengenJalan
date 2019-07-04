<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class feedback extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("feedback_model");
    $this->load->library("form_validation");
  }

  public function index()
  {
    $data["feedback"] = $this->feedback_model->getAll();
    $this->load->view("admin/feedback/feedbackList", $data);
  }

  public function delete($id=null)
  {
    if (!isset($id)) show_404();

    if ($this->feedback_model->delete($id)){
      redirect(site_url('admin/feedback'));
    }
  }
}
