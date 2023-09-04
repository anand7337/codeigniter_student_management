<!DOCTYPE html>
<html lang="en">


<!-- profile.html  21 Nov 2019 03:49:30 GMT -->

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>staff profile</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url() ?>admin/assets/css/app.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>admin/assets/bundles/bootstrap-social/bootstrap-social.css">
  <link rel="stylesheet" href="<?= base_url() ?>admin/assets/bundles/summernote/summernote-bs4.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>admin/assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>admin/assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>admin/assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='<?= base_url() ?>admin/assets/img/logo/cropped-LOGO-01.png' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
                  collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image"
                src="<?= base_url() ?>admin/assets/img/profile-user/user-profile.jpg" class="user-img-radious-style">
              <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <?php
              $user = $this->session->userdata('user');
              extract($user);

              ?>
              <div class="dropdown-title">Welcome
                <?= $name ?>
              </div>
              <a href="<?= base_url('main/admin_profile') ?>" class="dropdown-item has-icon"> <i class="far
                    fa-user"></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?= base_url('main/admin_logout') ?>" class="dropdown-item has-icon text-danger"> <i
                  class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?= base_url('main/admin') ?>"> <img alt="image"
                src="<?= base_url() ?>admin/assets/img/logo/cropped-LOGO-01.png" class="header-logo" /> <span
                class="logo-name"></span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <!-- <li class="menu-header">Main</li> -->
            <li class="dropdown active">
              <a href="<?= base_url('main/admin') ?>" class="nav-link"><i
                  data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Upload</li>
            <li class="dropdown"><a class="nav-link" href="<?= base_url('main/Kids_details_upload') ?>"><i
                  data-feather="edit"></i><span>Kids Details Upload</span></a></li>
            <li class="dropdown">
              <a href="<?= base_url('main/Student_details_upload/') ?>" class="nav-link"><i
                  data-feather="edit"></i><span>Student Details Upload</span></a>
            </li>
            <li class="dropdown">
              <a href="<?= base_url('main/Staff_details_upload/') ?>" class="nav-link"><i
                  data-feather="edit"></i><span>Staff's Details Upload</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link"><i data-feather="edit"></i><span>Course Details Upload</span></a>
            </li>
            <li class="menu-header">View Details</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="eye"></i><span>Student
                  Details</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?= base_url('main/kids_details_view') ?>">Kids 0-5th</a></li>
                <li><a class="nav-link" href="<?= base_url('main/Six_std') ?>">6th to 8th</a></li>
                <li><a class="nav-link" href="<?= base_url('main/Nine_std') ?>">9th</a></li>
                <li><a class="nav-link" href="<?= base_url('main/Ten_std') ?>">10th</a></li>
                <li><a class="nav-link" href="<?= base_url('main/Eleven_std') ?>">11th</a></li>
                <li><a class="nav-link" href="<?= base_url('main/Twelve_std') ?>">12th</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="<?= base_url('main/view_staff_details') ?>" class="nav-link"><i
                  data-feather="database"></i><span>Staff's Details</span></a>
            </li>
            <li><a class="nav-link" href="<?= base_url('main/edit') ?>"><i data-feather="eye"></i><span>Edit
                  Page</span></a></li>
            <li class="menu-header">Setting</li>
            <li class="dropdown">
              <a href="#" class="nav-link"><i data-feather="settings"></i><span>Setting</span></a>
            </li>

            <li class="dropdown">
              <a href="<?= base_url('main/admin_logout') ?>" class="nav-link"><i
                  data-feather="log-out"></i><span>Logout</span></a>
            </li>
          </ul>
        </aside>
      </div>
      <!-- Main Content -->
      <?php
      if (isset($data9)) {
        // foreach($data as $row){
        ?>
        <div class="main-content" style="margin-top:-40px;">
          <section class="section">
            <div class="section-body">
              <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-12">
                  <div class="card author-box">
                    <div class="card-body">
                      <div class="author-box-center">
                        <img alt="image" src="<?= base_url('upload/staff_upload/' . $data9[0]->staff_pic) ?>" width="100"
                          height="100" class="rounded-circle author-box-picture">
                        <div class="clearfix"></div>
                        <div class="author-box-name mt-3 mb-3">
                          <a href="#">
                            <?= $data9[0]->staff_fname ?>
                            <?= $data9[0]->staff_lname ?>
                          </a>
                        </div>
                        <div class="author-box-job">Staff ID:
                          <?= $data9[0]->staff_id ?>
                        </div>
                      </div>
                      <div class="text-center">
                        <div class="author-box-description">
                          <p>
                            <?= $data9[0]->staff_address ?>
                          </p>
                        </div>
                        <div class="w-100 d-sm-none"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-12 col-lg-12">
                  <div class="card">
                    <div class="padding-20">
                      <ul class="nav nav-tabs" id="myTab2" role="tablist">
                        <!-- <li class="nav-item">
                          <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab"
                            aria-selected="true">About</a>
                        </li> -->
                        <!-- <li class="nav-item">
                          <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings" role="tab"
                            aria-selected="false">Setting</a>
                        </li> -->
                      </ul>
                      <div class="tab-content tab-bordered" id="myTab3Content">
                        <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                          <div class="card-header">
                            <h4>Personal Details</h4>
                          </div>
                          <div class="card-body">
                            <div class="py-4">
                              <p class="clearfix">
                                <span class="float-left">
                                  Date Of Birth
                                </span>
                                <span class="float-right text-muted">
                                  <?= $data9[0]->staff_dob ?>
                                </span>
                              </p>
                              <p class="clearfix">
                                <span class="float-left">
                                  Gender
                                </span>
                                <span class="float-right text-muted">
                                  <?= $data9[0]->staff_gender ?>
                                </span>
                              </p>
                              <p class="clearfix">
                                <span class="float-left">
                                  Age
                                </span>
                                <span class="float-right text-muted">
                                  <?= $data9[0]->staff_age ?>
                                </span>
                              </p>
                              <p class="clearfix">
                                <span class="float-left">
                                  Staff Subject
                                </span>
                                <span class="float-right text-muted">
                                  <?= $data9[0]->staff_subject ?>
                                </span>
                              </p>

                              <p class="clearfix">
                                <span class="float-left">
                                  Date of Join
                                </span>
                                <span class="float-right text-muted">
                                  <?= $data9[0]->staff_doj ?>
                                </span>
                              </p>
                              <p class="clearfix">
                                <span class="float-left">
                                  Mobile Number :
                                </span>
                                <span class="float-right text-muted">
                                  <?= $data9[0]->staff_number ?>
                                </span>
                              </p>
                              <p class="clearfix">
                                <span class="float-left">
                                  Mail
                                </span>
                                <span class="float-right text-muted">
                                  <?= $data9[0]->staff_email ?>
                                </span>
                              </p>
                              <p class="clearfix">
                                <span class="float-left">
                                  Address
                                </span>
                                <span class="float-right text-muted">
                                  <?= $data9[0]->staff_address ?>
                                </span>
                              </p>
                              
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <?php
      }
      // }
      ?>
      <footer class="main-footer">
        <div class="footer-left">
          <a href="templateshub.net">Ghurudev.in</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="<?= base_url() ?>admin/assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="<?= base_url() ?>admin/assets/bundles/summernote/summernote-bs4.js"></script>
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="<?= base_url() ?>admin/assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="<?= base_url() ?>admin/assets/js/custom.js"></script>
</body>


<!-- profile.html  21 Nov 2019 03:49:32 GMT -->

</html>