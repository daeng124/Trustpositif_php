<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="app/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="app/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="app/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

  <link rel="stylesheet" href="app/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="app/index2.html" class="h1"><b>Admin</b>LTE</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="conf/authentikasi.php" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Useremail" name="useremail">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <!-- <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div> -->
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
      </div>
      </form>

      <!-- <div class="social-auth-links text-center mt-2 mb-3">
          <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
          </a>
          <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
          </a>
        </div> -->
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div> -->
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="app/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="app/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="app/dist/js/adminlte.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="app/plugins/sweetalert2/sweetalert2.min.js"></script>
</body>
<?php
// untuk menampilkan pesan error apabila login tidak berhasil
if (isset($_GET['error'])) {
  $x = $_GET['error'];
  if ($x == 1) {
    echo " <script>
      var Toast = Swal.mixin({
        toast: true,
        position: 'center-top',
        showConfirmButton: false,
        timer: 3000
      });
  Toast.fire({
      icon: 'error',
      title: 'login gagal'
    })
    </script>";
  } else if ($x == 2) {
    echo " <script>
      var Toast = Swal.mixin({
        toast: true,
        position: 'center-top',
        showConfirmButton: false,
        timer: 3000
      });
  Toast.fire({
      icon: 'warning',
      title: 'masukkan username dan password'
    })
    </script>";
  }
}
?>

</html>