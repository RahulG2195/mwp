$(function () {
  var siteSticky = function () {
    $(".js-sticky-header").sticky({ topSpacing: 0 });
  };
  siteSticky();

  var siteMenuClone = function () {
    $(".js-clone-nav").each(function () {
      var $this = $(this);
      $this
        .clone()
        .attr("class", "site-nav-wrap")
        .appendTo(".site-mobile-menu-body");
    });

    setTimeout(function () {
      var counter = 0;
      $(".site-mobile-menu .has-children").each(function () {
        var $this = $(this);

        $this.prepend('<span class="arrow-collapse collapsed">');

        $this.find(".arrow-collapse").attr({
          "data-toggle": "collapse",
          "data-target": "#collapseItem" + counter,
        });

        $this.find("> ul").attr({
          class: "collapse",
          id: "collapseItem" + counter,
        });

        counter++;
      });
    }, 1000);

    $("body").on("click", ".arrow-collapse", function (e) {
      var $this = $(this);
      if ($this.closest("li").find(".collapse").hasClass("show")) {
        $this.removeClass("active");
      } else {
        $this.addClass("active");
      }
      e.preventDefault();
    });

    $(window).resize(function () {
      var $this = $(this),
        w = $this.width();

      if (w > 768) {
        if ($("body").hasClass("offcanvas-menu")) {
          $("body").removeClass("offcanvas-menu");
        }
      }
    });

    $("body").on("click", ".js-menu-toggle", function (e) {
      var $this = $(this);
      e.preventDefault();

      if ($("body").hasClass("offcanvas-menu")) {
        $("body").removeClass("offcanvas-menu");
        $this.removeClass("active");
      } else {
        $("body").addClass("offcanvas-menu");
        $this.addClass("active");
      }
    });

    // click outisde offcanvas
    $(document).mouseup(function (e) {
      var container = $(".site-mobile-menu");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($("body").hasClass("offcanvas-menu")) {
          $("body").removeClass("offcanvas-menu");
        }
      }
    });
  };
  siteMenuClone();
});

/*function removecanvas() {
     document.getElementsByClassName("site-mobile-menu").style.display = "none";
			     
    
 
}*/
/*$('.site-menu-toggle').on('click', function(e) {

     
      var $this = $(this);
      e.preventDefault();

      if ( $('body').hasClass('offcanvas-menu') ) {
        $('body').removeClass('offcanvas-menu');
        $this.removeClass('active');
      } else {
        $('body').addClass('offcanvas-menu');
        $this.addClass('active');
      }
    }) 
*/

/*  category slider*/
/*$('#recipeCarousel').carousel({
  interval: 5000,
  itemsTablet:[768,2],
})
*/

$(".carousel .carousel-item").each(function () {
  var minPerSlide = 3;
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(":first");
  }
  next.children(":first-child").clone().appendTo($(this));

  for (var i = 0; i < minPerSlide; i++) {
    next = next.next();
    if (!next.length) {
      next = $(this).siblings(":first");
    }

    next.children(":first-child").clone().appendTo($(this));
  }
});

/*testimonial*/
$(document).ready(function () {
  $("#testimonial-slider").owlCarousel({
    loop: true,
    margin: 10,
    dots: false,
    nav: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
  });
  $("#reviewSlider").owlCarousel({
    items: 1,
    itemsDesktop: [1000, 1],
    itemsDesktopSmall: [979, 1],
    itemsTablet: [768, 1],
    margin: 10,
    pagination: false,
    navigation: false,
    navigationText: ["", ""],
    autoPlay: true,
    loop: true,
    dots: true,
    dotsData: true,
  });
});

$(document).ready(function () {
  $(".vendor-category-slider").slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    arrows: false,
    dots: true,
    pauseOnHover: true,
    mobileFirst: false,
    variableWidth: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 520,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 520,
        settings: {
          slidesToShow: 2,
        },
      },
    ],
  });

  // VERSION 2 FOR CATEGORY SLIDER
  $("#categorySliderCarousel").owlCarousel({
    loop: true,
    margin: 20,
    responsiveClass: true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    dots: true,
    responsive: {
      0: {
        items: 1,
      },
      280: {
        items: 2,
      },
      550: {
        items: 3,
      },
      768: {
        items: 4,
      },
      991: {
        items: 5,
      },
      1200: {
        items: 6,
      },
      1440: {
        items: 7,
      },
    },
  });
  
  // VERSION 2 FOR CATEGORY SLIDER
  $("#categorySliderCarousel2").owlCarousel({
    loop: true,
    margin: 20,
    responsiveClass: true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    dots: true,
    responsive: {
      0: {
        items: 1,
      },
//      280: {
//        items: 2,
//      },
//      550: {
//        items: 3,
//      },
//      768: {
//        items: 4,
//      },
//      991: {
//        items: 5,
//      },
//      1200: {
//        items: 6,
//      },
//      1440: {
//        items: 7,
//      },
    },
  });
  
});



