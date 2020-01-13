<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>Edit Data Barang</h3>

	<?php foreach ($barang as $brg) : ?>

		<form method="post" action="<?php echo base_url() . 'admin/data_barang/update' ?>">
			<div class="form-group">
				<label>Kode Barang</label>
				<input type="text" readonly="readonly" name="kd_brg" class="form-control" value="<?php echo $brg->kd_brg ?>">
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
				<input type="text" name="merk" class="form-control" value="<?php echo $brg->merk  ?>">
			</div>
			<div class="form-group">
				<label>Harga</label>
				<input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
			</div>

			<div class="modal-footer">
				<a href="<?php echo base_url('admin/data_barang/') ?>"><button class="btn btn-danger mt-3">Kembali</button></a>			
				<button type="submit" class="btn btn-primary mt-3">Simpan</button>
			</div>
		</form>
	<?php endforeach; ?>

</div>