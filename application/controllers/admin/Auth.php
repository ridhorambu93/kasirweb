<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller {
     public  function index ()
     {
         $data['title'] = "Login";
         $this->load->view('templates_admin/header',$data);
         $this->load->view('admin/auth/login');
         $this->load->view('templates_admin/footer');
     }

     public function register()
     {
        $data['title'] = "Register";
        $this->load->view('templates_admin/header',$data);
        $this->load->view('admin/auth/register');
        $this->load->view('templates_admin/footer');
     }
}

?>