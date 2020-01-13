<div class="container-fluid">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo base_url('assets/img/slider1.jpg') ?>" height="300px" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('assets/img/slider3.png') ?>" height="300px" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('assets/img/slider3.jpg') ?>" height="300px" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div id="notifications"><?php echo $this->session->flashdata('sukses'); ?></div>
  <div class="row text-center mt-3">

    <?php foreach ($barang as $brg) : ?>

      <div class="card badge-white" style="width: 15rem;">
        <img src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>" width="150px" height="100px" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title mb-1"><?php echo $brg->nm_brg ?></h3>
          <small class="card-title mb-1"><?php echo $brg->merk ?></small><br>
          <a href="#" class="badge badge-primary mb-2">Rp. <?php echo number_format($brg->harga, 0, ',', '.') ?></a>
          <?php echo anchor('dashboard/tambah_ke_keranjang/' . $brg->kd_brg, '<div class="btn btn-sm btn-primary">Tambah Ke Keranjang</div>') ?>
          <?php echo anchor('dashboard/detail/' . $brg->kd_brg, '<div class="btn btn-sm btn-success">Detail</div>') ?>
        </div>
      </div>

    <?php endforeach; ?>
  </div>

</div>
<script>
  $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
</script>
<style>
  #notifications {
    cursor: pointer;
    position: fixed;
    right: 0px;
    z-index: 9999;
    bottom: 0px;
    margin-bottom: 22px;
    margin-right: 15px;
    min-width: 300px;
    max-width: 800px;
  }
</style>