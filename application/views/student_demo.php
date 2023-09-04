<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff-Information</title>
  <!-- Favicon -->

  <!-- <link href="<?= base_url() ?>assets/img/cropped-LOGO-01.png" rel="icon" /> -->
  <link rel='shortcut icon' type='image/x-icon' href='<?= base_url() ?>assets/img/logo/cropped-LOGO-01.png' />
  <link rel='shortcut icon' type='image/x-icon' href='<?= base_url() ?>admin/assets/img/logo/cropped-LOGO-01.png' />
  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
    rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!--Jquery stylesheet -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  <!-- Customized Bootstrap Stylesheet -->
  <link href="<?= base_url() ?>assets/css/bootstrapmin.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Template Stylesheet -->

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
  <!-- <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" /> -->
  <script src="/path/to/cdn/jquery.min.js"></script>
  <script src="/path/to/counter.min.js"></script>


  <!-- General CSS Files -->
  <!-- <link rel="stylesheet" href="<?= base_url() ?>admin/assets/css/app.min.css"> -->
  <!-- <link rel="stylesheet" href="<?= base_url() ?>admin/assets/bundles/bootstrap-social/bootstrap-social.css"> -->
  <!-- <link rel="stylesheet" href="<?= base_url() ?>admin/assets/bundles/summernote/summernote-bs4.css"> -->
  <!-- Template CSS -->
  <!-- <link rel="stylesheet" href="<?= base_url() ?>admin/assets/css/style.css"> -->
  <!-- <link rel="stylesheet" href="<?= base_url() ?>admin/assets/css/components.css"> -->
  <!-- Custom style CSS -->
  <!-- <link rel="stylesheet" href="<?= base_url() ?>admin/assets/css/custom.css"> -->
  <!-- <link rel='shortcut icon' type='image/x-icon' href='<?= base_url() ?>admin/assets/img/logo/cropped-LOGO-01.png' /> -->

