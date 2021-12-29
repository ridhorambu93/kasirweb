<div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
</div>

<div class="card" style="width: 60%; margin-bottom: 100%;">

   <div class="card-body">
    <?php foreach ($barang as $b): ?>
      <form method="POST" action="<?php echo base_url ('admin/dataJabatan/updateDataAksi') ?>">
      <div class="form-group">
         <label>Nama Barang</label>
         <input type="hidden" name="id_barang" class="form-control" value="<?php echo $b->id_barang ?>">
         <input type="text" name="nama_barang" class="form-control" value="<?php echo $b->nama_barang ?>">
         <?php echo form_error('nama_barang','<div class="text-small text-danger"></div>') ?>
      </div>
      <div class="form-group">
         <label>Kode Barang</label>
         <input type="number" name="kode_barang" class="form-control" value="<?php echo $b->kode_barang ?>">
          <?php echo form_error('kode_barang','<div class="text-small text-danger"></div>') ?>
      </div>
      <div class="form-group">
         <label>Harga Barang</label>
         <input type="number" name="harga_barang" class="form-control" value="<?php echo $b->harga_barang ?>">
          <?php echo form_error('harga_barang','<div class="text-small text-danger"></div>') ?>
      </div>
      <div class="form-group">
         <label>Harga Pokok</label>
         <input type="number" name="pokok_barang" class="form-control" value="<?php echo $b->pokok_barang ?>">
         <?php echo form_error('pokok_barang','<div class="text-small text-danger"></div>') ?>
      </div>
      <button type="submit" class="btn btn-success" >Update</button>
      </form>
    <?php endforeach; ?>
   </div>
</div>

</div>