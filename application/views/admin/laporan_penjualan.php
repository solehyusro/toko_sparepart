<div class="container-fluid">
	<h4>Laporan Penjualan</h4>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>No</th>
			<th>Id</th>
			<th>Nama Pemesan</th>
			<th>Alamat</th>
			<th>Tanggal Pemesanan</th>
			<th>Total Belanja</th>

		</tr>

		<?php $no = 1;
		foreach ($invoice as $inv) : ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $inv->id ?></td>
				<td><?php echo $inv->nama ?></td>
				<td><?php echo $inv->alamat ?></td>
				<td><?php echo $inv->tgl_pesan ?></td>
				<td>Rp. <?php echo number_format($inv->total_bayar, 0, ',', '.')  ?></td>

			</tr>
		<?php endforeach; ?>
		<tr>
			<td colspan="6" class="text-center">
				<div><button data-toggle="modal" data-target="#cetak" class="btn btn-primary btn-sm text-center">Cetak Laporan</button></div>
			</td>
		</tr>
	</table>
</div>
<div class="modal fade align-center" id="cetak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog align-content-center" role="document">
		<div class="modal-content">
			<div class="modal-header">

				<div class="modal-body ">
					<div class="form-group text-center">
						<h5>Apakah Anda Ingin Mencetaknya?</h5>
						<br>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
						<?php echo anchor('admin/laporan_penjualan/index/', '<button type="submit" class="btn btn-primary ml-2">Ya</button>') ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>