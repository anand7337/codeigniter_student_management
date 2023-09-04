//navbar//
$(function ($) {
    $(".mobile_btn").on("click", function () {
      $(".main_menu").slideToggle();
      $(".mobile_btn i").toggleClass("fa-xmark fa-xl");
    });
  
    if ($(window).width() < 768) {
      $(".main_menu  ul li a").on("click", function () {
        $(this)
          .parent(".has_dropdown")
          .children(".sub_menu")
          .css({ "padding-left": "15px" })
          .stop()
          .slideToggle();
  
        $(this)
          .parent(".has_dropdown")
          .children("a")
          .find(".fa-angle-right")
          .stop()
          .toggleClass("fa-rotate-90");
      });
    }

  });


  // $(function(){
  //   $(".paper-icon1").hover(function(){
  //     $(this).hide();
  //     $(".paper-icon2").show();
  //   },()=>{
  //     $(".paper-icon1").show();
  //     $(".paper-icon2").hide();
  //   });
  // })

  





//progress bar//
$(".animated-progress span").each(function () {
  $(this).animate(
    {
      width: $(this).attr("data-progress") + "%",
    },
    1000
  );
  $(this).text($(this).attr("data-progress") + "%");
});


var x = 0;
window.onload= perc();
function perc(){
  if (x == 0) {
    x = 1;
    var elem = document.getElementById("myBar1");
    var width = 1;
    var id = setInterval(frame, 10);
    function frame() {
      if (width >= 57) {
        clearInterval(id);
        x = 0;
      } else {
        width++;
        elem.style.width = width + "%";
      }
    }
  }
}


var i = 0;
window.onload= progress();
function progress(){
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar2");
    var width = 1;
    var id = setInterval(frame2, 10);
    function frame2() {
      if (width >= 96) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
      }
    }
  }
}
var i = 0;
window.onload= pro();
function pro(){
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar3");
    var width = 1;
    var id = setInterval(frame3, 10);
    function frame3() {
      if (width >= 47) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
      }
    }
  }
}
var i = 0;
window.onload= prog();
function prog(){
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar4");
    var width = 1;
    var id = setInterval(frame4, 10);
    function frame4() {
      if (width >= 91) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
      }
    }
  }
}

//counter up//
// let counterup = document.querySelectorAll(".counter_up");
// let convert = Array.from(counterup);
// convert.map((counteritem) => {
//   let counter = 0;
//   function count() {
//     counter++;
//     counteritem.innerHTML = counter;
//     if (counter == counteritem.dataset.number) {
//       clearInterval(timing);
//     }
//   }
//   let timing = setInterval(() => {
//     count();
//   }, counteritem.dataset.speed/counter);
// });
$('.stat-number').each(function () {
  var size = $(this).text().split(".")[1] ? $(this).text().split(".")[1].length : 0;
  $(this).prop('Counter', 0).animate({
     Counter: $(this).text()
  }, {
     duration: 5000,
     step: function (func) {
        $(this).text(parseFloat(func).toFixed(size));
     }
  });
});



//about progress 

let number = document.getElementById("number");
let counter = 0;

setInterval(() => {
  if (counter === 82) {
    clearInterval();
  } else {
    counter += 1;
    number.innerHTML = counter + "%";
  }
}, 30);

let numbers = document.getElementById("numbers");
let counters = 0;

setInterval(() => {
  if (counters === 75) {
    clearInterval();
  } else {
    counters += 1;
    numbers.innerHTML = counters + "%";
  }
}, 30);

let numberss = document.getElementById("numberss");
let counterss = 0;

setInterval(() => {
  if (counterss === 90) {
    clearInterval();
  } else {
    counterss += 1;
    numberss.innerHTML = counterss + "%";
  }
}, 30);

// achievement slider   //

const nextSlide = (event) => {
  const slider = event.parentNode.children[1]
  slider.append(slider.children[0])
}
const prevSlide = (event) => {
  const slider = event.parentNode.children[1]
  slider.prepend(slider.children[slider.children.length - 1])
}




//bottom to top button//
var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});

//pre loader//
$(window).on('load', function () {
  $(".loader").fadeOut();
  $("#preloder").delay(200).fadeOut("slow");
});

