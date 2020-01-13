<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>Edit Data User</h3>

    <?php foreach ($tb_user as $brg) : ?>

        <form method="post" action="<?php echo base_url() . 'user/update' ?>">
            <div class="form-group">
                <label>Id</label>
                <input type="text" readonly="readonly" name="id" class="form-control" value="<?php echo $brg->id ?>">
            </div>
            <div class="form-group">
                <label>Nama User</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $brg->nama ?>">
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $brg->username ?>">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $brg->password  ?>">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" value="<?php echo $brg->alamat ?>">
            </div>
            <div class="form-group">
                <label>Hak Akses</label>
                <input type="text" name="role_id" class="form-control" value="<?php echo $brg->role_id ?>" readonly>
            </div>

            <div class="modal-footer">
                <a href="<?php echo base_url('user') ?>"><button class="btn btn-danger mt-3">Kembali</button></a>
                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            </div>
        </form>
    <?php endforeach; ?>

</div>