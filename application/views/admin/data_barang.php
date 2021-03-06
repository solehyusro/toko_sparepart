<div class="container-fluid">
  <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm">Tambah Barang</i></button>
  <table class="table table-bordered">
    <tr>
      <th>No</th>
      <th>Kode Barang</th>
      <th>Nama Barang</th>
      <th>Stok</th>
      <th>Merk</th>
      <th>Harga</th>
      <th>Gambar</th>

      <th colspan="3" class="text-center">Aksi</th>
    </tr>

    <?php
    $no = 1;
    foreach ($barang as $brg) : ?>
      <tr>

        <td><?php echo $no++ ?></td>
        <td><?php echo $brg->kd_brg ?></td>
        <td><?php echo $brg->nm_brg ?></td>
        <td><?php echo $brg->stok ?></td>
        <td><?php echo $brg->merk ?></td>
        <td align="right">Rp. <?php echo number_format($brg->harga, 0, ',', '.') ?></td>
        <td class="text-center"><img src="<?php echo base_url(); ?>uploads/<?php echo $brg->gambar; ?>" width="100px" height="100px"></td>

        <td><?php echo anchor('admin/data_barang/edit/' . $brg->kd_brg, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>'); ?></td>
        <td>
          <div><button data-toggle="modal" data-target="#hapus" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button></div>
        </td>
      </tr>

    <?php endforeach; ?>


  </table>
</div>

<!-- Modal -->
<div class="modal fade" id="edit_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <?php echo form_open_multipart('admin/data_barang/update'); ?>

        <div class="form-group">
          <label>Kode Barang</label>
          <input type="hidden" name="kd_brg" class="form-control" value="<?php echo $brg->kd_brg ?>">
        </div>
        <div class="form-group">
          <label>Nama Barang</label>
          <input type="text" name="nm_brg" class="form-control" value="<?php echo $brg->nm_brg ?>">
        </div>
        <div class="form-group">
          <label>Stok Barang</label>
          <input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>">
        </div>
        <div class="form-group">
          <label>Merk Barang</label>
          <input type="text" name="merk" class="form-control" value="<?php echo $brg->merk ?>">
        </div>
        <div class="form-group">
          <label>Harga</label>
          <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <?php echo form_open_multipart('admin/data_barang/tambah_aksi'); ?>

        <div hidden class="form-group">
          <label>Kode Barang</label>
          <input type="text" name="kd_brg" class="form-control">
        </div>
        <div class="form-group">
          <label>Nama Barang</label>
          <input type="text" name="nm_brg" class="form-control">
        </div>
        <div class="form-group">
          <label>Stok Barang</label>
          <input type="text" name="stok" class="form-control">
        </div>
        <div class="form-group">
          <label>Merk Barang</label>
          <input type="text" name="merk" class="form-control">
        </div>
        <div class="form-group">
          <label>Harga</label>
          <input type="text" name="harga" class="form-control">
        </div>
        <div class="form-group">
          <label>Gambar Produk</label><br>
          <input type="file" name="gambar" class="form-control">
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
<div class="modal fade align-center" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog align-content-center" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <div class="modal-body ">
          <div class="form-group text-center">
            <h5>Apakah Anda Yakin!</h5>
            <br>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Tidak</button>
            <?php echo anchor('admin/data_barang/hapus/' . $brg->kd_brg, '<button type="submit" class="btn btn-danger ml-2">Hapus</button>') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>