/*Customer logo*/

$(document).ready(function () {
  // $(".customer-logos").slick({
  //   slidesToShow: 6,
  //   slidesToScroll: 1,
  //   autoplay: true,
  //   autoplaySpeed: 1500,
  //   arrows: false,
  //   dots: true,
  //   pauseOnHover: true,
  //   responsive: [
  //     {
  //       breakpoint: 768,
  //       settings: {
  //         slidesToShow: 4,
  //       },
  //     },
  //     {
  //       breakpoint: 520,
  //       settings: {
  //         slidesToShow: 3,
  //       },
  //     },
  //   ],
  // });

  $(".customer-logos").owlCarousel({
    loop: true,
    margin: 20,
    responsiveClass: true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    dots: true,
    responsive: {
      0: {
        items: 1,
      },
      250: {
        items: 2,
      },
      425: {
        items: 3,
      },
      600: {
        items: 4,
      },
      767: {
        items: 5,
      },
      1200: {
        items: 6,
      }
    },
  });
});

$(document).ready(function () {
  $(".blog_slider").slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    arrows: false,
    dots: true,
    pauseOnHover: true,
    variableWidth: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 520,
        settings: {
          slidesToShow: 2,
        },
      },
    ],
  });
});

/*Recipe slider*/
/*
$('#recipeCarousel').carousel({
  interval: 10000,
  autoplay: false,
  dots: true,
  responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
})*/

/*inspirational slider*/

$("#inspirationCarousel").carousel({
  interval: 10000,
  autoplay: true,
  dots: true,
});

$(".carousel .carousel-item").each(function () {
  var minPerSlide = 3;
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(":first");
  }
  next.children(":first-child").clone().appendTo($(this));

  for (var i = 0; i < minPerSlide; i++) {
    next = next.next();
    if (!next.length) {
      next = $(this).siblings(":first");
    }

    next.children(":first-child").clone().appendTo($(this));
  }
});

/* on hover change of category slider */

/*document.getElementById("category-card-1").addEventListener("mouseover", function() {
    document.getElementById("category-card-1").style.backgroundColor = "#FD152A24";
    document.getElementById("category-box-caption-1").style.color = "#4D4D4D";
    document.getElementById("category-box-sub-caption-1").style.color = "#4D4D4D";
    document.getElementById("category-box-sub-caption-1").style.backgroundImage = "url('icon/Venues_pink.png')";

});

document.getElementById("category-card-1").addEventListener("mouseout", function() {
    document.getElementById("category-card-1").style.backgroundColor = "#AA4D4F";
    document.getElementById("category-box-caption-1").style.color = "#fff";
    document.getElementById("category-box-sub-caption-1").style.color = "#fff";
});*/

/* show and hide paragraph*/
function togglePara(button) {
  var parent = button.closest(".approach-content");
  var data = parent.querySelector(".approach-para");
  var x = parent.querySelector(".approach-content-para");
  let down = parent.querySelector(".app_cart_down");
  let up = parent.querySelector(".app_cart_up");
  var dot = parent.querySelector(".dots-approach");

  if (data.style.display === "none" || data.style.display === "") {
        data.style.display = "block";
        down.style.display = "none";
        dot.style.display = "none";
        up.style.display = "block";
  } else {
        data.style.display = "none";
        down.style.display = "block";
        up.style.display = "none";
        dot.style.display = "block";
  }
}

/*Know more btn*/
/* function know_toggle(a) {
  var parent = a.closest(".intro-content");
  var data = parent.querySelector(".more_data");
  let dots = parent.querySelector(".dots");
  let know_tog = parent.querySelector(".know-more-btn");

  if (data.style.display === "none" || data.style.display === "") {
    data.style.display = "block";
    dots.style.display = "none";
    know_tog.innerHtml = "Know Less";
  } else {
    data.style.display = "none";
    dots.style.display = "block";
    know_tog.innerHtml = "Know More";
  }
} */

function showknowmore1() {
  var x = document.getElementById("know-more-para-1");
  let dots = document.querySelector(".dots");
  let know_tog = document.querySelector(".know-more-btn");
  if (x.style.display === "none") {
    x.style.display = "block";
    dots.style.display = "none";

    know_tog.text = "Read Less";
  } else {
    x.style.display = "none";
    dots.style.display = "block";
    know_tog.text = "Read More";
  }
}

