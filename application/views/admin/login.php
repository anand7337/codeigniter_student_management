<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Admin Login</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url()?>admin/assets/css/app.min.css">
  <link rel="stylesheet" href="<?= base_url()?>admin/assets/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url()?>admin/assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url()?>admin/assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?= base_url()?>admin/assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='<?= base_url()?>admin/assets/img/logo/cropped-LOGO-01.png' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Admin Login</h4>
              </div>
              <div class="card-body">
                <form action="<?=base_url('main/admin_validate')?>" method="POST" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="adminid">Admin User ID</label>
                    <input id="adminid" type="text" class="form-control" name="adminid" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                     please fill your admin ID
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password" class="control-label">Admin User Password</label>
                    <input id="password" type="password" class="form-control" name="adminpassword" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill your admin password
                    </div>
                    <div class="d-block">
                      <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <!-- <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="auth-register.html">Create One</a>
            </div> -->
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="<?=base_url()?>admin/assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="<?=base_url()?>admin/assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="<?=base_url()?>admin/assets/js/custom.js"></script>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>