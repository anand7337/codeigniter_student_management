
<!DOCTYPE html>
<html lang="en">
<!-- basic-form.html  21 Nov 2019 03:54:41 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Staff's Details Edit Form</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url() ?>admin/assets/css/app.min.css">
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
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="<?= base_url() ?>admin/assets/img/profile-user/user-profile.jpg"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <?php 
               $user=$this->session->userdata('user');
                   extract($user);
             
              ?>
              <div class="dropdown-title">Welcome <?= $name ?></div>
              <a href="<?= base_url('main/admin_profile')  ?>" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?= base_url('main/admin_logout')?>" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?=base_url('main/admin')?>"> <img alt="image" src="<?= base_url() ?>admin/assets/img/logo/cropped-LOGO-01.png" class="header-logo" /> <span
                class="logo-name"></span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <!-- <li class="menu-header">Main</li> -->
            <li class="dropdown active">
              <a href="<?=base_url('main/admin')?>" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Upload</li>
            <li class="dropdown"><a class="nav-link" href="<?= base_url('main/Kids_details_upload')  ?>"><i
                  data-feather="edit"></i><span>Kids Details Upload</span></a></li>
            <li class="dropdown">
              <a href="<?=  base_url('main/Student_details_upload/') ?>" class="nav-link"><i
                  data-feather="edit"></i><span>Student Details Upload</span></a>
            </li>
            <li class="dropdown">
              <a href="<?= base_url('main/Staff_details_upload/') ?>" class="nav-link"><i data-feather="edit"></i><span>Staff's Details Upload</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link"><i data-feather="edit"></i><span>Course Details Upload</span></a>
            </li>
            <li class="menu-header">View Details</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="eye"></i><span>Student Details</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?= base_url('main/kids_details_view')  ?>">Kids 0-5th</a></li>
                <li><a class="nav-link" href="<?= base_url('main/Six_std')  ?>">6th to 8th</a></li>
                <li><a class="nav-link" href="<?= base_url('main/Nine_std')  ?>">9th</a></li>
                <li><a class="nav-link" href="<?= base_url('main/Ten_std')  ?>">10th</a></li>
                <li><a class="nav-link" href="<?= base_url('main/Eleven_std')  ?>">11th</a></li>
                <li><a class="nav-link" href="<?= base_url('main/Twelve_std')  ?>">12th</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="<?= base_url('main/view_staff_details')  ?>" class="nav-link"><i
                  data-feather="database"></i><span>Staff's Details</span></a>
            </li>
            <li><a class="nav-link" href="<?= base_url('main/edit')  ?>"><i data-feather="eye"></i><span>Edit Page</span></a></li>
            <li class="menu-header">Setting</li>
            <li class="dropdown">
              <a href="#" class="nav-link"><i
                  data-feather="settings"></i><span>Setting</span></a>
            </li>

            <li class="dropdown">
              <a href="<?= base_url('main/admin_logout')  ?>" class="nav-link"><i
                  data-feather="log-out"></i><span>Logout</span></a>
            </li>
          </ul>
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <!-- <div class="col-lg-12 col-md-12 col-sm-12"> -->
              <div class="card">
                <?php
                   if(isset($data)){
                ?>
                <form action="<?= base_url('main/staff_update')?>" method="post" enctype="multipart/form-data">
                  <div class="card-header">
                    <h4>Staff's Details Upload Form</h4>
                  </div>
                  <div class="card-body">
                  <div class="col-lg-6 col-md-6 col-sm-12 form-group">                    
                      <input type="text" hidden name="edid" class="form-control" value="<?=  $data[0]->id  ?>">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <label>Staff ID :</label>
                      <input type="staffid" name="staff_id" class="form-control"  value="<?=  $data[0]->staff_id  ?>">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <label>First Name :</label>
                      <input type="fname" name="staff_fname" class="form-control"  value="<?=  $data[0]->staff_fname  ?>">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <label>Last Name :</label>
                      <input type="lname" name="staff_lname" class="form-control"  value="<?=  $data[0]->staff_lname  ?>">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <label>Date Of Birth :</label>
                      <input type="date" name="staff_dob" class="form-control"  value="<?=  $data[0]->staff_dob  ?>">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <label>Age :</label>
                      <input type="age" name="staff_age" class="form-control"  value="<?=  $data[0]->staff_age  ?>">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <label>Gender :</label>
                      <select class="form-control" name="staff_gender">
                        <option> <?=  $data[0]->staff_gender  ?></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <label>Select Subject :</label>
                      <select class="form-control" name="staff_subject">
                        <option> <?=  $data[0]->staff_subject ?></option>
                        <option value="Tamil">Tamil</option>
                        <option value="English">English</option> 
                        <option value="Maths">Mathematics</option>
                        <option value="Science">Science</option>
                        <option value="Social Science">Social Science</option>
                        <option value="Science">Accountancy</option>
                        <option value="Biology">Biology</option>
                        <option value="Chemistry">Chemistry</option>
                        <option value="Physics">Physics</option>
                        <option value="All Subjects">All Subjects</option>
                      </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <label>Date Of Join :</label>
                      <input type="date" name="staff_doj" class="form-control"  value="<?=  $data[0]->staff_doj  ?>">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <label>Mobile Number :</label>
                      <input type="mobile" name="staff_number" class="form-control"  value="<?=  $data[0]->staff_number  ?>">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <label>Staff's Email :</label>
                      <input type="email" name="staff_email" class="form-control"  value="<?=  $data[0]->staff_email  ?>">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <label>Staff's Address :</label>
                      <input type="address" name="staff_address" class="form-control"  value="<?=  $data[0]->staff_address  ?>">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <img src="<?= base_url('upload/staff_upload/') .$data[0]->staff_pic ?>" alt="" width="100" height="100">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <label>Staff's Profile Photo :</label>
                      <input type="file" name="staff_pic" class="form-control"  value="<?=  $data[0]->staff_pic  ?>">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                      <button type="submit" class="btn btn-primary mr-1"  name="submit">Submit</button>
                    </div>
                  </div>
                </form>
                <?php
                   }
                ?>
              </div>
              <!-- </div> -->
            </div>
          </div>
        </section>

        <footer class="main-footer">
          <div class="footer-left">
            <a href="#">NOTE: This Website Only Support Better View On 1200px.</a></a>
          </div>
          <div class="footer-right">
          </div>
        </footer>
      </div>
    </div>
    <!-- General JS Scripts -->
    <script src="<?= base_url() ?>admin/assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="<?= base_url() ?>admin/assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="<?= base_url() ?>admin/assets/js/custom.js"></script>
</body>


<!-- basic-form.html  21 Nov 2019 03:54:41 GMT -->

</html>