function showknowmore2() {
  var x = document.getElementById("know-more-para-2");
  let dots = document.querySelector(".dots1");
  let know_tog = document.querySelector("#know-more-btn-2");
  if (x.style.display === "none") {
    x.style.display = "block";
    dots.style.display = "none";
    know_tog.text = "Read Less";
  } else {
    x.style.display = "none";
    dots.style.display = "block";
    know_tog.text = "Read More";
  }
}

function check() {
  var checkBox = document.getElementById("checbox");
  var text1 = document.getElementsByClassName("text1");
  var text2 = document.getElementsByClassName("text2");

  for (var i = 0; i < text1.length; i++) {
    if (checkBox.checked == true) {
      text1[i].style.display = "block";
      text2[i].style.display = "none";
    } else if (checkBox.checked == false) {
      text1[i].style.display = "none";
      text2[i].style.display = "block";
    }
  }
}
check();

$(document).ready(function () {
  $(document).on("click", ".wedding-planning-email", function (e) {
    e.preventDefault();
    var _self = $(this);
    $(_self.attr("href")).modal("show");
  });
});

/*$(document).ready(function() {
    $("#submitButton").on("click", function() {
        var form = $("#weddingplanningform"); 
        var url = form.attr('action'); 
        $.ajax({ 
          type: "POST", 
          url: url, 
          data: form.serialize(), 
          success: function(data) { 
            alert("Form Submited Successfully"); 
          }, 
          error: function(data) { 
            alert("some Error"); 
          } 
        }); 


        
      });
  });*/

/*jQuery("#weddingplanningform").submit(function (evt) {
       var form = $("#weddingplanningform"); 
        var url = form.attr('action'); 
        $.ajax({ 
          type: "POST", 
          url: url, 
          data: form.serialize(), 
          success: function(data) { 
            alert("Form Submited Successfully"); 
          }, 
          error: function(data) { 
            alert("some Error"); 
          } 
        }); 



});*/

$(document).ready(function () {
  $("#weddingplanningbtn").on("click", function () {
    const redirect_url = document.getElementById('service_redirect').value;
    var BASE_URL = 'https://myweddingpalette.com/';
    var fullname = document.getElementById("weddingplanningfname").value;

    var email = document.getElementById("weddingplanningemail").value;

    var phoneno = document.getElementById("weddingplanningphoneno").value;

    var weddingplanname = document.getElementById(
      "weddingplanningplanname"
    ).value;

    var weddingdate = document.getElementById("weddingplanningdate1").value;

    var weddinglocation = document.getElementById(
      "weddingplanninglocation"
    ).value;

    var guestcount = document.getElementById("weddingplanningguestcount").value;

    var budgetrange = document.getElementById(
      "weddingplanningbudgetrange"
    ).value;

    var additinalcomment = document.getElementById(
      "weddingplanningadditionalcomment"
    ).value;

    $.ajax({
      type: "POST",
      url: BASE_URL + "Weedingplanning/weedingplanningEmail",
      data: {
        fullname: fullname,
        email: email,
        phoneno: phoneno,
        weddingplanname: weddingplanname,
        weddingdate: weddingdate,
        weddinglocation: weddinglocation,
        guestcount: guestcount,
        budgetrange: budgetrange,
        additinalcomment: additinalcomment,
      },
      success: function (data) {
        // alert(data);
       // alert("mail sent");
        if(redirect_url == 'https://myweddingpalette.com/service/wedding_planning_service_plan'){
          window.location.href = "https://myweddingpalette.com/Wedding_Planning_Service_Plan/thankyou";
        }else if(redirect_url == 'https://myweddingpalette.com/service/Destination_Wedding'){
          window.location.href = "https://myweddingpalette.com/Destination_Wedding/thankyou";
        }
        //return true
      },
      error: function (data) {
        alert("some Error");
      },
    });
  });
});

/*Design and decor functionality*/

$(document).ready(function () {
  $(document).on("click", ".design-decor-email", function (e) {
    e.preventDefault();
    var _self = $(this);
    var planId = _self.data("id");

    $("#designplanID").val(planId);

    if (planId == "inr-249") {
      document.getElementById("decorcolorplanprice").value = "249";
      document.getElementById("decorcolorplanname").value = "Basic Bliss";
    } else if (planId == "inr-999") {
      document.getElementById("decorcolorplanprice").value = "999";
      document.getElementById("decorcolorplanname").value = "Dazzle Delight";
    } else if (planId == "inr-1999") {
      document.getElementById("decorcolorplanprice").value = "1999";
      document.getElementById("decorcolorplanname").value = "Premium Pop";
    }
  });
});

