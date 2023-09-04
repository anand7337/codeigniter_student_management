<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff_Attendance</title>
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

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- Template Stylesheet -->

    <!-- <link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>assets/css/style.css"> -->
    <link href="<?php echo base_url('assets/css/style.css')  ?>" rel="stylesheet" />
    <script src="/path/to/cdn/jquery.min.js"></script>
    <script src="/path/to/counter.min.js"></script>
    <style>
        /* (A) WRAPPER */
#tp-wrap * {
  font-family: arial, sans-serif;
  box-sizing: border-box;
}
#tp-wrap *::selection {
  background: transparent;
}
#tp-wrap {
  width: 100vw; height: 100vh;
  position: fixed; top: 0; left: 0; z-index: 999;
  background: rgba(0, 0, 0, 0.7);
  opacity: 0; visibility: hidden;
  transition: opacity 0.3s;
}
#tp-wrap.show {
  opacity: 1; visibility: visible;
}

/* (B) BOX */
#tp-box {
  position: absolute;
  top: 50%; left: 50%;
  transform: translate(-50%, -50%);
  width: 320px;
  display: flex; flex-wrap: wrap;
  border: 1px solid #000;
  background: #2d2d2d;
}

/* (C) HR/MIN/AM/PM */
.tp-cell {
  width: 33.3%; padding: 0 15px;
  text-align: center;
}
.tp-up, .tp-down {
  padding: 10px 0;
  color: #e01717;
  font-size: 32px; 
  font-weight: 700;
  cursor: pointer;
}
.tp-val {
  width: 100%; padding: 10px 0;
  text-align: center; font-size: 22px;
  background: #fff;
}

/* (D) CLOSE & SET BUTTON */
#tp-close, #tp-set {
  width: 50%;
   padding: 15px 0;
   border: 0;
  font-size: 18px;
   font-weight: 700;
  color: #fff; cursor: pointer;
}
#tp-close { background: #951a1a; }
#tp-set { background: #1339a7; }

/* (E) 24-HOUR MODIFY */
#tp-wrap.tp-24 #tp-ap { display: none; }
#tp-wrap.tp-24 #tp-hr, #tp-wrap.tp-24 #tp-min { width: 50%; }

/* (X) CSS DOES NOT MATTER - FOR COSMETICS */
/* PAGE & BODY */
/* * {
  font-family: arial, sans-serif;
  box-sizing: border-box;
}
.time {
  display: flex;
  align-items: center; justify-content: center;
  min-height: 100vh;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}


.widget-wrap {
  width: 500px;
  padding: 30px;
  border-radius: 20px;
  background: rgba(255, 255, 255, 0.5);
}
.widget-wrap label, .widget-wrap input {
  display: block;
  padding: 10px;
  width: 100%;
}


#hash {
  width: 100px; height:100px;
  background-repeat: no-repeat;
  background-position: center;
}
.times{
    display:flex;
    justify-content: space-around;
} */

    
    
.payment {
    /* width: 460px; */
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
  /* color:#FF5300F0; */
  font-weight: bold;
}
.lists label span{
  font-family: "Capriola", Sans-serif;
}
.staff{
    display:flex;
   align-items: center ;
   justify-content:center;
}
.staff h1{
    font-weight:bold;
    font-family: "Adamina", Sans-serif;
  color:#f15b22 !important;
}
    </style>
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

<!-- 
<div id="printableArea">
      <h1>Staff Attendance</h1>
</div>

<a href="" onclick="printDiv('printableArea')">Download</a> -->

<!-- <input type="button" onclick="printDiv('printableArea')" value="print a div!" /> -->












<div class="container payment">
    
    <div class="staff">
        <h1>Staff Attendance</h1>
    </div>
    <div class="row">
   <div class="col-md-6">
<form action="<?= base_url('main/staff_in/') .$id .'/' . $staff_id . '/' . $staff_fname . '/' . $staff_subject ?>" method="post" class="pay_form">
        <ul>
          <li class="lists">
            <h4 class="form_head">In Time</h4>
          </li>
        <li class="lists">
                <!-- <label for="name"><span>Enroll Number <span class="required-star">*</span></span></label> -->
                <input type="text"  id="demoA"  name="in_time"  required>
            </li>
            <li class="lists">
                <input type="submit" name="submit" value="check in">
            </li>
        </ul>
    </form>
