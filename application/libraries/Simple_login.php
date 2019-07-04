<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Simple_login Class
 * Class ini digunakan untuk fitur login, proteksi halaman dan logout
 * @author  Gun Gun Priatna
 * @url    https://recodeku.blogspot.com
 */

class Simple_login {

    // SET SUPER GLOBAL
    var $CI = NULL;

    /**
     * Class constructor
     *
     * @return   void
     */
    public function __construct() {
        $this->CI =& get_instance();
    }

    /*
    * cek username dan password pada table users, jika ada set session berdasar data user dari
    * table users.
    * @param string username dari input form
    * @param string password dari input form
    */
    public function login($first_name, $password) {

        //cek username dan password
        $query = $this->CI->db->get_where('user',array('first_name'=>$first_name,'password' => md5($password)));

        if($query->num_rows() == 1) {
            //ambil data user berdasar username
            $row  = $this->CI->db->query('SELECT id_user FROM user where first_name = "'.$first_name.'"');
            $admin     = $row->row();
            $id_user   = $admin->id_user;

            //set session user
            $this->CI->session->set_userdata('first_name', $first_name);
            $this->CI->session->set_userdata('id_login', uniqid(rand()));
            $this->CI->session->set_userdata('id_user', $id_user);

            //redirect ke halaman dashboard
            redirect(site_url('admin'));
        }else{

            //jika tidak ada, set notifikasi dalam flashdata.
            $this->CI->session->set_flashdata('sukses','Username atau password anda salah, silakan coba lagi.. ');

            //redirect ke halaman login
            redirect(site_url('login'));
        }
         return false;
     }

    /**
     * Cek session login, jika tidak ada, set notifikasi dalam flashdata, lalu dialihkan ke halaman
     * login
     */
    public function cek_login() {

      

        // //cek session username
        // if($this->CI->session->userdata('first_name') == '') {
        //
        //     //set notifikasi
        //     $this->CI->session->set_flashdata('sukses','Anda belum login');
        //
        //     //alihkan ke halaman login
        //     redirect(site_url('login'));
        // }
    }

    /**
     * Hapus session, lalu set notifikasi kemudian di alihkan
     * ke halaman login
     */
    public function logout() {
        $this->CI->session->unset_userdata('first_name');
        $this->CI->session->unset_userdata('id_login');
        $this->CI->session->unset_userdata('id');
        $this->CI->session->set_flashdata('sukses','Anda berhasil logout');
        redirect(site_url('login'));
    }
}
