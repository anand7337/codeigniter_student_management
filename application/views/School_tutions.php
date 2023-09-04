<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Ghurudev Educational Academy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="<?= base_url() ?>assets/img/cropped-LOGO-01.png" rel="icon" />

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
    <link href="<?= base_url() ?>assets/css/bootstrapmin.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Template Stylesheet -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" />
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
          <a href="https://www.youtube.com/channel/UC6Y_JhR7eULcjJPgoquD31g?app=desktop"  class="social-button04">
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
              ><img src="<?= base_url() ?>assets/img/cropped-LOGO-01.png" class="main-logo"
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
            </ul>
          </div>
        </div>
      </div>
    </nav> 

    <!-- Navbar End -->
<!-- <div class="container-xxl">
    <div class="about-menu">
        <img src="assets/img/school-banner-2048x343.jpg" />
    </div>
</div> -->
<div class="conainer-xxl">
  <div class="home-menu">
    <img src="<?= base_url() ?>assets/img/school-banner-2048x343.jpg" />
  </div>
</div>

<div class="container-fluid">
    <h2 class="school-title">SCHOOL TUITIONS</h2>
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="primary-main">
                <div class="model-img">
                  <img src="<?= base_url() ?>assets/img/teacher-talking-with-her-students-white-background_1308-69937.jpg">
                </div>
                <div class="bottom-right">
                    <div class="con-text">
                    <h1 class="bottom-tit">Primary School</h1>
                    <h2 class="bot-tit">FROM CLASSES 1 STANDARD TO 6TH STANDARD</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="sec-dv">
                <!-- <div class="col-md-12 col-sm-12"> -->
                    <div class="middle-main">
                        <div class="model-img"><img src="<?= base_url() ?>assets/img/primary_02.jpg"></div>
                        <div class="bottom-right">
                            <h1 class="bottom-tit01">Middle School</h1>
                            <h2 class="bot-tit01">FROM CLASSES 6TH STANDARD TO 10TH STANDARD</h2>
                        </div>
                    </div>
                <!-- </div> -->
                <!-- <div class="col-md-12 col-sm-12 second-col"> -->
                    <div class="secondary-main">
                        <div class="model-img"><img src="<?= base_url() ?>assets/img/primary-03.jpg"></div>
                        <div class="bottom-right">
                            <h1 class="bottom-tit01">Secondary School</h1>
                            <h2 class="bot-tit01">FROM CLASSES 11TH STANDARD AND 12TH STANDARD</h2>
                        </div>
                    </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>        
    <div class="container">
        <div class="kid-top">
          <div class="row ka-2">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="phonics-img">
                    <img src="<?= base_url() ?>assets/img/prime-01.jpg">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="kids-sec">
                    <h2 class="kids-title">Primary school</h2>
                    <p class="kids-desc">Primary education is typically the first stage of formal education, coming after preschool/kindergarten and before secondary school. We creating learning resources and undertaking professional development.</p>
                    <p class="kids-span">( For Classes 1st to 5th )</p>
                    <p class="kids-high">( Subjects Taken : Maths , Science, Social, English , Hindi)</p>
                </div>
            </div>
           </div>    

            <div class="row ka-2">
                <div class="col-lg-6 col-md-6 col-sm-12 sc-middle">
                    <div class="kids-sec">
                        <h2 class="kids-title">Middle school</h2>
                        <p class="kids-desc">The primary purpose of a middle school is to serve as an educational facility to help in the transition from primary to secondary education.Assess students to evaluate their abilities, strengths, and weaknesses. You’re growing up and you get to build on all that learning you already did in elementary school.</p>
                        <p class="kids-high">( For Classes 6th to 8th )
                        </p>
                        <p class="kids-span">
                            ( Subjects Taken : Maths , Science, Social, English , Hindi).</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="phonics-img">
                        <img src="<?= base_url() ?>assets/img/middle-school-768x543.jpg">
                    </div>
                </div>
            </div>
            <div class="row ka-2">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="phonics-img">
                        <img src="<?= base_url() ?>assets/img/secondary-school-768x543.jpg">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="kids-sec">
                        <h2 class="kids-title">Secondary school</h2>
                        <p class="kids-desc">Secondary education occupies a very strategic position in the educational pattern of the country. It is the link between primary education and higher education.Instruct students through curriculum-approved lectures, demonstrations and discussions.</p>
                        <p class="kids-span">( For Classes 9th to 10th )</p>
                        <p class="kids-span">
                            ( Subjects Taken : Maths , Science, Social, English , Hindi).</p>
                    </div>
                </div>
            </div>
            <div class="row ka-2">
                <div class="col-lg-6 col-md-6 col-sm-12 sc-seniorSecond">
                    <div class="kids-sec">
                        <h2 class="kids-title">Senior secondary school</h2>
                        <p class="kids-desc">Higher secondary is also known as Senior Secondary. It refers to the education imparted in the eleventh and twelfth standard in schools. The schools which provide education up to these classes are known as Higher secondary schools.</p>
                        <p class="kids-span">( For Classes 11th to 12th )</p>
                        <p class="kids-high">( Subjects Taken : Maths , Physics, Chemistry, Computer science, Biology, Accountancy , Commerce, Business Maths )</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="phonics-img">
                        <img src="<?= base_url() ?>assets/img/senior-second-768x543.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-heading">
        <a href="tel:+91 8220725879" class="call-linkbtn">
          <button class="btn cl-btn">Call Us <i class="cf fa fa-phone"></i></button>
        </a>
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
  <script src="<?= base_url() ?>assets/js/main.js"></script>
</body>
</html>