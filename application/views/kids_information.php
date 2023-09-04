<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kids-Information</title>
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

option,span {
    font-weight: 700;
    color: #102a43;
    line-height: 35px;
    line-height: 2.5rem;
    font-size: 12px;
    font-family: "Adamina", Sans-serif;
    text-transform: capitalize;
}

.pay{
  display: flex;
  align-items: center;
  justify-content: center;
}


.bio-row1 a {
  /* color: #fff;
  /* font-size: 2em; */
  /* text-decoration: none; */
  display: inline-block;
  position: relative;
  /* font-family: 'Dosis', sans-serif;  */
}

/*effect-underline*/
.bio-row1 a.effect-underline:after {
	content: '';
  position: absolute;
  left: 0;
  display: inline-block;
  height: 1em;
  width: 100%;
  border-bottom: 1px solid;
  margin-top: 10px;
  opacity: 0;
	-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
	transition: opacity 0.35s, transform 0.35s;
	-webkit-transform: scale(0,1);
	transform: scale(0,1);
}

.bio-row1 a.effect-underline:hover:after {
  opacity: 1;
	-webkit-transform: scale(1);
	transform: scale(1);
}

.bio-row1 .click{
  color:red;
}
</style>
<style>
  body {
    /* color: #000;
    background: #f1f2f7; */
    font-family: 'Open Sans', sans-serif;
    padding: 0px !important;
    margin: 0px !important;
    font-size: 13px;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
}
.panel{
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
.profile-nav, .profile-info{
    margin-top:30px;   
}

.profile-nav .user-heading {
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    color: #000;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    padding: 30px;
    text-align: center;
}

.profile-nav .user-heading.round a  {
    border-radius: 50%;
    -webkit-border-radius: 50%;
    border: 10px solid rgba(255,255,255,0.3);
    display: inline-block;
}

.profile-nav .user-heading a img {
    width: 112px;
    height: 112px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
}

.profile-nav .user-heading h1 {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 5px;
    color:#f15b22 !important;
}

.profile-nav .user-heading p {
    font-size: 12px;
}

.profile-nav ul {
    margin-top: 1px;
}

.profile-nav ul > li {
    border-bottom: 1px solid #ebeae6;
    margin-top: 0;
    line-height: 30px;
}

.profile-nav ul > li:last-child {
    border-bottom: none;
}

.profile-nav ul > li > a {
    border-radius: 0;
    -webkit-border-radius: 0;
    color: #89817f;
    border-left: 5px solid #fff;
}

.profile-nav ul > li > a:hover, .profile-nav ul > li > a:focus, .profile-nav ul li.active  a {
    background: #f8f7f5 !important;
    border-left: 5px solid #fbc02d;
    color: #89817f !important;
}

.profile-nav ul > li:last-child > a:last-child {
    border-radius: 0 0 4px 4px;
    -webkit-border-radius: 0 0 4px 4px;
}

.profile-nav ul > li > a > i{
    font-size: 16px;
    padding-right: 10px;
    color: #bcb3aa;
}

.r-activity {
    margin: 6px 0 0;
    font-size: 12px;
}


.p-text-area, .p-text-area:focus {
    border: none;
    font-weight: 300;
    box-shadow: none;
    color: #c3c3c3;
    font-size: 16px;
}

.profile-info .panel-footer {
    background-color:#f8f7f5 ;
    border-top: 1px solid #e7ebee;
}

.profile-info .panel-footer ul li a {
    color: #7a7a7a;
}

.bio-graph-heading {
    background: #fbc02d;
    color: #fff;
    text-align: center;
    font-style: italic;
    padding: 40px 110px;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    font-size: 16px;
    font-weight: 300;
}

.bio-graph-info {
    color: #89817e;
    font-size: 15px;
}

.bio-graph-info h1 {
    font-size: 22px;
    font-weight: 600;
    margin: 0 0 20px;
    color:#f15b22 !important;
}

.bio-row {
    width: 50%;
    float: left;
    margin-bottom: 10px;
    padding:0 15px;
}
.bio-row p span{
  font-size: 13px;
}
.bio-row1 p span{
  font-size: 13px;
}
.bio-row1 {
    width: 100%;
    float: left;
    margin-bottom: 10px;
    padding:0 15px;
}
.bio-row1 a {
  text-decoration: none;
   color: red;
}


.bio-row p span {
    width: 110px;
    display: inline-block;
}

.bio-row1 p span {
    width: 110px;
    display: inline-block;
}

.bio-chart, .bio-desk {
    float: left;
}

.bio-chart {
    width: 40%;
}

.bio-desk {
    width: 60%;
}

.bio-desk h4 {
    font-size: 15px;
    font-weight:400;
}

.bio-desk h4.terques {
    color: #4CC5CD;
}

.bio-desk h4.red {
    color: #e26b7f;
}

.bio-desk h4.green {
    color: #97be4b;
}

.bio-desk h4.purple {
    color: #caa3da;
}

.file-pos {
    margin: 6px 0 10px 0;
}

.profile-activity h5 {
    font-weight: 300;
    margin-top: 0;
    color: #c3c3c3;
}

.summary-head {
    background: #ee7272;
    color: #fff;
    text-align: center;
    border-bottom: 1px solid #ee7272;
}

.summary-head h4 {
    font-weight: 300;
    text-transform: uppercase;
    margin-bottom: 5px;
}

.summary-head p {
    color: rgba(255,255,255,0.6);
}

ul.summary-list {
    display: inline-block;
    padding-left:0 ;
    width: 100%;
    margin-bottom: 0;
}

ul.summary-list > li {
    display: inline-block;
    width: 19.5%;
    text-align: center;
}

ul.summary-list > li > a > i {
    display:block;
    font-size: 18px;
    padding-bottom: 5px;
}

ul.summary-list > li > a {
    padding: 10px 0;
    display: inline-block;
    color: #818181;
}

ul.summary-list > li  {
    border-right: 1px solid #eaeaea;
}

ul.summary-list > li:last-child  {
    border-right: none;
}

.activity {
    width: 100%;
    float: left;
    margin-bottom: 10px;
}

.activity.alt {
    width: 100%;
    float: right;
    margin-bottom: 10px;
}

.activity span {
    float: left;
}

.activity.alt span {
    float: right;
}
.activity span, .activity.alt span {
    width: 45px;
    height: 45px;
    line-height: 45px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    background: #eee;
    text-align: center;
    color: #fff;
    font-size: 16px;
}

.activity.terques span {
    background: #8dd7d6;
}

.activity.terques h4 {
    color: #8dd7d6;
}
.activity.purple span {
    background: #b984dc;
}

.activity.purple h4 {
    color: #b984dc;
}
.activity.blue span {
    background: #90b4e6;
}

.activity.blue h4 {
    color: #90b4e6;
}
.activity.green span {
    background: #aec785;
}

.activity.green h4 {
    color: #aec785;
}

.activity h4 {
    margin-top:0 ;
    font-size: 16px;
}

.activity p {
    margin-bottom: 0;
    font-size: 13px;
}

.activity .activity-desk i, .activity.alt .activity-desk i {
    float: left;
    font-size: 18px;
    margin-right: 10px;
    color: #bebebe;
}

.activity .activity-desk {
    margin-left: 70px;
    position: relative;
}

.activity.alt .activity-desk {
    margin-right: 70px;
    position: relative;
}

.activity.alt .activity-desk .panel {
    float: right;
    position: relative;
}

.activity-desk .panel {
    background: #F4F4F4 ;
    display: inline-block;
}


.activity .activity-desk .arrow {
    border-right: 8px solid #F4F4F4 !important;
}
.activity .activity-desk .arrow {
    border-bottom: 8px solid transparent;
    border-top: 8px solid transparent;
    display: block;
    height: 0;
    left: -7px;
    position: absolute;
    top: 13px;
    width: 0;
}

.activity-desk .arrow-alt {
    border-left: 8px solid #F4F4F4 !important;
}

.activity-desk .arrow-alt {
    border-bottom: 8px solid transparent;
    border-top: 8px solid transparent;
    display: block;
    height: 0;
    right: -7px;
    position: absolute;
    top: 13px;
    width: 0;
}

.activity-desk .album {
    display: inline-block;
    margin-top: 10px;
}

.activity-desk .album a{
    margin-right: 10px;
}

.activity-desk .album a:last-child{
    margin-right: 0px;
}
.user-heading p{
  font-weight: 600;
  font-size: 18px;
}
@media screen and (max-width:670px) {
  .bio-row {
   float:none !important;
    margin-bottom: 10px;
    padding:0 15px;
    width: 100% !important;
}
}

</style>
<style>
  /* body {
  background-color: rgb(239, 239, 239);
  max-width: 1170px;
  margin: auto auto;
  padding: 0;
} */
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
  
  if($user=$this->session->userdata('kids_user')){
    extract($user);  
    ?>
                <li class="menu-list menu-lists">
                <a href="#" class="menu-link"><i class="fa fa fa-user"></i> My Profile</a>
                <ul class="sub_menu_item">
                  <li class="sub_menu_list">
                    <a href="<?= base_url('main/stdlogin') ?>" class="sub_menu_link">Welcome : <?= $kids_name ?></a>
                  </li>
                  <li class="sub_menu_list">
                    <a href="<?= base_url('main/kids_information/') .$id?>" class="sub_menu_link">View Details</a>
                  </li>

                  <li class="sub_menu_list">
                    <a href="<?= base_url('main/kids_logout') ?>" class="sub_menu_link">Logout</a>
                  </li>
                </ul>
              </li>
    <?php
  }else{
    ?>
              <li class="menu-list menu-lists">
                <a href="#" class="menu-link">Login</a>
                <ul class="sub_menu_item">
                <li class="sub_menu_list">
        <a href="<?= base_url('main/kids_login') ?>" class="sub_menu_link">Kids Login</a>
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





<?php
if (isset($kids_data)) {
    // foreach($data as $row){
    ?>

<div class="container">
<div class="row">
  <div class="profile-nav col-md-3">
      <div class="panel">
          <div class="user-heading round">
              <a href="#">
                  <img  src="<?= base_url('upload/kids_upload/' . $kids_data[0]->kids_pic) ?>" alt="" width="100" height="100">
              </a>
              <h1><?= $kids_data[0]->kids_name  ?></h1>
              <p>Enroll Number : <?= $kids_data[0]->kids_enroll  ?> </p>
              <p>Standard : <?= $kids_data[0]->kids_standard ?> </p>
          </div>

          <!-- <ul class="nav nav-pills nav-stacked">
              <li class="active"><a href="#"> <i class="fa fa-user"></i> Profile</a></li>
              <li><a href="#"> <i class="fa fa-calendar"></i> Recent Activity <span class="label label-warning pull-right r-activity">9</span></a></li>
              <li><a href="#"> <i class="fa fa-edit"></i> Edit profile</a></li>
          </ul> -->
      </div>
  </div>
  <div class="profile-info col-md-9">
      <!-- <div class="panel">
          <form>
              <textarea placeholder="Whats in your mind today?" rows="2" class="form-control input-lg p-text-area"></textarea>
          </form>
          <footer class="panel-footer">
              <button class="btn btn-warning pull-right">Post</button>
              <ul class="nav nav-pills">
                  <li>
                      <a href="#"><i class="fa fa-map-marker"></i></a>
                  </li>
                  <li>
                      <a href="#"><i class="fa fa-camera"></i></a>
                  </li>
                  <li>
                      <a href="#"><i class=" fa fa-film"></i></a>
                  </li>
                  <li>
                      <a href="#"><i class="fa fa-microphone"></i></a>
                  </li>
              </ul>
          </footer>
      </div> -->
      <div class="panel">
          <!-- <div class="bio-graph-heading">
              Aliquam ac magna metus. Nam sed arcu non tellus fringilla fringilla ut vel ispum. Aliquam ac magna metus.
          </div> -->
          <div class="panel-body bio-graph-info">
              <h1>Student Information</h1>
              <div class="row">
                  <div class="bio-row">
                      <p><span>Enroll Number  </span> : <?= $kids_data[0]->kids_enroll  ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Name </span>: <?= $kids_data[0]->kids_name  ?> </p>
                  </div>
                  <div class="bio-row">
                      <p><span>Birthday </span>: <?= $kids_data[0]->kids_dob  ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Gender </span>: <?= $kids_data[0]->kids_gender  ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Father </span>: <?= $kids_data[0]->kids_parent  ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Standard </span>: <?= $kids_data[0]->kids_standard  ?> </p>
                  </div>
                  <div class="bio-row">
                      <p><span>Date of Join </span>: <?= $kids_data[0]->kids_doj  ?> </p>
                  </div>
                  <div class="bio-row">
                      <p><span>Mobile Number </span>: <?= $kids_data[0]->kids_mobile  ?> </p>
                  </div>
                  <div class="bio-row">
                      <p><span>Mail </span>: <?= $kids_data[0]->kids_mail  ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Address </span>: <?= $kids_data[0]->kids_address  ?></p>
                  </div>
              </div>
          </div>
          <hr>
          <?php
                        if (isset($kids_data1)) {
                          ?>
              <tr>
          <div class="panel-body bio-graph-info">
              <h1>Payment Details</h1>
              <div class="pay">
              <div class="row">
                  <div class="bio-row1">
                      <p><span>Total Fees Paid </span>: <?= $kids_data1[0]->kid_amnt_paid ?></p>
                  </div>
                  <div class="bio-row1">
                      <p><span>Pending Amount To Be Pay </span>: <?= $kids_data1[0]->kid_pending_amnt ?></p>
                  </div>
                  <div class="bio-row1">
                      <p><span>Payment Status </span>: <?= $kids_data1[0]->kid_fees_status ?></p>
                  </div>      
                  <div class="payment">
              <div class="bio-row1">
              <p><span class="click"> Click </span> : <a href="<?= base_url('main/payment_page') ?>" class="effect-underline"> Online Payment Method</a></p>
                  </div>
                  </div>         
              </div>
             
              </div>
          </div>
      </div>
      <div>
      </div>
  </div>
</div>
</div>

<?php
                        }
    }

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