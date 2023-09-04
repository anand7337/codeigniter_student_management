<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Ghurudev Educational Academy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
     <!-- Favicon -->

     <!-- <link href="<?= base_url()  ?>assets/img/cropped-LOGO-01.png" rel="icon" /> -->
     <link rel='shortcut icon' type='image/x-icon' href='<?= base_url() ?>assets/img/logo/cropped-LOGO-01.png' />
     <link rel='shortcut icon' type='image/x-icon' href='<?= base_url() ?>admin/assets/img/logo/cropped-LOGO-01.png' />
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!--Jquery stylesheet -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=  base_url() ?>assets/css/bootstrapmin.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Template Stylesheet -->
    
    <link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>assets/css/style.css">
    <!-- <link href="<?php echo base_url('assets/css/style.css')  ?>" rel="stylesheet" /> -->
    <script src="/path/to/cdn/jquery.min.js"></script>
    <script src="/path/to/counter.min.js"></script>
  </head>
  <body>
    <!-- Topbar Start -->

    <div class="top-navbar">
      <div class="container">
        <div class="top-social">
          <a href="https://m.facebook.com/people/Ghurudev-Educational-Academy/100083045686835/"  class="social-button01">
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
            <a href="index.html"
              ><img src="<?= base_url() ?>assets/img/small-02.png" class="main-logo"
            /></a>
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
                    <a href="<?= base_url('main/student_logout') ?>" class="sub_menu_link">Logout</a>
                  </li>
                </ul>
              </li>
    <?php
  }else{
    ?>

   
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

 
<?php
  
  if($user=$this->session->userdata('staff_user')){
    extract($user);
    ?>
 <li class="menu-list menu-lists">
                <a href="#" class="menu-link"><i class="fa fa fa-user"></i> My Profile</a>
                <ul class="sub_menu_item">
                  <li class="sub_menu_list">
                    <a href="<?= base_url('main/stdlogin') ?>" class="sub_menu_link">Welcome : <?= $staff_fname ?> <?= $staff_lname ?></a>
                  </li>
                  <li class="sub_menu_list">
                    <a href="<?= base_url('main/staff_information/') .$id?>" class="sub_menu_link">View Details</a>
                  </li>
                  <li class="sub_menu_list">
                    <a href="<?= base_url('main/staff_attendance')?>" class="sub_menu_link">Staff Attendance</a>
                  </li>
                  <li class="sub_menu_list">
                    <a href="<?= base_url('main/staff_logout') ?>" class="sub_menu_link">Logout</a>
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
}
  }
