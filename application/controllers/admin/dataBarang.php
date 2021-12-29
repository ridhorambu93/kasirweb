<?php
defined('BASEPATH') or exit('No direct script access allowed');
class DataBarang extends CI_Controller {
     public  function index ()
     {
         $data['title'] = "Data Barang"; 
         $data['barang'] = $this->kasirwebModel->get_data('data_barang')->result();
         $this->load->view('templates_admin/header',$data);
         $this->load->view('templates_admin/sidebar');
         $this->load->view('admin/dataBarang',$data);
         $this->load->view('templates_admin/footer');
     }
     public  function tambahData ()
     {
         $data['title'] = "Tambah Data Barang"; 
         $this->load->view('templates_admin/header',$data);
         $this->load->view('templates_admin/sidebar');
         $this->load->view('admin/tambahDataBarang',$data);
         $this->load->view('templates_admin/footer');
     }

    public  function tambahDataAksi()
    {
       $this->_rules();
       if($this->form_validation->run()==FALSE)
       {
           $this->tambahData();
       }
       else
       {
            $nama_barang = $this->input->post('nama_barang');
            $kode_barang = $this->input->post('kode_barang');
            $harga_barang = $this->input->post('harga_barang');
            $pokok_barang = $this->input->post('pokok_barang');
            $data = array(
                'nama_barang' => $nama_barang,
                'kode_barang' => $kode_barang,
                'harga_barang' => $harga_barang,
                'pokok_barang' => $pokok_barang,
                
            );

            $this->kasirwebModel->insert_data($data,'data_barang');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Ditambahkan</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('admin/dataBarang');
       }
    }
     public  function updateData ($id)
     {
         $where = array('id_barang'=>$id);
         $data['barang'] = $this->db->query("SELECT * FROM data_barang WHERE id_barang='$id'")->result();
         $data['title'] = "Update Data Barang"; 
         $this->load->view('templates_admin/header',$data);
         $this->load->view('templates_admin/sidebar');
         $this->load->view('admin/updateDataBarang',$data);
         $this->load->view('templates_admin/footer');
     }
    public  function updateDataAksi()
    {
       $this->_rules();
       if($this->form_validation->run()==FALSE)
       {
           $this->updateData();
           var_dump('test');
       }
       else
       {
            $id = $this->input->post('id_barang');
            $nama_barang = $this->input->post('nama_barang');
            $kode_barang = $this->input->post('kode_barang');
            $harga_barang = $this->input->post('harga_barang');
            $pokok_barang = $this->input->post('pokok_barang');
            $data = array(
                'nama_barang' => $nama_barang,
                'kode_barang' => $kode_barang,
                'harga_barang' => $harga_barang,
                'pokok_barang' => $pokok_barang,
                
            ); 
            $where = array(
                'id_barang' => $id
            );

            $this->kasirwebModel->update_data('data_barang',$data,$where);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('admin/dataBarang');
       }
    }
    public function _rules()
    {
        $this->form_validation->set_rules('nama_barang','nama_barang','required');
        $this->form_validation->set_rules('kode_barang','kode_barang','required');
        $this->form_validation->set_rules('harga_barang','harga_barang','required');
        $this->form_validation->set_rules('pokok_barang','pokok_barang','required');
    }

    public  function deleteData($id)
    {
        $where = array('id_barang'=>$id);
        $this->kasirwebModel->delete_data($where,'data_barang');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Dihapus</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('admin/dataBarang');
    }
}

?>