var groupA = $("input.decoration-checkbox[type='checkbox']");
var groupB = $("input.venue-checkbox[type='checkbox']");
var groupC = $("input.decoration-type-checkbox[type='checkbox']");

$("input.single-checkbox").on("change", function (evt) {
  var planId = document.getElementById("designplanID").value;

  if (planId == "inr-249") {
    if (
      groupA.filter(":checked").length > 1 ||
      groupB.filter(":checked").length > 1 ||
      groupC.filter(":checked").length > 1
    ) {
      $(this).prop("checked", false);
      alert("allowed only 1");
    }
  } else if (planId == "inr-999") {
    if (
      groupA.filter(":checked").length > 3 ||
      groupB.filter(":checked").length > 3 ||
      groupC.filter(":checked").length > 3
    ) {
      //e.preventDefault();
      $(this).prop("checked", false);
      alert("allowed only 3");
    }
  } else if (planId == "inr-1999") {
    if (
      groupA.filter(":checked").length > 5 ||
      groupB.filter(":checked").length > 5 ||
      groupC.filter(":checked").length > 5
    ) {
      //e.preventDefault();
      $(this).prop("checked", false);
      alert("allowed only 5");
    }
  }

  $("#submitButton").on("click", function () {
    var form = $("#designdecorform");
    var url = form.attr("action");
    $.ajax({
      type: "POST",
      url: url,
      data: form.serialize(),
      success: function (data) {
        // alert(data);
        //alert("Form Submited Successfully");
      },
      error: function (data) {
        alert("some Error");
      },
    });
  });
});

function showplan3(event) {
  var x = document.getElementById("epic-content-2");

  var y = document.getElementById("epic-content-1");

  var z = document.getElementById("epic-content-3");

  if (y.style.display === "none") {
    // alert("hi");
    x.style.display = "none";
    y.style.display = "block";
    z.style.display = "none";
  }
  event.stopPropagation();
}

function showplan1(event) {
  //alert("hi");
  var x = document.getElementById("epic-content-2");

  var y = document.getElementById("epic-content-1");

  var z = document.getElementById("epic-content-3");

  if (x.style.display === "none") {
    y.style.display = "none";
    z.style.display = "none";
    x.style.display = "block";
  } else {
    x.style.display = "none";
    // z.style.display="none";
    // y.style.display="block";
  }

  event.stopPropagation();
}

function showplan2(event) {
  //alert("hi");
  var x = document.getElementById("epic-content-2");

  var y = document.getElementById("epic-content-1");

  var z = document.getElementById("epic-content-3");

  if (z.style.display === "none") {
    x.style.display = "none";
    y.style.display = "none";
    z.style.display = "block";
  } else {
    //  x.style.display = "none";
    //  y.style.display="block";
    z.style.display = "none";
  }
  event.stopPropagation();
}

$(document).ready(function () {
  $(".registerInput").select(function () {
    var name = $("#fname").val();
    var lname = $("#lname").val();
    var phone = $("#phoneno").val();
    var email = $("#emailid").val();
    var pass = $("#password").val();

    if (
      name === "" ||
      lname === "" ||
      phone === "" ||
      email === "" ||
      pass === ""
    ) {
      //alert("hi");

      document.getElementsByClassName("err").innerHTML =
        "All feilds are mandetory";
    } else {
      // alert("hi");
    }
  });
});

$(document).ready(function () {
  $("#samecityid").change(function () {
    var value = $(this).val();

    if (value == "no") {
      document.getElementById("citydiv").style.display = "block";
    } else {
      document.getElementById("citydiv").style.display = "none";
    }
  });
});


// username validaion 
// $(document).ready(function() {
//   $('#user_name').on('keyup', function() {
//       const user_name = $(this).val();

//       $.ajax({
//         type: "POST",
//         url: 'https://myweddingpalette.com/Login/UserName_Validate',
//         data: 'user_name=' + user_name,
//         success: function (response) {
//          alert(response);
//         },
//         error: function (jqXHR, textStatus, errorThrown) {
//           console.log("AJAX Error:", textStatus, errorThrown);
//           alert("Error in registration");
//         },
//       });
      
//   });
// });


