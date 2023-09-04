<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kids-Payment-Method</title>
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
  <style>
    
.payment {
    width: 460px;
    margin: 6em auto;
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
textarea,
select
{
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
    margin: 10px 0px;
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

.lists .form_head{
  font-family: "Capriola", Sans-serif;
  color:#FF5300F0;
  font-weight: bold;
}
.lists label span{
  font-family: "Capriola", Sans-serif;
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
  
  if($user=$this->session->userdata('std_user')){
    extract($user);  
    ?>
                <li class="menu-list menu-lists">
                <a href="#" class="menu-link"><i class="fa fa fa-user"></i> My Profile</a>
                <ul class="sub_menu_item">
                  <li class="sub_menu_list">
                    <a href="<?= base_url('main/stdlogin') ?>" class="sub_menu_link">Welcome : <?= $std_name ?></a>
                  </li>
                  <li class="sub_menu_list">
                    <a href="<?= base_url('main/std_information/') .$id?>" class="sub_menu_link">View Details</a>
                  </li>

                  <li class="sub_menu_list">
                    <a href="<?= base_url('main/std_logout') ?>" class="sub_menu_link">Logout</a>
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





  <div class="container payment">
<form action="<?= base_url('main/pay')  ?>" method="post" class="pay_form">
        <ul>
          <li class="lists">
            <h4 class="form_head">Payment Method</h4>
          </li>
        <li class="lists">
                <label for="name"><span>Enroll Number <span class="required-star">*</span></span></label>
                <input type="text" id="name" name="enroll" required>
            </li>
            <li class="lists">
                <label for="name"><span>Name <span class="required-star">*</span></span></label>
                <input type="text" id="name" name="name" required>
            </li>
            <li class="lists">
                <label for="mail"><span>Email <span class="required-star">*</span></span></label>
                <input type="email" id="mail" name="email" required>
            </li>
            <li class="lists">
                <label for="number"><span>Mobile Number <span class="required-star">*</span></span></label>
                <input type="number" id="mail" name="number" required>
            </li>
            <li class="lists">
                <label for="standard"><span>Standard <span class="required-star">*</span></span></label>
                <select class="form-control" name="std_standard">
                        <option value="none" selected disabled hidden>Standard</option>
                        <option value="6th standard">6th Standard</option>
                        <option value="7th standard">7th Standard</option>
                        <option value="8th standard">8th Standard</option>
                        <option value="9th standard">9thth Standard</option>
                        <option value="10th standard">10th Standard</option>
                        <option value="11th standard">11th Standard</option>
                        <option value="12th standard">12th Standard</option>
                      </select>
            </li>
            <li class="lists">
                <label for="number"><span>Amount <span class="required-star">*</span></span></label>
                <input type="number" id="mail" name="amount" required>
            </li>
            <li class="lists">
                <input type="submit" name="submit" value="Pay">
            </li>
        </ul>
    </form>
</div>












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