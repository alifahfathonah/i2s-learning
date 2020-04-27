<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?=$tmpl?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?=$tmpl?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image")"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2 mt-4">MTs. Ibnu Husain</h1>
                    <h5 class="text-gray-900 mb-5">Hai Admin, Silahkan Login..!</h5>
                    <hr>
                  </div>
                  <?php echo form_open('','class="user"'); ?>
                    <div class="form-group">
                      <?php echo $pesan_error; ?>
                      <?php echo form_error('username'); ?>
                      <input type="text" class="form-control form-control-user" name="username" value="<?php echo set_value('username')?>" placeholder="Username...">
                    </div>
                    <div class="form-group">
                      <?php echo form_error('password'); ?>
                      <input type="password" class="form-control form-control-user" name="password" placeholder="Password...">
                    </div>
<hr>
                    <input type="submit" class="btn btn-primary btn-user btn-block" name="submit">
                    



                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Saya lupa Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Saya belum punya Akun!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?=$tmpl?>vendor/jquery/jquery.min.js"></script>
  <script src="<?=$tmpl?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?=$tmpl?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?=$tmpl?>js/sb-admin-2.min.js"></script>

</body>

</html>
