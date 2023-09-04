<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Ghurudev Educational Academy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="<?= base_url()  ?>assets/img/cropped-LOGO-01.png" rel="icon" />
  
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
    <link href="<?= base_url()  ?>assets/css/style.css" rel="stylesheet" />
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
        <img src="assets/img/kids_academy.jpg" />
    </div>
</div> -->
<div class="conainer-xxl">
  <div class="home-menu">
    <img src="<?= base_url() ?>assets/img/kids_academy.jpg" />
  </div>
</div>

<div class="container">
    <div class="kid-top">
        <h1 class="kidTop-title">We Care your Kids</h1>
        <h2 class="kid-title">Our Courses</h2>

          <div class="row ka-2">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="phonics-img">
                    <img src="<?= base_url() ?>assets/img/phonics.jpg">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="kids-sec">
                    <h2 class="kids-title">Phonics</h2>
                    <p class="kids-desc">The study of letters or groupings of letters and their sounds is known as phonics. Letters make sounds, and words are formed up of letters that make sounds. These sounds are grouped together to form a spoken word.</p>
                    <p class="kids-span"><i class="bookreader fas fa-book-reader"></i>Champ 1 ( Age 4 - 5 )</p>
                    <p class="kids-span"><i class="bookreader fas fa-book-reader"></i>Champ 2 ( Age 5 - 6 )</p>
                    <p class="kids-high">( Age Group between 5 to 10 years )</p>
                </div>
            </div>
           </div>    

            <div class="row ka-2">
                <div class="col-lg-6 col-md-6 col-sm-12 abacus">
                    <div class="kids-sec">
                        <h2 class="kids-title">Abacus</h2>
                        <p class="kids-desc">Learning to count using an abacus teaches you a different way of counting as well as how to add and subtract with complementary numbers. You may come up with better and frequently easier answers to all kinds of challenges by learning to tackle problems in new ways.</p>
                        <p class="kids-high">( Age Group between 4 to 14 years ) </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="phonics-img">
                        <img src="<?= base_url() ?>assets/img/abacus-768x543.jpg">
                    </div>
                </div>
            </div>
            <div class="row ka-2">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="phonics-img">
                        <img src="<?= base_url() ?>assets/img/handwriting-768x543.jpg">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="kids-sec">
                        <h2 class="kids-title">Handwritting</h2>
                        <p class="kids-desc">Handwriting includes both printing and cursive styles and is separate from formal calligraphy or typeface. Because each person’s handwriting is unique and different, it can be used to verify a document’s writer.</p>
                        <p class="kids-span"><i class="bookreader fas fa-book-reader"></i>Pre-handwriting Patterns.</p>
                        <p class="kids-span"><i class="bookreader fas fa-book-reader"></i>Single Letter Formation</p>
                        <p class="kids-span">
                          <i class="bookreader fas fa-book-reader"></i>Joined Handwriting</p>
                    </div>
                </div>
            </div>
            <div class="row ka-2">
                <div class="col-lg-6 col-md-6 col-sm-12 drawing">
                    <div class="kids-sec">
                        <h2 class="kids-title">Drawing</h2>
                        <p class="kids-desc">We teach anyone who has the desire to learn the art of drawing. Classes are kept small to ensure individualized attention and instruction. Our classes are “skills-oriented” and  so my methods are particularly well suited for students who want an arts curriculum that goes beyond crafts.</p>
                        <p class="kids-span"><i class="bookreader fas fa-book-reader"></i>The Scribble Stage ( Age 2 - 4 )</p>
                        <p class="kids-span"><i class="bookreader fas fa-book-reader"></i>The Pre-Schematic Stage ( Age 4 - 7 )</p>
                        <p class="kids-span"><i class="bookreader fas fa-book-reader"></i>The Schematic Stage ( Age 7 - 9 )</p>
                        <p class="kids-span"><i class="bookreader fas fa-book-reader"></i>Realistic or Gang Stage ( Age 9 - 12 )</p>
                        <p class="kids-span"><i class="bookreader fas fa-book-reader"></i>The Pseudo-naturalistic Stage ( Age 12 - 14 )</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="phonics-img">
                        <img src="<?= base_url() ?>assets/img/drawing-768x543.jpg">
                    </div>
                </div>
            </div>

            <div class="row ka-2">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="phonics-img">
                        <img src="<?= base_url() ?>assets/img/vedic-Maths-768x543.jpg">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="kids-sec">
                        <h2 class="kids-title">Vedic MAthematics</h2>
                        <p class="kids-desc">Vedic Mathematics is a collection of Methods or Sutras to solve numerical computations quickly and faster. It consists of 16 Sutras called Formulae and 13 sub-sutras called Sub Formulae, which can be applied to the solving of problems in arithmetic, algebra, geometry, calculus, conics, etc.</p>
                        <p class="kids-span">
                          <i class="bookreader fas fa-book-reader"></i> Junior Level ( Grade 3 - 5 )</p>
                        <p class="kids-span"><i class="bookreader fas fa-book-reader"></i>Senior Level ( Grade 6 - 8 )</p>
                     
                    </div>
                </div>
            </div>

            <div class="row ka-2">
                <div class="col-lg-6 col-md-6 col-sm-12 english">
                    <div class="kids-sec">
                        <h2 class="kids-title">Young Learner English</h2>
                        <p class="kids-desc"><i class="bookreader fas fa-book-reader"></i>Young Learners (YLE) Pre A1 Starters (YLE Starters) test is the first of three Cambridge English: Young Learners (YLE) assessments for pupils aged 7 to 12. The exam will motivate your child to begin learning English at a young age and instil in them a favourable attitude about language tests.</p>
                        <p class="kids-span">
                          <i class="bookreader fas fa-book-reader"></i> Pre A1 Starters (YLE Starters)</p>
                        <p class="kids-span"><i class="bookreader fas fa-book-reader"></i>A1 Movers (YLE Movers)</p>
                        <p class="kids-span">
                          <i class="bookreader fas fa-book-reader"></i> A2 Flyers (YLE Flyers)</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="phonics-img">
                        <img src="<?= base_url() ?>assets/img/learner-english-768x543.jpg">
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