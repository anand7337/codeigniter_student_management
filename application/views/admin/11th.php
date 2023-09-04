<!DOCTYPE html>
<html lang="en">


<!-- datatables.html  21 Nov 2019 03:55:21 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Student's Details</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?=base_url()?>admin/assets/css/app.min.css">
  <link rel="stylesheet" href="<?=base_url()?>admin/assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="<?=base_url()?>admin/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?=base_url()?>admin/assets/css/style.css">
  <link rel="stylesheet" href="<?=base_url()?>admin/assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?=base_url()?>admin/assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='<?=base_url()?>admin/assets/img/logo/cropped-LOGO-01.png' />
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
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>11th Standard</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th>EnRoll Number</th>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>DOB</th>
                            <th>Student's Parent</th>
                            <th>Date of Join</th>
                            <th>Mobile</th>
                            <th>Details</th> 
                            <th>Edit</th>
                            <th>Delete</th>                        
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                             if(isset($data5)){
                              foreach($data5 as $row){
                                  ?>
                          <tr>
                            <td><?= $row->std_enroll  ?></td>        
                            <td><img src="<?= base_url('upload/' .$row->std_pic) ?>" alt="" width="100"></td>               
                            <td><?= $row->std_name  ?></td>
                            <td><?= $row->std_dob  ?></td>
                            <td><?= $row->std_parent  ?></td>
                            <td><?= $row->std_doj ?></td>
                            <td><?= $row->std_mobile  ?></td>
                            <td><a href="<?= base_url('main/student_data/') .$row->id?>" class="btn btn-primary">View Detail</a></td>
                            <td><a href="<?= base_url('main/student_edit/') .$row->id?>" class="btn btn-primary">Edit</a></td>
                            <td><a href="<?= base_url('main/student_delete/') .$row->id?>" class="btn btn-primary">Delete</a></td>
                          </tr>
                          <?php
                              }
                            }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <a href="#">ghurudev.in</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="<?=base_url()?>admin/assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="<?=base_url()?>admin/assets/bundles/datatables/datatables.min.js"></script>
  <script src="<?=base_url()?>admin/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?=base_url()?>admin/assets/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="<?=base_url()?>admin/assets/js/page/datatables.js"></script>
  <!-- Template JS File -->
  <script src="<?=base_url()?>admin/assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="<?=base_url()?>admin/assets/js/custom.js"></script>
</body>


<!-- datatables.html  21 Nov 2019 03:55:25 GMT -->
</html>