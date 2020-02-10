
<!DOCTYPE html>
<html lang="en">

<head>

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/') ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
        
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <div class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                 <div class="form-group col-lg-6">
                  <?php echo form_open('dashboard/regis'); ?>
                                <!-- <div> -->
                                    <label>ID</label>
                                    <input type="show/hidden" name="id_user" class="form-control">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Full Name</label>
                                    <input type="text" name="nama" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input type="password" name="pass" class="form-control">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Email Address</label>
                                    <input type="text" name="email" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Level</label>
                                    <select name="level"><option value=""></option>
                                        <option value="1">Seller</option>
                                        <option value="2">Customer</option></select>
                                </div>
                                  </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                     Register Account</button>
              </form>
              <div class="text-center">
                <a class="small" href="<?php echo base_url('dashboard/login') ?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/') ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/') ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/') ?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>
