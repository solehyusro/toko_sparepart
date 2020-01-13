<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery-1.7.1.min.js'); ?>"></script>
<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('assets/js/sb-admin-2.min.js') ?>"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js') ?>"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url('assets/js/demo/chart-area-demo.js') ?>"></script>
<script src="<?php echo base_url('assets/js/demo/chart-pie-demo.js') ?>"></script>

<div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
<br>
<div class="col-sm-6 col-sm-offset-4">
    <form method="post" enctype="multipart/form-data" action="<?php echo base_url('welcome/insert_data') ?>" class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-6">
                <input type="text" class="form-control" name="kata" />
            </div>
            <div class="col-sm-6">
                <button type="submit" class="btn btn-default ">Submit</button>
            </div>
        </div>
    </form>
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