<style>
  .std_inf{
    color:black !important;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .std_img{
    border: 1px solid #ccc;
  }
  /* .std_details{
    display: flex;
    align-items: center;
    justify-content: center;
  } */
.student-profile .card {
  border-radius: 10px;

}

.student-profile .card .card-header .profile_img {
  width: 150px;
  height: 150px;
  object-fit: cover;
  margin: 10px auto;
  border: 10px solid #ccc;
  border-radius: 50%;
}

.student-profile .card h3 {
  font-size: 20px;
  font-weight: 700;
  color:#f15b22 !important;
}

.student-profile .card p {
  font-size: 16px;
  color: #000;
}

.student-profile .table th
{
  font-weight: bold;
    color: #000;
    line-height: 35px;
    line-height: 2.5rem;
    font-size: 12px;
    font-family: "Adamina", Sans-serif;
    text-transform: capitalize;
}


.student-profile .table td {
  font-weight: 700;
    color: #102a43;
    line-height: 35px;
    line-height: 2.5rem;
    font-size: 12px;
    font-family: "Adamina", Sans-serif;
    text-transform: capitalize;
}

.std_inf h1{
  font-size: 30px;
  font-weight: 700;
  font-family: "Adamina", Sans-serif;
  color:#f15b22 !important;
}
.card-body p{
  font-size: 14px !important;
  font-weight: 700;
  font-family: "Adamina", Sans-serif;

}
.form_head{
  font-size: 20px;
  font-weight: 700;
  font-family: "Adamina", Sans-serif;
  color:#f15b22 !important;
}
/* label,
input,
textarea {
    display: block;
    width: 100%;
} */
ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.lists {
    padding: 0.3em;
}
option,span {
    font-weight: 700;
    color: #102a43;
    line-height: 35px;
    line-height: 2.5rem;
    font-size: 12px;
    font-family: "Adamina", Sans-serif;
    text-transform: capitalize;
}
input[type="submit"] {
    background: #fc4366;
    color: white;
    font-weight: 700;
    font-size: 1.5rem;
    border-radius: 5px;
    margin-top: 1.3em;
}

.payment {
    width: 460px;
    margin: 5em auto;
}
.pay_form {
    background-color: #ffffff;
    padding-top: 40px;
    padding-right: 40px;
    padding-bottom: 40px;
    padding-left: 40px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    border-radius: 3px;
    overflow: hidden;
}

.required-star {
    color: #fc4366;
}

input,
textarea {
    width: 100%;
    padding: 9px 20px;
    border: 1px solid #e1e2eb;
    background-color: #fff;
    color: #102a43;
    caret-color: #829ab1;
    box-sizing: border-box;
    font-size: 16px;
 
    line-height: 29px;
    line-height: 2rem;
    box-shadow: inset 0 2px 4px 0 rgba(206, 209, 224, 0.2);
    border-radius: 3px;
    line-height: 29px;
    line-height: 2rem;
}
@media screen and (max-width:720px){
  .std_info1{
    margin-left: 20px !important;
  }
 .student-profile{
  display: flex;
  align-items: center;
  justify-content: center;

 }

.form_head{
  font-size: 18px;
  font-weight: 700;
  font-family: "Adamina", Sans-serif;
  color:#f15b22 !important;
}

.payment {
    width: 380px;
    margin: 5em auto;
}


}
</style>
</head>

<body>

  <!-- Topbar Start -->

  <div class="top-navbar">
    <div class="container">
      <div class="top-social">
        <a href="https://m.facebook.com/people/Ghurudev-Educational-Academy/100083045686835/" class="social-button01">
          <span class="social-icon"><i class="tbi fab fa-facebook-f"></i></span>
          <span class="text">Facebook</span>
        </a>
        <a href="https://twitter.com/ghurudevacademy?lang=en" class="social-button02">
          <span class="social-icon"><i class="tbi fab fa-twitter"></i></span>
          <span class="text">Twitter</span>
        </a>
        <a href="https://www.instagram.com/ghurudev_educational_academy/" class="social-button03">
          <span class="social-icon"><i class="tbi fab fa-instagram"></i></span>
          <span class="text">Instagram</span>
        </a>
        <a href="https://www.youtube.com/channel/UC6Y_JhR7eULcjJPgoquD31g?app=desktop" kj class="social-button04">
          <span class="social-icon"><i class="tbi fab fa-youtube"></i></span>
          <span class="text">YouTube</span>
        </a>
      </div>
    </div>
  </div>
  <!-- Topbar End -->

  <!-- Navbar Start -->

  <nav>
    <div class="container">
      <div class="navbar-row">
        <div class="logo">
          <a href="index.html"><img src="<?= base_url() ?>assets/img/cropped-LOGO-01.png" class="main-logo" /></a>
        </div>
        <div class="mobile_btn">
          <i class="ctb fas fa-bars"></i>
        </div>
        <div class="main_menu">
          <ul class="menu-item">
            <li class="menu-list"><a href="<?= base_url() ?>" class="menu-link">Home</a></li>
            <li class="menu-list">
              <a href="<?= base_url('main/about') ?>" class="menu-link">About Us</a>
            </li>
            <li class="menu-list">
              <a href="<?= base_url('main/kids_academy') ?>" class="menu-link">Kids Academy</a>
            </li>
            <li class="menu-list">
              <a href="<?= base_url('main/school_tutions') ?>" class="menu-link">School Tuitions</a>
            </li>
            <li class="menu-list">
              <a href="<?= base_url('main/achievements') ?>" class="menu-link">Achievements</a>
            </li>
            <li class="menu-list">
              <a href="<?= base_url('main/contact') ?>" class="menu-link">Contact Us</a>
            </li>

            <?php

            if ($user = $this->session->userdata('staff_user')) {
              extract($user);
              ?>
              <li class="menu-list menu-lists">
                <a href="#" class="menu-link">My Profile</a>
                <ul class="sub_menu_item">
                  <li class="sub_menu_list">
                    <a href="<?= base_url('main/stdlogin') ?>" class="sub_menu_link">Welcome : <?= $staff_fname ?> <?= $staff_lname ?></a>
                  </li>
                  <li class="sub_menu_list">
                    <a href="<?= base_url('main/staff_information/') . $id ?>" class="sub_menu_link">View Details</a>
                  </li>
                  <li class="sub_menu_list">
                    <a href="<?= base_url('main/staff_logout') ?>" class="sub_menu_link">Logout</a>
                  </li>
                </ul>
              </li>

              <?php
            } else {
              ?>
              <li class="menu-list menu-lists">
                <a href="#" class="menu-link">Login</a>
                <ul class="sub_menu_item">
                <li class="sub_menu_list">
        <a href="<?= base_url('main/kids_login') ?>" class="sub_menu_link">Kid's Login</a>
      </li>
                  <li class="sub_menu_list">
                    <a href="<?= base_url('main/stdlogin') ?>" class="sub_menu_link">Student's Login</a>
                  </li>
                  <li class="sub_menu_list">
                    <a href="<?= base_url('main/stafflogin') ?>" class="sub_menu_link">Staff's Login</a>
                  </li>
                </ul>
              </li>
              <?php
            }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- Navbar End -->




<!-- Student Profile -->
<?php
if (isset($staff_data)) {
    // foreach($data as $row){
    ?>
<div class="student-profile py-4" style="padding-top:50px;">
  <div class="container">
  <div class="std_inf" style="padding-bottom:50px;">
        <h1>Staff Information</h1>
      </div>
    <div class="row std_details">
     <div class="col-lg-12  col-md-12 col-sm-12 std_info1">
      <div class=" std_img" >
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" src="<?= base_url('upload/' . $staff_data[0]->staff_pic) ?>" width="100" height="100"
                      class="rounded-circle author-box-picture">
            <h3> <?= $staff_data[0]->staff_fname ?>  <?= $staff_data[0]->staff_lname ?></h3>
             <div class="card-body">

            <p class="mb-0"><strong class="pr-1">Staff Id :</strong>    <?= $staff_data[0]->staff_id ?></p>
            <!-- <p class="mb-0"><strong class="pr-1">Standard :</strong>   <?= $data7[0]->std_standard ?></p> -->
          </div> 
          </div>
        
        </div>
      </div>
      <div class="">
        <div class="card shadow-sm">
          <!-- <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Student Information</h3>
          </div> -->
          <div class="card-body pt-0">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Staff Id	</th>
                <td width="2%">:</td>
                <td>  <?= $staff_data[0]->staff_id ?></td>
              </tr>
            <tr>
                <th width="30%">Name	</th>
                <td width="2%">:</td>
                <td><?= $staff_data[0]->staff_fname ?>  <?= $staff_data[0]->staff_lname ?></td>
              </tr>
              <tr>
                <th width="30%">Date Of Birth</th>
                <td width="2%">:</td>
                <td><?= $staff_data[0]->staff_dob ?></td>
              </tr>
              <tr>
                <th width="30%">Age	</th>
                <td width="2%">:</td>
                <td><?= $staff_data[0]->staff_age ?></td>
              </tr>
             
              <tr>
                <th width="30%">Gender</th>
                <td width="2%">:</td>
                <td><?= $staff_data[0]->staff_gender ?></td>
              </tr>
              <tr>
                <th width="30%">Subject</th>
                <td width="2%">:</td>
                <td><?= $staff_data[0]->staff_subject ?></td>
              </tr>
              <tr>
                <th width="30%">Date of Join</th>
                <td width="2%">:</td>
                <td><?= $staff_data[0]->staff_doj ?></td>
              </tr>
              <tr>
                <th width="30%">Mobile Number</th>
                <td width="2%">:</td>
                <td><?= $staff_data[0]->staff_number ?></td>
              </tr>
              <tr>
                <th width="30%">Mail</th>
                <td width="2%">:</td>
                <td><?= $staff_data[0]->staff_email ?></td>
              </tr>
              <tr>
                <th width="30%">Address</th>
                <td width="2%">:</td>
                <td><?= $staff_data[0]->staff_address ?></td>
              </tr>
            </table>
            </div>
          </div>
        </div>
      </div>



    </div>
  </div>
</div>


<?php
  }
  // }
  ?>






<!-- <form action="<?= base_url('main/pay')  ?>" method="post">
  <input type="number" placeholder="enroll number..." name="enroll"><br><br>
  <input type="text" placeholder="name..." name="name"><br><br>
  <input type="text" placeholder="enter amount" name="amount"><br><br>
  <input type="email" placeholder="email..." name="email"><br><br>
  <input type="number" placeholder="contact..." name="number"><br><br>
  <select class="form-control" name="std_standard">
                        <option value="none" selected disabled hidden>Standard</option>
                        <option value="6th standard">6th Standard</option>
                        <option value="7th standard">7th Standard</option>
                        <option value="8th standard">8th Standard</option>
                        <option value="9th standard">9thth Standard</option>
                        <option value="10th standard">10th Standard</option>
                        <option value="11th standard">11th Standard</option>
                        <option value="12th standard">12th Standard</option>
                      </select><br><br>
 <button name="submit" type="submit">Pay</button>
</form>

 -->






  <!------Footer section  --------->
  <section class="footer-section">
    <div class="container">
      <div class="footer">
        <div class="row fr-6">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="footer-add">
              <h2 class="footer-title">
                Contact Us
              </h2>
              <p class="footer-desc1">Address: No.1A, 1st Floor, Gurudev Complex,57th Street, V.R Nagar,
                Korattur,Chennai – 600 080.</p>
              <p class="footer-desc2">Mobile Number : +91 8220725879 / 8825948859</p>
              <p class="footer-desc3">E-mail: eduacademy.in@gmail.com</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 side-cf">
            <div class="footer-subs">
              <h2 class="footer-title">
                Subscribe Us
              </h2>
              <div class="Foot-form">
                <form>
                  <input type="text" class="mail" id="mail" name="mail" placeholder="Your Mail Here.."> <button
                    class="search-btn"><i class="fa fa-envelope"></i></button>
                </form>
                <div class="social-media">
                  <div class="footer-media">
                    <a href="https://m.facebook.com/people/Ghurudev-Educational-Academy/100083045686835/"
                      class="footer-socialLink">
                      <div class="icon-wrapSocial01">
                        <i class="fab fa-facebook"></i>
                      </div>
                    </a>
                    <a href="https://twitter.com/ghurudevacademy?lang=en" class="footer-socialLink">
                      <div class="icon-wrapSocial02">
                        <i class="fab fa-twitter"></i>
                      </div>
                    </a>
                    <a href="https://www.youtube.com/channel/UC6Y_JhR7eULcjJPgoquD31g?app=desktop"
                      class="footer-socialLink">
                      <div class="icon-wrapSocial03">
                        <i class="fab fa-youtube"></i>
                      </div>
                    </a>
                    <a href="https://www.linkedin.com/company/ghurudev-educational-academy/?trk=public_post_share-update_actor-text"
                      class="footer-socialLink">
                      <div class="icon-wrapSocial04">
                        <i class="fab fa-linkedin-in"></i>
                      </div>
                    </a>
                    <a href="https://www.instagram.com/ghurudev_educational_academy/" class="footer-socialLink">
                      <div class="icon-wrapSocial05">
                        <i class="fab fa-instagram"></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bottom-nav">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="service-breadcrumbs">
                  <a href="index.html" class="bread-link">HOME</a>
                  &nbsp;|&nbsp;
                  <a href="about.html" class="bread-link">ABOUT US</a>
                  &nbsp;|&nbsp;
                  <a href="kids_academy.html" class="bread-link">KIDS ACADEMY</a>
                  &nbsp;|&nbsp;
                  <a href="School_tutions.html" class="bread-link">SCHOOL TUITIONS</a>
                  &nbsp;|&nbsp;
                  <a href="Achievements.html" class="bread-link">ACHIEVEMENTS</a>
                  &nbsp;|&nbsp;
                  <a href="Contact.html" class="bread-link">CONTACT US</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <section class="bottom-footer">
    <div class="bot-foot">
      <p class="bot-desc">Copyright ©2022 <span>Ghurudev Educational Academy</span>.
        Designed And Developed By <a href="https://www.myyakobu.com/">Yakobu Business Solutions</a></p>

    </div>
  </section>

  <script src="<?= base_url() ?>assets/js/main.js"></script>
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

</html>