$(document).ready(function () {
  // Disable submit button on page load
  // $("#sbmt").prop("disabled", true);

  // Attach input event listeners to check the form validity
  /* $(".registersubmit input").on("input", function () {
    checkFormValidity();
  }); */

  /* function checkFormValidity() {
    const fname = document.getElementById("fname").value;
    const lname = document.getElementById("lname").value;
    const user_name = document.getElementById("user_name").value;
    const phoneno = document.getElementById("phoneno").value;
    const emailid = document.getElementById("regsisteremailid").value;
    const password = document.getElementById("password").value;
    const cpassword = document.getElementById("cpassword").value;

    const isEmpty = (field, fieldName) => {
        if (field.trim() === "") {
            document.getElementById(`error_${fieldName}`).innerText = `${fieldName} is required`;
            return true;
        } else {
            document.getElementById(`error_${fieldName}`).innerText = "";
            return false;
        }
    };

    const isPasswordMatch = () => {
        if (password.trim() !== cpassword.trim()) {
            document.getElementById('error_reg').innerText = 'Password does not match';
            return false;
        } else {
            document.getElementById('error_reg').innerText = "";
            return true;
        }
    };

    const isPhoneNumberValid = () => {
        const phoneRegex = /^\d{10}$/; 
        if (!phoneRegex.test(phoneno.trim())) {
            document.getElementById('error_phoneno').innerText = 'Invalid phone number';
            return false;
        } else {
            document.getElementById('error_phoneno').innerText = "";
            return true;
        }
    };

    const isFnameValid = !isEmpty(fname, 'first name');
    const isLnameValid = !isEmpty(lname, 'last name');
    const isUserNameValid = !isEmpty(user_name, 'user name');
    const isEmailValid = !isEmpty(emailid, 'Email Id');
    const isPasswordValid = !isEmpty(password, 'password');
    const isCPasswordValid = isPasswordMatch();
    const isPhoneValid = isPhoneNumberValid();
    
    const formIsValid = isFnameValid && isLnameValid && isUserNameValid &&
        isEmailValid && isPasswordValid && isCPasswordValid && isPhoneValid;

    $("#sbmt").prop("disabled", !formIsValid);

    return formIsValid;
} */




/*New registration functionality*/

/*$(".registersubmit").on("submit", function () {
    var form = $(".registersubmit");
    var url = form.attr("action");
    
    $.ajax({
        type: "POST",
        url: url,
        data: form.serialize(),
        success: function (response) {      
          //alert("You have been registered successfully");
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log("AJAX Error:", textStatus, errorThrown);
          alert("Error in registration");
        },
      });

});*/




/* Vendor Payment Integration */

$(document).ready(function () {
  $(document).on("click", ".vendorPlan", function (e) {
    e.preventDefault();

    var plananualprice = document.querySelector(".planpriceannual");
    var plamonthlprice = document.querySelector(".planpricemonth");
    var planName1 = document.querySelector(".planname1");

    var price1 = plananualprice.dataset.annual1;
    var price2 = plamonthlprice.dataset.month1;
    var type1 = plananualprice.dataset.typea1;
    var type2 = plamonthlprice.dataset.typem1;
    var expire1 = plananualprice.dataset.expirea1;
    var expire2 = plamonthlprice.dataset.expirem1;
    var pname = planName1.dataset.plan1;
    console.log('price1 ' + price1 + ' price2 ' + price2);
    console.log('type1 ' + type1 + ' type2 ' + type2);    

    if (document.querySelector(".strikeprice2").style.display === "block") {
      document.getElementById("planamount").value = "9000";
      document.getElementById("planName").value = "Palette Pro";
      document.getElementById("planType").value = type2;
      document.getElementById("expireDate").value = expire2;      
    } else if (
      document.querySelector(".strikeprice1").style.display === "block"
    ) {
      document.getElementById("planamount").value = "3000";
      document.getElementById("planName").value = "Palette Pro";
      document.getElementById("planType").value = type1;
      document.getElementById("expireDate").value = expire1;
    } else {
      alert("test");
    }
    var _self = $(this);

    $(_self.attr("href")).modal("show");
  });
});

$(document).ready(function () {
  $(document).on("click", ".vendorPlan2", function (e) {
    e.preventDefault();

    var plananualprice = document.querySelector(".planpriceannual1");
    var plamonthlprice = document.querySelector(".planpricemonth1");
    var planName1 = document.querySelector(".planname1");

    var price1 = plananualprice.dataset.annual1;
    var price2 = plamonthlprice.dataset.month1;
    var type1 = plananualprice.dataset.typea2;
    var type2 = plamonthlprice.dataset.typem2;
    var expire1 = plananualprice.dataset.expirea2;
    var expire2 = plamonthlprice.dataset.expirem2;    
    var pname = planName1.dataset.plan1;
    console.log('price1 ' + price1 + ' price2 ' + price2);
    console.log('type1 ' + type1 + ' type2 ' + type2);

    if (document.querySelector(".strikeprice2").style.display === "block") {
      document.getElementById("planamount").value = "18000";
      document.getElementById("planName").value = "Palette Elite";
      document.getElementById("planType").value = type2;
      document.getElementById("expireDate").value = expire2;      
    } else if (
      document.querySelector(".strikeprice1").style.display === "block"
    ) {
      document.getElementById("planamount").value = "6000";
      document.getElementById("planName").value = "Palette Elite";
      document.getElementById("planType").value = type1;
      document.getElementById("expireDate").value = expire1;      
    } else {
      alert("test");
    }
    var _self = $(this);

    $(_self.attr("href")).modal("show");
  });
});

$(document).ready(function () {
  $(document).on("click", ".vendorPlan3", function (e) {
    e.preventDefault();

    var planName1 = document.querySelector(".planname3");
    var pname = planName1.dataset.plan3;

    var _self = $(this);

    // alert(pname);

    if (pname === "palette-express") {
      document.getElementById("planamount").value = "000";
      document.getElementById("planName").value = "Palette Express";
    }

    $(_self.attr("href")).modal("show");
  });
});

/* Login Functionality   */

$(document).ready(function () {
  $(document).on("click", "#closeform", function (e) {
    e.preventDefault();
    $("#myModal").modal("hide");
  });
});


$(".logindesign").on("click", function () {
  var _self = $(this);
  var planId = _self.data("id");
  $("#pageID").val(planId);
});


jQuery("#loginform").submit(function (evt) {
  var form = $("#loginform");
  var url = form.attr("action");
  var base_url =  window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/';

  $.ajax({
     type: "POST",
     url: base_url+'Login',
     data: form.serialize(),
     success: function (response) {
        if (response !== '') {
           // Display the error message
           $('#login_err').text(response);

        } else {
           // Clear any previous error messages
           $('#login_err').text('');
        }
     },
     error: function (xhr, status, error) {
        // Handle AJAX errors if needed
        console.error("AJAX error:", status, error);
     },
  });
});


/* Join wailist functionality*/

jQuery("#waitlistform").submit(function (evt) {
  var form = $("#waitlistform");
  var url = form.attr("action");
  $.ajax({
    type: "POST",
    url: url,
    data: form.serialize(),
    success: function (response) {
     alert("mail sent succesfully");
      //window.location.href = 'https://myweddingpalette.com/thankyou';
    },
  });
});

/* Wedding Checklist*/

jQuery("#weddingchecklist").submit(function (evt) {
  var form = $("#weddingchecklist");
  var url = form.attr("action");
  $.ajax({
    type: "POST",
    url: url,
    data: form.serialize(),
    success: function (response) {
      //alert(response);
      alert("Checklist Saved");
      window.location.href = "https://myweddingpalette.com/Weddingchecklist";
    },
  });
});

/*Vendor Recommendation  Functionality*/

$(".vendordecorlogin").on("click", function () {
 
  var _self = $(this);
  var planId = _self.data("id");
  $("#pagevendortID").val(planId);
});

var planA = $("input.vendor-radio[type='checkbox']");
var planB = $("input.vendor-radio[type='checkbox']");
var planC = $("input.vendor-radio[type='checkbox']");
var planD = $("input.vendor-radio[type='checkbox']");
var planE = $("input.vendor-radio[type='checkbox']");
var planF = $("input.vendor-radio[type='checkbox']");
var planG = $("input.vendor-radio[type='checkbox']");
var planH = $("input.vendor-radio[type='checkbox']");

$("input.single-vendor-radio").on("change", function (evt) {
  var planId = document.getElementById("priceplan").value;
  //alert(planId);
  if (planId == "199") {
    if (
      planA.filter(":checked").length > 1 ||
      planB.filter(":checked").length > 1 ||
      planC.filter(":checked").length > 1 ||
      planD.filter(":checked").length > 1 ||
      planE.filter(":checked").length > 1 ||
      planF.filter(":checked").length > 1 ||
      planG.filter(":checked").length > 1 ||
      planH.filter(":checked").length > 1
    ) {
      $(this).prop("checked", false);
      alert("allowed only 1");
    }
  } else if (planId == "499") {
    if (
      planA.filter(":checked").length > 3 ||
      planB.filter(":checked").length > 3 ||
      planC.filter(":checked").length > 3 ||
      planD.filter(":checked").length > 3 ||
      planE.filter(":checked").length > 3 ||
      planF.filter(":checked").length > 3 ||
      planG.filter(":checked").length > 3 ||
      planH.filter(":checked").length > 3
    ) {
      $(this).prop("checked", false);
      alert("allowed only 3");
    }
  } else if (planId == "799") {
    if (
      planA.filter(":checked").length > 5 ||
      planB.filter(":checked").length > 5 ||
      planC.filter(":checked").length > 5 ||
      planD.filter(":checked").length > 5 ||
      planE.filter(":checked").length > 5 ||
      planF.filter(":checked").length > 5 ||
      planG.filter(":checked").length > 5 ||
      planH.filter(":checked").length > 5
    ) {
      $(this).prop("checked", false);
      alert("allowed only 5");
    }
  } else if (planId == "1199") {
    if (
      planA.filter(":checked").length > 8 ||
      planB.filter(":checked").length > 8 ||
      planC.filter(":checked").length > 8 ||
      planD.filter(":checked").length > 8 ||
      planE.filter(":checked").length > 8 ||
      planF.filter(":checked").length > 8 ||
      planG.filter(":checked").length > 8 ||
      planH.filter(":checked").length > 8
    ) {
      $(this).prop("checked", false);
      alert("allowed only 8");
    }
  }
});

$(".loginchecklist").on("click", function () {
  var _self = $(this);
  var planId = _self.data("id");
  $("#pagechecklistID").val(planId);

  // alert(planId);
});



/*Unique Email Id*/


/*Vendor detail query form*/


$(document).ready(function() {
      // Hide the form initially
      $(".mobile-form-sec").hide();

      // Toggle the form visibility on button click
      $(".vendorquerysubmitbtn").click(function() {
         $(".mobile-form-sec").toggle();
      });
});

$(document).ready(function() {
      // Hide the form initially
      $(".query-form-section1").hide();

      // Toggle the form visibility on button click
      $(".vendorquerysubmitbtn1").click(function() {
         $(".query-form-section1").toggle();
      });
});






  $(".home-page-blog-slider").owlCarousel({
    loop: true,
    margin: 20,
    responsiveClass: true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    dots: true,
    responsive: {
      0: {
        items: 1,
      },
      550: {
        items: 2,
      },
      768: {
        items: 3,
      },
     
    },
  });
 
});

