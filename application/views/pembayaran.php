<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<form method="post" action="<?php echo base_url('dashboard/proses_pesanan') ?> ">
				<div class="alert alert-success text-center">
					<h2>Total Belanja Anda Rp. <?php $grand_total = 0;
												$keranjang = $this->cart->contents();
												foreach ($keranjang as $item) {
													$grand_total = $grand_total + $item['subtotal'];
												}
												echo number_format($grand_total, 0, ',', '.');
												?></h2>
					<input hidden type="text" readonly name="total_bayar" class="form-control text-center" value="<?php
																													$grand_total = 0;
																													if ($keranjang = $this->cart->contents()) {
																														foreach ($keranjang as $item) {
																															$grand_total = $grand_total + $item['subtotal'];
																														}
																														echo $grand_total;
																													?>">
				</div>

				<h3>Input Halaman Pemilihan dan Pembayaran</h3>
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap Anda">
				</div>
				<div class="form-group">
					<label>Alamat Lengkap</label>
					<input type="text" name="alamat" class="form-control" placeholder="Alamat Lengkap Anda">
				</div>
				<div class="form-group">
					<label>No Telpon</label>
					<input type="text" name="no_telp" class="form-control" placeholder="No Telpon Anda">
				</div>

				<div class="form-group">
					<label>Jasa Pengiriman</label>
					<select class="form-control">
						<option>JNE</option>
						<option>TIKI</option>
						<option>POS Indonesia</option>
						<option>GOJEK</option>
						<option>GRAB</option>
					</select>
				</div>
				<div class="form-group">
					<label>Pilih Bank</label>
					<select class="form-control">
						<option>BCA</option>
						<option>BNI</option>
						<option>BRI</option>
						<option>Mandiri</option>
						<option>Cimb Niaga</option>
					</select>
				</div>
				<button class="btn btn-sm btn-primary" type="submit">Pesan</button>

			</form>
		<?php
																													} else {
																														echo "                                                 Maaf Keranjang Belanja Anda Masih Kosong                                                                                                                       ";
																													}  ?>
		</div>

		<div class="col-md-2"> </div>
	</div>
</div>