<div class="container-fluid">
  <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm">Tambah User</i></button>
  <table class="table table-bordered">
    <tr>
      <th>No</th>
      <th>Id</th>
      <th>Nama </th>
      <th>Username</th>
      <th>Password</th>
      <th>Alamat</th>
      <th>Hak Akses</th>



      <th colspan="2" class="text-center">Aksi</th>
    </tr>

    <?php
    $no = 1;
    foreach ($tb_user as $usr) : ?>
      <tr>

        <td><?php echo $no++ ?></td>
        <td><?php echo $usr->id ?></td>
        <td><?php echo $usr->nama ?></td>
        <td><?php echo $usr->username ?></td>
        <td>*****</td>
        <td><?php echo $usr->alamat ?></td>
        <td><?php echo $usr->role_id ?></td>

        <td><?php echo anchor('user/edit/' . $usr->id, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>'); ?></td>
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
        <h5 class="modal-title" id="exampleModalLabel">Form Input User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <?php echo form_open_multipart('user/update'); ?>
        <div class="form-group">
          <label>Nama User</label>
          <input type="text" name="nama" class="form-control" value="<?php echo $usr->nama ?>">
        </div>
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" class="form-control" value="<?php echo $usr->username ?>">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control" value="<?php echo $usr->password ?>">
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <input type="text" name="alamat" class="form-control" value="<?php echo $usr->alamat ?>">
        </div>
        <div class="form-group">
          <label>Hak Akses</label>
          <input type="text" name="role_id" class="form-control" value="<?php echo $usr->role_id ?>">
        </div>

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
        <h5 class="modal-title" id="exampleModalLabel">Form Input User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <?php echo form_open_multipart('user/tambah_aksi'); ?>
        <div class="form-group">
          <label>Nama User</label>
          <input type="text" name="nama" class="form-control">
        </div>
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <input type="text" name="alamat" class="form-control">
        </div>
        <div class="form-group">
          <label>Hak Akses</label>
          <select class="form-control" name="role_id">
            <option value="1">Admin</option>
            <option value="2">Pelanggan</option>
          </select>
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
            <?php echo anchor('user/hapus/'  . $usr->id, '<button type="submit" class="btn btn-danger ml-2">Hapus</button>') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>j