// VERSION 2 SCRIPT START HERE
$(document).ready(function () {
  $(".ourApproachReadMore").click(function () {
    // Toggle between up and down caret icons
    $(this).html(function (i, html) {
      return html.indexOf("fa-caret-up") !== -1
        ? '<i class="fa-solid fa-sort-down"></i>'
        : '<i class="fa-solid fa-caret-up"></i>';
    });

    // Toggle the visibility of dots and hidden content within the parent
    $(this).parent().find(".dots").toggle();
    $(this).parent().find(".hide").toggle();
  });
});


$(document).ready(function () {
  $(document).on("click", ".creataccnt", function (e) {
    e.preventDefault();
    $("#Loginmodel").modal("hide");
  });
});


$(document).ready(function () {
    $(function () {
        $(".my_date_picker").datepicker();
    });
}); 



function validatePassword() {
  var password = document.getElementById('password').value;
  var confirmPassword = document.getElementById('cpassword').value;
  var submitButton = document.getElementById('create_ac');
  var passwordInput = document.getElementById('password');
  var confirmPasswordInput = document.getElementById('cpassword');

  // Check if the passwords match
  var passwordsMatch = password === confirmPassword;

  // Change border color based on password match
  passwordInput.style.borderColor = passwordsMatch ? '#4CAF50' : '#FF0000'; // Green or Red
  confirmPasswordInput.style.borderColor = passwordsMatch ? '#4CAF50' : '#FF0000'; // Green or Red

  // Enable or disable the button based on password match
  submitButton.disabled = !passwordsMatch;
}


 //////////////////////////////////////// Login validation //////////////////////////////////////////////////////////

