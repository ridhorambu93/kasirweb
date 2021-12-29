<div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
   </div>
  
    <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/dataBarang/tambahData')?>">
    <i class="fas fa-plus">Tambah Data</i></a>
   <?php echo $this->session->flashdata('pesan') ?>
   <table class="table table-bordered table-striped mt-2">
       <tr>
           <th class="text-center">No</th>
           <th class="text-center">Kode Barang</th>
           <th class="text-center">Nama Barang</th>
           <th class="text-center">Harga Barang</th>
           <th class="text-center">Harga Pokok</th>
           <th class="text-center">Total</th>
           <th class="text-center">Action</th>
       </tr>
        <?php $no=1; foreach ($barang as $b): ?>
          <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $b->nama_barang ?></td>
                <td><?php echo $b->kode_barang ?></td>
                <!--format Rp-->
              
                <td>Rp. <?php echo number_format($b->harga_barang,0,',','.')  ?></td>
                <td>Rp. <?php echo number_format($b->pokok_barang,0,',','.')  ?></td>
                <td>Rp. <?php echo number_format( $b->harga_barang+$b->pokok_barang,0,',','.')  ?></td>
                <td>
                  <center>
                    <a class="btn btn-primary" href="<?php echo base_url('admin/dataBarang/updateData/'.$b->id_barang) ?>"><i class="fas fa-edit"></i></a>
                    <a onclick="return confirm('Yakin Hapus')" class="btn btn-danger" href="<?php echo base_url('admin/dataBarang/deleteData/'.$b->id_barang) ?>"><i class="fas fa-trash"></i></a>
                  </center>
                </td>
         </tr>
        <?php endforeach; ?>
   </table>

</div>