?>

            
            </ul>
          </div>
        </div>
      </div>
    </nav> 

    <!-- Navbar End -->

    <!---  Home top banner -->
    <div class="conainer-xxl">
      <div class="home-menu">
        <img src="<?=  base_url() ?>assets/img/home_banner.jpg" />
      </div>
    </div>  
      <div class="container">
        <div class="row">
          <div class="card-section">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card">
                <div class="card-body01">
                  <h3 class="card-title">Kids Academy</h3>
                  <p class="card-desc">
                    At Ghurudev , we know that, “All work and no play, makes
                    Jack a dull boy”. The importance of play and fun in learning
                    cannot be over-stressed. That is why, we provide play group
                    classes for your kids.
                  </p>
                  <p class="card-highlight">PLAY! LEARN! ACHIEVE</p>
                  <div class="card-btn">
                    <button class="btn btn-01">
                      <a href="kids_academy.html">Read More</a>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card">
                <div class="card-body02">
                  <h3 class="card-title02">Why Choose Us</h3>
                  <p class="card-desc">
                    The main purpose of building the institute was to develop a
                    pleasant atmosphere in guiding the students for their future
                    visions. We have produced great results not only from
                    commendable student but also from an average once.
                  </p>
                  <div class="card-btn">
                    <button class="btn btn-02">
                      <a href="about.html">Read More</a>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card">
                <div class="card-body03">
                  <h3 class="card-title">School Tuitions</h3>
                  <p class="card-desc">
                    We are a private educational school that provides tutoring
                    in a range of areas along with exam and test
                    preparation.Much of the time, we provide students with
                    education in small groups that is convenient for both the
                    tutor and the student.
                  </p>
                  <div class="card-btn">
                    <button class="btn btn-03">
                      <a href="School_tutions.html">Read More</a>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row row-03">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="quality-education">
              <h2 class="qual-heading">Quality Education For All</h2>
              <p class="qual-desc">The primary objective of developing the institute was to provide 
                a pleasant experience in which students could be inspired towards their future goals.
                 We have achieved outstanding results  from our students.</p>
              <br>
              <p class="qual-desc">
                Our goal is to assist every student in achieving their best academic potential.
              </p>
              <ul class="qual-list">
                 <li class="quality-list"><i class="bookreader fas fa-book-reader"></i>Kids Academy</li>
                 <li class="quality-list"><i class="bookreader fas fa-book-reader"></i>School Tuitions</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="qual-img">
              <img src="<?=  base_url() ?>assets/img/qualityEducation-768x381.jpg" class="quality-image">
            </div>
          </div>
        </div>
      </div>
    
      <div class="mid-grass">  
        <div class="container">
          <div class="col-md-12 col-sm-12">
            <!-- <div class="quality-boy">
              <img width="100%" height="100%" src="assets/img/Ghurudev-Educational-boy.jpg" class="boy-girl">
            </div> -->
            <div class="middle-grass">
              <div class="parrot">
                <img src="<?=  base_url() ?>assets/img/parrot.jpg">
              </div>
              <div class="boy-girl">
                <img src="<?=  base_url() ?>assets/img/boy_girl.png">
              </div>
            </div>
          </div>
        </div>
      </div>  
    <div class="container">
        <section class="our-features">
          <div class="text-center">
            <h4 class="feature-heading text-primary">Our Feautures</h6>
          </div>
          <div class="sevice-cols"> 
          <div class="features-row">
            <div class="features-column">
              <div class="card-features">
                <div class="icon-wrapper">
                    <img src="<?=  base_url() ?>assets/img/maniconbluebg3-01.jpg" width="40" class="paper-icon1">
                     <!-- <img src="assets/img/" width="40" class="paper-icon2"> -->
                </div>  
                <div class="feature-para">
                <h3>Experienced Faculties</h3>
              
                <p class="study-para">
                  All our teachers are highly experienced in their profile with the ability to get better results from the students.
                </p>
                </div>
              </div>
            </div>
            <div class="features-column">
              <div class="card-features">
                <div class="icon-wrapper">
                  <img src="<?=  base_url() ?>assets/img/clockiconbluebg-01.jpg" width="40" class="paper-icon1">
                  <!-- <img src="assets/img/clockpng4-01.png" width="40" class="paper-icon2"> -->
                </div>
                <div class="feature-para">
                <h3>Periodic Tests</h3>
                <p class="study-para">
                   We conduct periodic test to understand the student knowledge and fix our teaching methodologies.
                </p>
                </div>
              </div>
            </div>
            <div class="features-column">
              <div class="card-features">
                <div class="icon-wrapper">
                  <!-- <i aria-hidden="true" class="fa fa-handshake"></i> -->
                  <img src="<?=  base_url() ?>assets/img/handiconwhite2-01 (1).png" width="40" class="paper-icon1">
                  <!-- <img src="assets/img/handicon2-01.png" width="40" class="paper-icon2"> -->
                </div>
                <div class="feature-para">
                <h3>Soft Skills</h3>
                <p class="study-para">
                    Not only conducting tests we also help students personal skills like removing stage fear by means of seminar.
                </p>
                </div>
              </div>
            </div>
            <div class="features-column">
              <div class="card-features">
                <div class="icon-wrapper1">
                  <i aria-hidden="true" class="fab fa-envira"></i>
                </div>
                <div class="feature-para">
                <h3>Calm Environment</h3>
                <p class="study-para">
                    We keep our environment so pleasent so thet the students can study freely,we always make sure the tuition should be clean and calm.
                </p>
                </div>
              </div>
            </div>
            <div class="features-column">
              <div class="card-features">
                <div class="icon-wrapper1">
                  <!-- <i aria-hidden="true" class="fa fa-book"></i> -->
                  <img src="<?=  base_url() ?>assets/img/Untitled-1-01.png"  height="40"  class="paper-icon1">
                  <!-- <img src="assets/img/staricon1-01.png"  height="60" class="paper-icon2"> -->
                </div>
                <div class="feature-para">
                <h3>Study Materials</h3>
                <p class="study-para05">
                    We give best study materials to our students that helps them to understand the concept clearly and it gives confident to face the exam.
                </p>
                </div>
              </div>
            </div>
            <div class="features-column">
              <div class="card-features">
                <div class="icon-wrapper">
                  <!-- <i aria-hidden="true" class="fa fa-star"></i> -->
                  <img src="<?=  base_url() ?>assets/img/staricon1-01.png" width="40" class="paper-icon1">
                  <!-- <img src="assets/img/staricon1-01.png" width="40" class="paper-icon2"> -->
                </div>
                <div class="feature-para">
                <h3>Quality teaching</h3>
                <p class="study-para">
                    A small river named Dudden flows by their place and supplies it with the neccessary regelia.It is a paradise.
                </p>
                </div>
              </div>
            </div>
          </div>
          </div>    
        </section>
    </div>
    
     
        <section class="learning-path">
         <div class="container-fluid">
          <div class="learn-head">
            <h2 class="learn-title">Learning Paths For Remote</h2>
          </div>
          <div class="learn-row">
            <div class="col-lg-4 col-md-4 col-sm-12">
               <div class="learn-para">
                <p class="learn-desc">As the world changes and flexible education options become more important,
                   many schools are offering remote course delivery. For maximum flexible. Ghurudev’s attendance options include 100% online,
                    in person, in a remote synchronous mode in connected classroom settings or a combination.
                     So, what does “remote” mean? Many students may immediately think of an online course format,
                   however, remote learning doesn’t necessarily follow the same structure.</p>
               </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12">
            <div class="progress">
               <div class="progress-bar"  id=myBar1 role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width:57%">
                  <div class="pro-span"><p class="pro-head">10th Students Marks before joining  </p><span>57%</span></div>
               </div>
            </div>
            <div class="progress">
               <div class="progress-bar" id=myBar2  role="progressbar" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100" style="width:96%">
                <div class="pro-span"><p class="pro-head"> 10th students Marks after joining</p><span>96%</span></div>
               </div>
            </div>
            <div class="progress">
               <div class="progress-bar" id=myBar3 role="progressbar" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100" style="width:47%">
                <div class="pro-span"><p class="pro-head">10th students Marks after joining</p><span>47%</span></div>
               </div>
            </div>
            <div class="progress">
               <div class="progress-bar" id=myBar4 role="progressbar" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100" style="width:91%">
                <div class="pro-span"><p class="pro-head">12th students cut off after joining</p><span>91%</span></div>
               </div>
            </div>
              <!-- <div class="pro-section1">
                <div id="myBar1"><h6>10th Students Marks before joining <span>57%</span></h6></div>
              </div>
              <div class="pro-section2">
                <div id="myBar2"><h6>10th students Marks after joining<span>96%</span></h6> </div>
              </div>
              <div class="pro-section3">
                <div id="myBar3"><h6>12th students cut off before joining<span>47%</span></h6> </div>
              </div>
              <div class="pro-section4">
                <div id="myBar4"><h6>12th students cut off after joining<span>91%</span></h6></div>
              </div> -->
              
              <!-- <div class="animated-progress progress-blue">
                 <span class="pro-span">10th Students Marks before joining</span><span class="progress-span" data-progress="57"></span>
              </div>
              <div class="animated-progress progress-green">
                <span class="pro-span">10th students Marks after joining</span><span class="progress-span" data-progress="96"></span>
              </div>
              <div class="animated-progress progress-purple">
                <span class="pro-span">12th students cut off before joining</span><span class="progress-span" data-progress="47"></span>
              </div>
              <div class="animated-progress progress-red">
                <span class="pro-span">12th students cut off after joining</span><span class="progress-span" data-progress="91"></span>
              </div> -->
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
              <div class="learn-image">
                <img src="<?=  base_url() ?>assets/img/learn-521x1024.jpg" class="learn-img">
              </div>
            </div>
          </div>
         </div>
        </section>
  
        

    <div class="container"> 
      <div class="counter-section">
        <div class="main">
          <div class="counter-card items-01">
            <h2>
              <p class="slash">|</p> <span class="stat-number">10</span>  <i class="fa fa-plus" aria-hidden="true"></i></span>
             <i class="fa fa-plus" aria-hidden="true"></i>
            </h2>
            <h3 class="counter-tit">subjects</h3>
          </div>
          <div class="counter-card items-02">
            <h2>
              <p class="slash">|</p> <span class="stat-number">500</span><i class="fa fa-plus" aria-hidden="true"></i></span>
            </h2>
            <h3 class="counter-tit">Students</h3>
          </div>
          <div class="counter-card items-03">
            <h2>
              <p class="slash">|</p> <span class="stat-number">15</span><i class="fa fa-plus" aria-hidden="true"></i></span>
            </h2>
            <h3 class="counter-tit">Qualified Teachers</h3>
          </div>
          <div class="counter-card items-04">
            <h2>
              <p class="slash">|</p> <span class="stat-number">10</span><i class="fa fa-plus" aria-hidden="true"></i></span>
            </h2>
            <h3 class="counter-tit">Award Wins</h3>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container-fluid">
      <div class="contact-section">
        <div class="contact-home">
          <div class="cont-heading">
            <h2 class="cont-title">Call now And  Book a free appointment</h2>
            <a href="tel:+91 8220725879" class="call-linkbtn">
              <button class="btn cl-btn">Call Us <i class="cf fa fa-phone"></i></button>
            </a>
          </div>
          <div class="cont-side">
            <img src="<?=  base_url() ?>assets/img/girl_tree.jpg" class="cont-footimg">
          </div>
        </div>
      </div>
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
                <p class="footer-desc1">Address:  No.1A, 1st Floor, Gurudev Complex,57th Street, V.R Nagar, Korattur,Chennai – 600 080.</p>
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
                    <input type="text" class="mail" id="mail" name="mail" placeholder="Your Mail Here.."> <button class="search-btn"><i class="fa fa-envelope"></i></button>
                  </form>
                  <div class="social-media">
                    <div class="footer-media">
                      <a href="https://m.facebook.com/people/Ghurudev-Educational-Academy/100083045686835/" class="footer-socialLink">
                       <div class="icon-wrapSocial01">
                         <i class="fab fa-facebook"></i>
                       </div>
                      </a> 
                      <a href="https://twitter.com/ghurudevacademy?lang=en" class="footer-socialLink">
                       <div class="icon-wrapSocial02">
                        <i class="fab fa-twitter"></i>
                      </div>
                      </a>
                      <a href="https://www.youtube.com/channel/UC6Y_JhR7eULcjJPgoquD31g?app=desktop" class="footer-socialLink">
                      <div class="icon-wrapSocial03">
                        <i class="fab fa-youtube"></i>
                      </div>
                      </a>
                      <a href="https://www.linkedin.com/company/ghurudev-educational-academy/?trk=public_post_share-update_actor-text" class="footer-socialLink">
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

    <!--bottom to top  -->
    <a id="button"><i class="fa fa-arrow-up"></i></a>

    <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>
  <!-- script-->
  <script src="<?= base_url()  ?>assets/js/main.js"></script>

</body>
</html>