document.querySelector('#userEmail').addEventListener('focusout', (e) => {
  const userInput = document.querySelector('#userEmail');
  userEmail = e.target.value;
  // alert(userEmail)
  const userError = document.querySelector('.userEmailerr');
  const loginBtn = document.querySelector('#loginBtn');
  var base_url =  window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/';
  //alert(base_url);
  userError.innerHTML = '';
  userInput.style.borderColor =  '';
  if(userEmail.length > 3){
    $.ajax({
      type: 'POST',
      url: base_url+'Login/UserEmailValid', // Adjust the URL based on your CI configuration
      data: {username: userEmail},
      success: function(response) {
        
          if (response.isValidLogin == 1) {
            loginBtn.disabled = false;
            userInput.style.borderColor = '#4CAF50';
            userError.innerHTML = '';
              // Redirect or perform other actions as needed
          } else {
            // userInput.textContent = 'Invalid userName'
            userInput.style.borderColor =  '#FF0000';
            loginBtn.disabled = true;
            userError.innerHTML = 'Invalid Email'
            //  return alert('Invalid username or password');
          }
      },
      error: function(jqXHR, textStatus, errorThrown) {
        return console.log('AJAX Error:', textStatus, errorThrown);
      }
  });
  }else{
    userError.innerHTML = '';
    userInput.style.borderColor =  '';
  }
});

