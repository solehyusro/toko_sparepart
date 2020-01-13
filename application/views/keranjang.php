<div class="container-fluid">
	<h4>Keranjang Belanja</h4>

	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>No</th>
			<th>Nama Produk</th>
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Subtotal</th>
		</tr>
		<?php
		$no = 1;
		foreach ($this->cart->contents() as $items) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $items['name'] ?></td>
				<td><?php echo $items['qty'] ?></td>
				<td align="right">Rp. <?php echo number_format($items['price'], 0, ',', '.')  ?></td>
				<td align="right">Rp. <?php echo number_format($items['subtotal'], 0, ',', '.') ?></td>
			</tr>

		<?php endforeach; ?>
		<tr>
			<td colspan="4">Total yang harus dibayar</td>
			<td align="right">Rp. <?php echo number_format($this->cart->total(), 0, ',', '.') ?>

			</td>
		</tr>
	</table>

	<div align="right">

		<div data-toggle="modal" data-target="#hapus2" class="btn"><button class="btn btn-danger btn-sm">Hapus Keranjang</button>
		</div>
		<a href="<?php echo base_url('welcome/index') ?>">
			<div class="btn btn-sm btn-primary">Lanjut Belanja</div>
		</a>
		<a href="<?php echo base_url('dashboard/pembayaran') ?>">
			<div class="btn btn-sm btn-success ml-2">Pembayaran</div>
		</a>
	</div>
</div>
<div class="modal fade align-center" id="hapus2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog align-content-center" role="document">
		<div class="modal-content">
			<div class="modal-header">

				<div class="modal-body ">
					<div class="form-group text-center">
						<h5>Apakah Anda Yakin?</h5>
						<br>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
						<?php echo anchor('dashboard/hapus_keranjang', '<button type="submit" class="btn btn-primary ml-2">Hapus</button>') ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>