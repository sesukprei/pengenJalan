<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {

        // Fungsi Login
        $valid = $this->form_validation;
        $first_name = $this->input->post('first_name');
        $password = $this->input->post('password');
        $valid->set_rules('first_name','First_name','required');
        $valid->set_rules('password','Password','required');

        if($valid->run()) {
            $this->simple_login->login($first_name,$password, base_url('admin'), base_url('login'));
        }
        // End fungsi login
        $this->load->view('account/v_login');
    }

    public function logout(){
        $this->simple_login->logout();
    }
}