document.querySelector('#passwordlogin').addEventListener('focusout', (e) => {
  pwdEmail = e.target.value;
  const pwdInput = document.querySelector('#passwordlogin');
  
  // alert(pwdEmail)
  const pwdError = document.querySelector('.pwdEmailerr');
  const loginBtn = document.querySelector('#loginBtn');
  var base_url =  window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/';
  pwdError.innerHTML = '';
  pwdInput.style.borderColor =  '';
  if(pwdEmail.length > 3){
  $.ajax({
    type: 'POST',
    url: base_url+'Login/pwdEmailValid', // Adjust the URL based on your CI configuration
    data: {pwdname: pwdEmail},
    success: function(response) {
      
        if (response.isValidLogin == 1) {
          loginBtn.disabled = false;
          pwdInput.style.borderColor = '#4CAF50';
            // Redirect or perform other actions as needed
        } else {
          // pwdInput.textContent = 'Invalid pwdName'
          pwdInput.style.borderColor =  '#FF0000';
          loginBtn.disabled = true;
          pwdError.innerHTML = 'Invalid Password'
          //  return alert('Invalid username or password');
        }
    },
    error: function(jqXHR, textStatus, errorThrown) {
      return console.log('AJAX Error:', textStatus, errorThrown);
    }
});
}else{
  pwdError.innerHTML = '';
  pwdInput.style.borderColor =  '';
}
});




document.querySelector('#createregsisteremailid').addEventListener('focusout', (e) => {
  const userInput = document.querySelector('#createregsisteremailid');
  userEmail = e.target.value;
  const userError = document.querySelector('#userNameErrorMsg');
  const loginBtn = document.querySelector('#create_ac');
  var base_url =  window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/';
  userError.innerHTML = '';
  userInput.style.borderColor =  '';
  if(userEmail.length > 3){
    $.ajax({
      type: 'POST',
      url: base_url + "Login/checkemail", // Adjust the URL based on your CI configuration
      data: {username: userEmail},
      success: function(response) {
        
        //alert(response);
          if (response.isValidLogin == 1) {
              userInput.style.borderColor =  '#FF0000';
              loginBtn.disabled = true;
              userError.innerHTML = 'Email Id alredy exist'
              // Redirect or perform other actions as needed
          } else {
              loginBtn.disabled = false;
              userInput.style.borderColor = '#4CAF50';
              userError.innerHTML = '';
            //  return alert('Invalid username or password');
          }
      },
      error: function(jqXHR, textStatus, errorThrown) {
        return console.log('AJAX Error:', textStatus, errorThrown);
      }
  });
  }else{
    userError.innerHTML = '';
    userInput.style.borderColor =  '';
  }
});
    
$('.checkboxclick').click(function() {
        if ($(this).is(':checked')){
             //alert("hi")
                 $('#vendorpaynow').removeAttr('disabled');
        } 
        else 
        {
             $('#vendorpaynow').attr('disabled', 'disabled');
        }
    });


/*function callback() {
          //alert("hi")
        const submitButton = document.getElementById("submit-button");
        submitButton.removeAttribute("disabled");
      }*/


$(window).scroll(function(){
  if ($(window).scrollTop() >= 100) {
      $('nav').addClass('fixed-header');
  }
  else {
      $('nav').removeClass('fixed-header');
  }
});

document.querySelector('.wishlist-vendor').addEventListener('click', (e) => {
  var vendorseourl =document.getElementById('wishlist-value').value ; 
  var base_url =  window.location.origin + '/' + window.location.pathname.split ('/') [1] + '/';
  $.ajax({
      type: 'POST',
      //url: '<?php echo base_url(); ?>/Wishlist/submitwishlist', // Adjust the URL based on your CI configuration
       url:base_url+'Wishlist/submitwishlist',
       data: {vendorseourl: vendorseourl},
       success: function(response) {
        //alert(response);
          if (response.isSubmit == "true") {
                  alert("Vendor is wishlisted");
            
          } else {
            alert("something went wrong");
          }
      },
      error: function(jqXHR, textStatus, errorThrown) {
        return console.log('AJAX Error:', textStatus, errorThrown);
      }
    });
  });


  $(document).ready(function() {
    // Hide the form initially
    $(".review-form-section1").hide();

    // Toggle the form visibility on button click
    $(".sendreview").click(function() {
       $(".review-form-section1").toggle();
    });
});

