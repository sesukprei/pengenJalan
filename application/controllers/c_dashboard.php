<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Dashboard extends CI_Controller{
  function __construct()
     {
      parent::__construct();
      $this->auth->cek_auth();
     }

     function index() {
      $data['username']= $this->session->userdata('username');
      $this->load->view('overview',$data);
     }
    }
?>
