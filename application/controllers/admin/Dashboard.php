<?php 

class Dashboard extends CI_Controller{
    public  function index ()
    {
        $data['title'] = "Dashboard";
        $karyawan = $this->db->query('SELECT * FROM data_karyawan');
        $admin = $this->db->query('SELECT * FROM data_karyawan ');
        $barang = $this->db->query('SELECT * FROM data_barang');
        $kehadiran = $this->db->query('SELECT * FROM data_kehadiran');
        $data['karyawan'] = $karyawan->num_rows();
        $data['admin'] = $admin->num_rows();
        $data['barang'] = $barang->num_rows();
        $data['kehadiran'] = $kehadiran->num_rows();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dashboard',$data);
        $this->load->view('templates_admin/footer');
        
        
    //echo "Hello World";
    }

}


?>