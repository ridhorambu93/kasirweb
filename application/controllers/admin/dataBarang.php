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

            $this->kasirwebModel->insert_data($data,'nama_barang');
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Ditambahkan</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('admin/dataJabatan');
       }
    }
     public  function updateData ($id)
     {
         $where = array('id_jabatan'=>$id);
         $data['jabatan'] = $this->db->query("SELECT * FROM data_jabatan WHERE id_jabatan='$id'")->result();
         $data['title'] = "Update Data Jabatan"; 
         $this->load->view('templates_admin/header',$data);
         $this->load->view('templates_admin/sidebar');
         $this->load->view('admin/updateDataJabatan',$data);
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
            $id = $this->input->post('id_jabatan');
            $nama_jabatan = $this->input->post('nama_jabatan');
            $gaji_pokok = $this->input->post('gaji_pokok');
            $tj_transport = $this->input->post('tj_transport');
            $uang_makan = $this->input->post('uang_makan');
            $data = array(
                'nama_jabatan' => $nama_jabatan,
                'gaji_pokok' => $gaji_pokok,
                'tj_transport' => $tj_transport,
                'uang_makan' => $uang_makan,
                
            ); 
            $where = array(
                'id_jabatan' => $id
            );

            $this->penggajianModel->update_data('data_jabatan',$data,$where);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Diupdate</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('admin/dataJabatan');
       }
    }
    public function _rules()
    {
        $this->form_validation->set_rules('nama_jabatan','nama_jabatan','required');
        $this->form_validation->set_rules('gaji_pokok','gaji_pokok','required');
        $this->form_validation->set_rules('tj_transport','tj_transport','required');
        $this->form_validation->set_rules('uang_makan','uang_makan','required');
    }

    public  function deleteData($id)
    {
        $where = array('id_jabatan'=>$id);
        $this->penggajianModel->delete_data($where,'data_jabatan');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Dihapus</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('admin/dataJabatan');
    }
}

?>