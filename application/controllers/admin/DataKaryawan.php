<?php
defined('BASEPATH') or exit('No direct script access allowed');
class dataKaryawan extends CI_Controller {
     public  function index ()
     {
        // $this->load->view('path');
        $data = $this->db->query('SELECT * FROM data_karyawan')->result();
        var_dump($data);
     }
}
?>