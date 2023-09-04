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
           <img src="assets/img/contact-1-04-2048x343.jpg" />
        </div>
    </div> -->

    <div class="conainer-xxl">
      <div class="home-menu">
        <img src="<?= base_url() ?>assets/img/contact-1-04-2048x343.jpg" />
      </div>
    </div>

    <div class="cont-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <div class="get-Touch">
                        <h1 class="get-title">Get In Touch</h1>
                        <p class="get-desc">Do not hesitate to reach out. Just fill in the contact form here and we’ll be sure to reply as fast as possible.</p>
                    </div>
                    <div class="visit-office">
                      <h3 class="visit-title">Visit Our Office</h3>
                      <p class="visit-desc">
                        No.1A, Gurudev Complex,<br>57th Street,<br>Venkataraman Nagar,<br>(near Korattur bus Terminus)<br>
                        Korattur,<br>Chennai – 600 080.
                      </p>
                    </div>
                    <div class="msg-us">
                      <h3 class="msg-title">Message Us</h3>
                      <p class="msg-desc">Mobile Number : +91 8220725879 / 8825948859</p>
                      <p class="msg-desc">E-mail: eduacademy.in@gmail.com</p>
                    </div>
                    <div class="follow-us">
                      <h3 class="follow-title">Follow us</h3>
                      <div class="follow-social">
                          <div class="follow-icons"><a href="https://m.facebook.com/people/Ghurudev-Educational-Academy/100083045686835/"><i class="csi fa fa-facebook"></i></a></div>
                          <div class="follow-icons"><a href="https://www.instagram.com/ghurudev_educational_academy/"><i class="csi fa fa-instagram"></i></a></div>
                          <div class="follow-icons"><a href="https://twitter.com/ghurudevacademy?lang=en"><i class="csi fa fa-twitter"></i></a></div>
                          <div class="follow-icons"><a href="https://www.linkedin.com/company/ghurudev-educational-academy/?trk=public_post_share-update_actor-text"><i class="csi fa fa-linkedin-in"></i></a></div>
                      </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                  <div class="contact-form">
                    <form id="form-subscribe">
                      <input for="text" name="fname" id="fname" placeholder="FIRST NAME" required>
                      <input for="text" name="lname" id="lname" placeholder="LAST NAME" required><br>
                      <input for="text" name="mail" id="mail" placeholder="EMAIL ADDRESS" required><br>
                      <input for="text" name="subject" id="subject" placeholder="SUBJECT" required><br>
                      <textarea name="message" id="message" rows="10" cols="30" placeholder="YOUR MESSAGE"></textarea><br>
                      <p id="contact-details"></p>
                      <input type="submit" value="SUBMIT FORM" name="submit"></input>
                    </form>
                  </div>
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
    <script src="<?= base_url() ?>assets/js/main.js"></script>
    
</body>
</html>