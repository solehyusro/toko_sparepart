
<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg col-lg-6 my-5 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">  
        <div class="col-lg">     
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Form Registrasi Akun</h1>
              </div>
              <form method="post" action="<?php echo base_url('registrasi/index') ?>" class="user">
                
                <div class="form-group">
                  <input type="text" name="nama" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nama Anda">
                  <?php echo form_error('nama','<div class="text-danger small ml-2">','</div>'); ?>
                </div>
                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" placeholder="Username Anda">
                  <?php echo form_error('username','<div class="text-danger small ml-2">','</div>'); ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    <?php echo form_error('password','<div class="text-danger small ml-2">','</div>'); ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" name="confirmPassword" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Ulangi Password">
                    
                  </div>
                  </div>
                  <div class="form-group">
                  <input type="text-area" name="alamat" class="form-control form-control-user" id="exampleInputEmail" placeholder="Alamat Anda">
                  <?php echo form_error('alamat','<div class="text-danger small ml-2">','</div>'); ?>
                </div>
                
                <button type="submit" class="btn btn-primary btn-user btn-block">Registrasi Akun</button>
                
                <hr>
                
              
              <div class="text-center">
                <a class="small" href="<?php echo base_url('user/login') ?>">Sudah Punya Akun? Silahkan Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