</div>

    <div class="col-md-6">
    <form action="<?= base_url('')  ?>" method="post" class="pay_form">
        <ul>
          <li class="lists">
            <h4 class="form_head">Out Time</h4>
          </li>
        <li class="lists">
                <!-- <label for="name"><span>Enroll Number <span class="required-star">*</span></span></label> -->
                <input type="text"  name="out_time" id="demoC" required>
            </li>
            <li class="lists">
                <input type="submit" name="submit" value="check out">
            </li>
        </ul>
    </form>
    </div>
    </div>
</div>

<script>
  //json string convertor object method
  // var std = '{"name":"anand","age":22}';
  // alert(typeof(std));
  // var std1 = JSON.parse(std);
  // alert(typeof(std1));
  // document.write("<h1>"+std1.name + " age is" + std1.age + "</h1>");

//object to string convertor
// var std = {
//     name:"anand",
//     age:22
// };
    //  alert(typeof(std))
  //  var str = JSON.stringify(std);
  //  alert(typeof(str)); 
  // document.write(str);


 
</script>

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
<script>
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
<script>
    var tp = {
  // (A) INIT - GENERATE TIME PICKER HTML
  hwrap : null, // entire html time picker
  hhr : null,   // html hour value
  hmin : null,  // html min value
  hap : null,   // html am/pm value
  init : () => {
    // (A1) ADD TIME PICKER TO BODY
    tp.hwrap = document.createElement("div");
    tp.hwrap.id = "tp-wrap";
    document.body.appendChild(tp.hwrap);

    // (A2) TIME PICKER INNER HTML
    tp.hwrap.innerHTML =
    `<div id="tp-box">
      <div class="tp-cell" id="tp-hr">
        <div class="tp-up">&#65087;</div> <div class="tp-val">0</div> <div class="tp-down">&#65088;</div>
      </div>
      <div class="tp-cell" id="tp-min">
        <div class="tp-up">&#65087;</div> <div class="tp-val">0</div> <div class="tp-down">&#65088;</div>
      </div>
      <div class="tp-cell" id="tp-ap">
        <div class="tp-up">&#65087;</div> <div class="tp-val">AM</div> <div class="tp-down">&#65088;</div>
      </div>
      <button id="tp-close" onclick="tp.hwrap.classList.remove('show')">Close</button>
      <button id="tp-set" onclick="tp.set()">Set</button>
    </div>`;

    // (A3) GET VALUE ELEMENTS + SET CLICK ACTIONS
    for (let segment of ["hr", "min", "ap"]) {
      let up = tp.hwrap.querySelector(`#tp-${segment} .tp-up`),
          down = tp.hwrap.querySelector(`#tp-${segment} .tp-down`);
      tp["h"+segment] = tp.hwrap.querySelector(`#tp-${segment} .tp-val`);

      if (segment=="ap") {
        up.onclick = () => tp.spin(true, segment);
        down.onclick = () => tp.spin(true, segment);
      } else {
        up.onmousedown = () => tp.spin(true, segment);
        down.onmousedown = () => tp.spin(false, segment);
        up.onmouseup = () => tp.spin(null);
        down.onmouseup = () => tp.spin(null);
        up.onmouseleave = () => tp.spin(null);
        down.onmouseleave = () => tp.spin(null);
      }
    }
  },

  // (B) SPIN HOUR/MIN/AM/PM
  //  direction : true (up), false (down), null (stop)
  //  segment : "hr", "min", "ap" (am/pm)
  timer : null, // for "continous" time spin
  minhr : 1,    // min spin limit for hour
  maxhr : 12,   // max spin limit for hour
  minmin : 0,   // min spin limit for minute
  maxmin : 59,  // max spin limit for minute
  spin : (direction, segment) => {
    // (B1) CLEAR TIMER
    if (direction==null) { if (tp.timer!=null) {
      clearTimeout(tp.timer);
      tp.timer = null;
    }}

    // (B2) SPIN FOR AM/PM
    else if (segment=="ap") { tp.hap.innerHTML = tp.hap.innerHTML=="AM" ? "PM" : "AM"; }

    // (B3) SPIN FOR HR/MIN
    else {
      // (B3-1) INCREMENT/DECREMENT
      let next = +tp["h"+segment].innerHTML;
      next = direction ? next+1 : next-1;

      // (B3-2) MIN/MAX
      if (segment=="hr") {
        if (next > tp.maxhr) { next = tp.maxhr; }
        if (next < tp.minhr) { next = tp.minhr; }
      } else {
        if (next > tp.maxmin) { next = tp.maxmin; }
        if (next < tp.minmin) { next = tp.minmin; }
      }

      // (B3-3) SET VALUE
      if (next<10) { next = "0"+next; }
      tp["h"+segment].innerHTML = next;

      // (B3-4) KEEP ROLLING - LOWER TIMEOUT WILL SPIN FASTER
      tp.timer = setTimeout(() => tp.spin(direction, segment), 100);
    }
  },

  // (C) ATTACH TIME PICKER TO HTML FIELD
  //  target : html field to attach to
  //  24 : 24 hours time? default false.
  //  after : optional, function to run after selecting time
  attach : instance => {
    // (C1) READONLY FIELD + NO AUTOCOMPLETE
    // IMPORTANT, PREVENTS ON-SCREEN KEYBOARD
    instance.target.readOnly = true;
    instance.target.setAttribute("autocomplete", "off");

    // (C2) DEFAULT 12 HOURS MODE
    if (instance["24"]==undefined) { instance["24"] = false; }

    // (C3) CLICK TO OPEN TIME PICKER
    instance.target.addEventListener("click", () => tp.show(instance));
  },

  // (D) SHOW TIME PICKER
  setfield : null, // set selected time to this html field
  set24 : false,   // 24 hours mode? default false.
  setafter : null, // run this after selecting time
  show : instance => {
    // (D1) INIT FIELDS TO SET + OPTIONS
    tp.setfield = instance.target;
    tp.setafter = instance.after;
    tp.set24 = instance["24"];
    tp.minhr = tp.set24 ? 0 : 1 ;
    tp.maxhr = tp.set24 ? 23 : 12 ;

    // (D2) READ CURRENT VALUE
    let val = tp.setfield.value;
    if (val=="") {
      tp.hhr.innerHTML = "0"+tp.minhr;
      tp.hmin.innerHTML = "0"+tp.minmin;
      tp.hap.innerHTML = "AM";
    } else {
      tp.hhr.innerHTML = val.substring(0, 2);
      if (tp.set24) {
        tp.hmin.innerHTML = val.substring(2, 4);
      } else {
        tp.hmin.innerHTML = val.substring(3, 5);
        tp.hap.innerHTML = val.substring(6, 8);
      }
    }

    // (D3) SHOW TIME PICKER
    if (tp.set24) { tp.hwrap.classList.add("tp-24"); }
    else { tp.hwrap.classList.remove("tp-24"); }
    tp.hwrap.classList.add("show");
  },

  // (E) SET TIME
  set : () => {
    // (E1) TIME TO FIELD
    if (tp.set24) {
      tp.setfield.value = tp.hhr.innerHTML + tp.hmin.innerHTML;
    } else {
      tp.setfield.value = tp.hhr.innerHTML + ":" + tp.hmin.innerHTML + " " + tp.hap.innerHTML;
    }
    tp.hwrap.classList.remove("show");

    // (E2) RUN AFTER, IF SET
    if (tp.setafter) { tp.setafter(tp.setfield.value); }
  }
};
document.addEventListener("DOMContentLoaded", tp.init);

// (F) ATTACH ON PAGE LOAD
document.addEventListener("DOMContentLoaded", () => {
  tp.init();
  tp.attach({
    target: document.getElementById("demoA")
  });
  tp.attach({
    target: document.getElementById("demoC")
  });
  tp.attach({
    target: document.getElementById("demoB"),
    "24" : true, // 24 hours time
    after : time => alert(time) // run function after select
  });
});
</script>
</body>
</html>