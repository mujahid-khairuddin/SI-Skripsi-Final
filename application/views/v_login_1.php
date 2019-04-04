<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login - SI Pengajuan Skripsi</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-secondary">
<nav class="navbar navbar-expand navbar-dark bg-info static-top">

    <a class="navbar-brand mr-1" href="<?php echo site_url('home') ?>"><?php echo SITE_NAME ?></a>
</nav>
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-x1-10 col-lg-6 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-12">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login"></div>
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat datang di SI Pengajuan Skripsi</h1>
                    <h1 class="h6 text-gray-900 mb-4">Silahkan login untuk melanjutkan</h1>
                  </div>
                  <?php echo $this->session->flashdata('msg');?>
                  <form class="user"action="<?php echo base_url().'index.php/login/auth'?>" method="post">
                    <div class="form-group">
                      <input type="username" class="form-control form-control-user" id="username" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name=password placeholder="Password">
                    </div>
                    <div class="form-group">
                      
                    </div>
                    <button class="btn btn-primary btn-user btn-block" type="submit">Login</button>
                  </form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
