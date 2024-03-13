    <script src="<?php echo base_url() ?>assets/front/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/front/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/front/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/front/js/jquery.sticky.js"></script>
    <script src="<?php echo base_url() ?>assets/front/js/main.js"></script>
    <script src="<?php echo base_url() ?>assets/front/js/wow.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <!--<script src="<?php echo base_url() ?>assets/front/js/owl.carousel.min.js"></script> -->
     <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->
     
     
    <!-- OLD VERSION OF OWL CAROUSEL  -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script> -->

    <!-- NEW VERSION OF OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/ScrollTrigger.min.js" defer></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/lodash/4.17.21/lodash.min.js"></script> -->
    <script>
        //////////////////////////////////////// Login validation //////////////////////////////////////////////////////////

        function validateLogin() {
            var username = $('#emailidlogin').val();
            var password = $('#passwordlogin').val();
            // const url = 'https://myweddingpalette.com/';
            $.ajax({
                type: 'POST',
                url: 'https://myweddingpalette.com/Login/validateLogin', // Adjust the URL based on your CI configuration
                data: {username: username, password: password},
                success: function(response) {
                    if (response.isValidLogin) {
                        alert('Login successful!');
                        // Redirect or perform other actions as needed
                    } else {
                       return alert('Invalid username or password');
                    }
                },
                // error: function(jqXHR, textStatus, errorThrown) {
                //   return alert('AJAX Error:', textStatus, errorThrown);
                // }
            });
        }

    </script>
    <script>
        
        function enableSubmitButton() {
            //alert("hi");
          var privacyCheckbox = document.getElementById('clickme');
          var recaptchaCompleted = grecaptcha.getResponse();
           //alert(grecaptcha.getResponse())
         // var submitButton = document.getElementById('weddingplanningbtns');

          // Enable or disable the button based on both privacy checkbox and reCAPTCHA
          
          if(!(privacyCheckbox.checked && recaptchaCompleted))
          {
             $('#weddingplanningbtns').removeAttr('disabled');
              
              
          }
          else{
                
                 $('#weddingplanningbtns').attr('disabled', 'disabled');
          }
         
        }
        
        // checkbox validation 
        function updateButtonState() {
          var checkboxes = document.querySelectorAll('input[name="decoration_ocassion[]"]');
          var checkboxes2 = document.querySelectorAll('input[name="venue_type[]"]');
          var submitButton = document.getElementById('designdecorbtn');
        
          // Check if at least one checkbox is checked
          var atLeastOneChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);
          var atLeastOneChecked1 = Array.from(checkboxes2).some(checkbox => checkbox.checked);
        
          // Enable or disable the button based on the checkbox state
          submitButton.disabled = !atLeastOneChecked;
          submitButton.disabled = !atLeastOneChecked1;
        }
    </script>
    <script>
    $(document).ready(function() {
        $(".vendor_slider").owlCarousel({
            // items: 1, // Number of items to display
            loop: true, // Infinite loop
            margin: 10, // Margin between items
            autoplay: true, // Autoplay
            autoplayTimeout: 4000, // Autoplay interval in milliseconds
            responsive: {
                0: {
                    items: 1,
                    autoplay: true,
                    loop: true
                },
                600: {
                    items: 2,
                    autoplay: true,
                    loop: true
                },
                1000: {
                    items: 3
                }
            }
        });
    });
</script>
<!--<script>
     $(document).ready(function() {
    // Hide the default date picker
    $("input[type='date']").css({
        'appearance': 'none !impotant',
        '-webkit-appearance': 'none !impotant',
        '-moz-appearance': 'none !impotant',
    });

    // Initialize custom datepicker
    $("input[type='date']").datepicker({
        dateFormat: 'yy-mm-dd', // Set the date format as per your requirement
        onSelect: function(dateText) {
            $(this).val(dateText); // Update the input field with the selected date
        }
    });

    // Trigger custom datepicker on click anywhere in the input field
    $("input[type='date']").on("click", function(event) {
        event.stopPropagation(); // Prevent the click event from reaching the document
        $(this).datepicker("show");
    });

    // Hide the default datepicker on document click
    $(document).on("click", function() {
        $("input[type='date']").datepicker("hide");
    });
});

</script>-->
  <script>
    // vendor infinite scroll pagination 
    var load_flag = 0;
    var seo = '<?php echo $this->uri->segment(2)?>';
    var loadInProgress = false;
    // verify its blog page or not 
    var blog_page = '<?php echo $this->uri->segment(1)?>';

    var vendor_city = '<?php echo $this->uri->segment(1)?>';
    let vc = vendor_city.split('-in-');
    let vendor = vc[0];
    let city = vc[1];
    
    let active = 'inactive';

    // (blog_page == 'Blog') ?  LoadMoreDataBlog(load_flag) : LoadMoreData(load_flag);
    LoadMoreData(load_flag);
    LoadMoreDataBlog(load_flag);
    // LoadMoreDataFilter(load_flag);

     // =========================================== For filter ====================================================== 
     /* function LoadMoreDataFilter(start){
      // alert(start)

        $.ajax({
          url: '<?php echo base_url()?>Load_more_data/' + vendor_city,
          data: 'start=' + start,
          type: 'post',
          success: function(result){
            
            if (result.trim() !== "") {
          
                  $('#fill_pagination').append(result);
                  load_flag += 12;
                  if(load_flag > 0) active = 'active'; 
            } else {
                console.log('No more data');
            }
        }

      })
    }

    $(document).ready(function () {
      $(window).scroll(function () {
          if($(window).scrollTop() + $(window).height() > $('#fill_pagination').height() - 200) {
            if(active == 'active'){
              loadInProgress = true;
            $('#loadingSpinner').show();
              // if blog is open on website then only it will run 
              LoadMoreDataFilter(load_flag);
              setTimeout(function () {
                  loadInProgress = false;
                  $('#loadingSpinner').hide();
              }, 2000);
              active = 'inactive';

            }
          }
      });
    }); */

    // =========================================== For Blog ====================================================== 
    function LoadMoreDataBlog(start){
      // alert(start)

        $.ajax({
          url: '<?php echo base_url()?>Blog/Blog_pagination',
          data: 'start=' + start,
          type: 'post',
          success: function(result){
            
            if (result.trim() !== "") {
            // Check for duplicate data
              // var existingData = $('#blog_row').html();

              // if (existingData.indexOf(result) === -1) {
                  $('#blog_row').append(result);
                  load_flag += 12;
                  if(load_flag > 0) active = 'active'; 

              /* } else {
                  // Data already exists, handle accordingly
                  console.log('Duplicate data');
              } */
            } else {
                // No more data, you may want to disable further scrolling or show a message
                console.log('No more data');
            }
        }

      })
    }

    $(document).ready(function () {
      $(window).scroll(function () {
          if($(window).scrollTop() + $(window).height() > $('#blog_row').height() - 200) {
            if(active == 'active'){
              loadInProgress = true;
            $('#loadingSpinner').show();
              // if blog is open on website then only it will run 
              LoadMoreDataBlog(load_flag);
              setTimeout(function () {
                  loadInProgress = false;
                  $('#loadingSpinner').hide();
              }, 2000);
              active = 'inactive';

            }
          }
      });
    });

    
    // =========================================== For vendor ======================================================
    function LoadMoreData(start){
      // alert(start)
      $.ajax({
        url: '<?php echo base_url()?>Vendor/Load_more_data/' + seo,
        data: 'start=' + start,
        type: 'post',
        success: function(result){
          
          if (result.trim() !== "") {
          // Check for duplicate data
            // var existingData = $('#ven_pagination').html();

            // if (existingData.indexOf(result) === -1) {
                $('#ven_pagination').append(result);
                load_flag += 24;
                if(load_flag > 0) active = 'active'; 

            /* } else {
                // Data already exists, handle accordingly
                console.log('Duplicate data');
            } */
          } else {
              // No more data, you may want to disable further scrolling or show a message
              console.log('No more data');
          }
      }

    })
  }

  $(document).ready(function () {
    $(window).scroll(function () {
        if($(window).scrollTop() + $(window).height() > $('#ven_pagination').height() - 200) {
          if(active == 'active'){
            loadInProgress = true;
            $('#loadingSpinner').show();
            // if blog is open on website then only it will run 
            LoadMoreData(load_flag);
              setTimeout(function () {
                  loadInProgress = false;
                  $('#loadingSpinner').hide();
              }, 2000);
            active = 'inactive';
          }
        }
    });
  });
  </script>



  <script>

    // $('#filter_city').on('change', function(){
    //   val = $(this).val();
    //   window.location.href = '<?php echo base_url() . 'Citys/'?>' + val;
    // })

    $('#header_city').on('change', function(){
      val = $(this).val();
      $('#cityForm').submit();
    })

    // blog vendors dropdown 
    $('#vendor_ajax').on('change', function(){
      val = $(this).val();
      window.location.href = '<?php echo base_url() . 'Single-Vendor/'?>' + val;
    })
  </script>
   <script>
    $(function() {
    $('a[href="#search"]').on("click", function(event) {
      event.preventDefault();
      $("#search").addClass("open");
      $('#search > form > input[type="search"]').focus();
    });

    $("#search, #search button.close").on("click keyup", function(event) {
      if (
        event.target == this ||
        event.target.className == "close" ||
        event.keyCode == 27
      ) {
        $(this).removeClass("open");
      }
    });

    // $("form").submit(function(event) {
    //   event.preventDefault();
    //   return false;
    // });
  });
   </script>
  <!--   <script type="text/javascript">
      $(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,2],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination:false,
        navigation:true,
        slideSpeed:1000,
        singleItem:true,
        transitionStyle:"goDown",
        navigationText:["",""],
        autoPlay:false
    });
});
   </script>
   <script type="text/javascript">
    $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: true,
        pauseOnHover: true,
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
    });
});
</script>
<script type="text/javascript">
  $('#recipeCarousel').carousel({
  interval: 10000,
  autoplay: false,
  dots: true,
})
</script>
<script type="text/javascript">


</script> -->
<script>
        $(document).ready(function () {
            const form = $('#multiStepForm');
            const steps = form.find('.step');
            let currentStep = 1;

            // Hide all steps except the first one
            steps.not(':first').hide();

            form.on('click', 'button', function (e) {
                e.preventDefault();

                if ($(this).data('step') === currentStep + 1) {
                    // Next button clicked
                    if (currentStep < steps.length) {
                        steps.eq(currentStep - 1).hide();
                        steps.eq(currentStep).show();
                        currentStep++;
                    }
                } else if ($(this).data('step') === currentStep - 1) {
                    // Previous button clicked
                    if (currentStep > 1) {
                        steps.eq(currentStep - 1).hide();
                        steps.eq(currentStep - 2).show();
                        currentStep--;
                    }
                }
            });

            form.on('submit', function (e) {
                e.preventDefault();
                // Handle form submission, e.g., AJAX request or form data processing
                // Display a success message in Step 4
                steps.eq(currentStep - 1).hide();
                steps.eq(currentStep).show();
            });
        });
    </script>
<script>
  $(document).ready(function(){
            $(".close_model").on("click",function(){
            $('#myModal').modal('hide');
            })
          });


        // $(document).ready(function () {
        //     setTimeout(function () {
        //         $('#myModal').modal('show');
        //     }, 1000);
        // });
  </script>

<script>
function animateFrom(t, e) {
    var n = 100 * (e = e || 1);
    t.style.transform = "translate(0px, " + n + "px)", t.style.opacity = "0", gsap.fromTo(t, {
        x: 0,
        y: n,
        autoAlpha: 0
    }, {
        duration: 3,
        x: 0,
        y: 0,
        autoAlpha: 1,
        ease: "expo",
        overwrite: "auto"
    })
}

function hide(t) {
    gsap.set(t, {
        autoAlpha: 0
    })
}
document.addEventListener("DOMContentLoaded", function() {
    gsap.registerPlugin(ScrollTrigger),
        gsap.utils.toArray(".scrollTrigger").forEach(function(t) {
            // hide(t)
            ScrollTrigger.create({
                trigger: t,
                onEnter: function() {
                    animateFrom(t)
                },
                onEnterBack: function() {
                    animateFrom(t, -1)
                },
                onLeave: function() {
                    // hide(t)
                }
            })
        })
});
</script>

 <script>
    /*wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();*/
    /*document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };*/
  </script>

 <script type="text/javascript">
     (function() {
  var Util,
    __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };

  Util = (function() {
    function Util() {}

    Util.prototype.extend = function(custom, defaults) {
      var key, value;
      for (key in custom) {
        value = custom[key];
        if (value != null) {
          defaults[key] = value;
        }
      }
      return defaults;
    };

    Util.prototype.isMobile = function(agent) {
      return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(agent);
    };

    return Util;

  })();

  this.WOW = (function() {
    WOW.prototype.defaults = {
      boxClass: 'wow',
      animateClass: 'animated',
      offset: 0,
      mobile: true
    };

    function WOW(options) {
      if (options == null) {
        options = {};
      }
      this.scrollCallback = __bind(this.scrollCallback, this);
      this.scrollHandler = __bind(this.scrollHandler, this);
      this.start = __bind(this.start, this);
      this.scrolled = true;
      this.config = this.util().extend(options, this.defaults);
    }

    WOW.prototype.init = function() {
      var _ref;
      this.element = window.document.documentElement;
      if ((_ref = document.readyState) === "interactive" || _ref === "complete") {
        return this.start();
      } else {
        return document.addEventListener('DOMContentLoaded', this.start);
      }
    };

    WOW.prototype.start = function() {
      var box, _i, _len, _ref;
      this.boxes = this.element.getElementsByClassName(this.config.boxClass);
      if (this.boxes.length) {
        if (this.disabled()) {
          return this.resetStyle();
        } else {
          _ref = this.boxes;
          for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            box = _ref[_i];
            this.applyStyle(box, true);
          }
          window.addEventListener('scroll', this.scrollHandler, false);
          window.addEventListener('resize', this.scrollHandler, false);
          return this.interval = setInterval(this.scrollCallback, 50);
        }
      }
    };

    WOW.prototype.stop = function() {
      window.removeEventListener('scroll', this.scrollHandler, false);
      window.removeEventListener('resize', this.scrollHandler, false);
      if (this.interval != null) {
        return clearInterval(this.interval);
      }
    };

    WOW.prototype.show = function(box) {
      this.applyStyle(box);
      return box.className = "" + box.className + " " + this.config.animateClass;
    };

    WOW.prototype.applyStyle = function(box, hidden) {
      var delay, duration, iteration;
      duration = box.getAttribute('data-wow-duration');
      delay = box.getAttribute('data-wow-delay');
      iteration = box.getAttribute('data-wow-iteration');
      return box.setAttribute('style', this.customStyle(hidden, duration, delay, iteration));
    };

    WOW.prototype.resetStyle = function() {
      var box, _i, _len, _ref, _results;
      _ref = this.boxes;
      _results = [];
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        box = _ref[_i];
        _results.push(box.setAttribute('style', 'visibility: visible;'));
      }
      return _results;
    };

    WOW.prototype.customStyle = function(hidden, duration, delay, iteration) {
      var style;
      style = hidden ? "visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;" : "visibility: visible;";
      if (duration) {
        style += "-webkit-animation-duration: " + duration + "; -moz-animation-duration: " + duration + "; animation-duration: " + duration + ";";
      }
      if (delay) {
        style += "-webkit-animation-delay: " + delay + "; -moz-animation-delay: " + delay + "; animation-delay: " + delay + ";";
      }
      if (iteration) {
        style += "-webkit-animation-iteration-count: " + iteration + "; -moz-animation-iteration-count: " + iteration + "; animation-iteration-count: " + iteration + ";";
      }
      return style;
    };

    WOW.prototype.scrollHandler = function() {
      return this.scrolled = true;
    };

    WOW.prototype.scrollCallback = function() {
      var box;
      if (this.scrolled) {
        this.scrolled = false;
        this.boxes = (function() {
          var _i, _len, _ref, _results;
          _ref = this.boxes;
          _results = [];
          for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            box = _ref[_i];
            if (!(box)) {
              continue;
            }
            if (this.isVisible(box)) {
              this.show(box);
              continue;
            }
            _results.push(box);
          }
          return _results;
        }).call(this);
        if (!this.boxes.length) {
          return this.stop();
        }
      }
    };

    WOW.prototype.offsetTop = function(element) {
      var top;
      top = element.offsetTop;
      while (element = element.offsetParent) {
        top += element.offsetTop;
      }
      return top;
    };

    WOW.prototype.isVisible = function(box) {
      var bottom, offset, top, viewBottom, viewTop;
      offset = box.getAttribute('data-wow-offset') || this.config.offset;
      viewTop = window.pageYOffset;
      viewBottom = viewTop + this.element.clientHeight - offset;
      top = this.offsetTop(box);
      bottom = top + box.clientHeight;
      return top <= viewBottom && bottom >= viewTop;
    };

    WOW.prototype.util = function() {
      return this._util || (this._util = new Util());
    };

    WOW.prototype.disabled = function() {
      return !this.config.mobile && this.util().isMobile(navigator.userAgent);
    };

    return WOW;

  })();

}).call(this);


wow = new WOW(
  {
    animateClass: 'animated',
    offset: 100
  }
);
wow.init();

 </script>
<script>
AOS.init();
</script>
<script> configObj = {"buttonD":"M11.384 13.333h9.232c.638 0 .958.68.505 1.079l-4.613 4.07c-.28.246-.736.246-1.016 0l-4.613-4.07c-.453-.399-.133-1.079.505-1.079z","buttonT":"translate(-1028 -172) translate(832 140) translate(32 32) translate(164) matrix(1 0 0 -1 0 32)","shadowSize":"none","roundnessSize":"999px","buttonDToBottom":"32px","buttonDToRight":"32px","selectedBackgroundColor":"#ff0a0a","selectedIconColor":"#f9fafa","buttonWidth":"48px","buttonHeight":"48px","svgWidth":"40px","svgHeight":"40px"};function createButton(obj, pageSimulator) {    const body = document.querySelector("body");    backToTopButton = document.createElement("span");    backToTopButton.classList.add("softr-back-to-top-button");    backToTopButton.id = "softr-back-to-top-button";    pageSimulator      ? pageSimulator.appendChild(backToTopButton)      : body.appendChild(backToTopButton);    backToTopButton.style.width = obj.buttonWidth;    backToTopButton.style.height = obj.buttonHeight;    backToTopButton.style.marginRight = obj.buttonDToRight;    backToTopButton.style.marginBottom = obj.buttonDToBottom;    backToTopButton.style.borderRadius = obj.roundnessSize;    backToTopButton.style.boxShadow = obj.shadowSize;    backToTopButton.style.color = obj.selectedBackgroundColor;    backToTopButton.style.backgroundColor = obj.selectedBackgroundColor;    pageSimulator ? backToTopButton.style.position = "absolute" : backToTopButton.style.position = "fixed";    backToTopButton.style.outline = "none";    backToTopButton.style.bottom = "0px";    backToTopButton.style.right = "0px";    backToTopButton.style.cursor = "pointer";    backToTopButton.style.textAlign = "center";    backToTopButton.style.border = "solid 2px currentColor";    backToTopButton.innerHTML =      '<svg class="back-to-top-button-svg" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" > <g fill="none" fill-rule="evenodd"> <path d="M0 0H32V32H0z" transform="translate(-1028 -172) translate(832 140) translate(32 32) translate(164) matrix(1 0 0 -1 0 32)" /> <path class="back-to-top-button-img" fill-rule="nonzero" d="M11.384 13.333h9.232c.638 0 .958.68.505 1.079l-4.613 4.07c-.28.246-.736.246-1.016 0l-4.613-4.07c-.453-.399-.133-1.079.505-1.079z" transform="translate(-1028 -172) translate(832 140) translate(32 32) translate(164) matrix(1 0 0 -1 0 32)" /> </g> </svg>';    backToTopButtonSvg = document.querySelector(".back-to-top-button-svg");    backToTopButtonSvg.style.verticalAlign = "middle";    backToTopButtonSvg.style.margin = "auto";    backToTopButtonSvg.style.justifyContent = "center";    backToTopButtonSvg.style.width = obj.svgWidth;    backToTopButtonSvg.style.height = obj.svgHeight;    backToTopButton.appendChild(backToTopButtonSvg);    backToTopButtonImg = document.querySelector(".back-to-top-button-img");    backToTopButtonImg.style.fill = obj.selectedIconColor;    backToTopButtonSvg.appendChild(backToTopButtonImg);    backToTopButtonImg.setAttribute("d", obj.buttonD);    backToTopButtonImg.setAttribute("transform", obj.buttonT);        if(!pageSimulator) {      backToTopButton.style.display = "none";      window.onscroll = function() {        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {          backToTopButton.style.display = "block";        } else {          backToTopButton.style.display = "none";        }      };        backToTopButton.onclick = function() {        document.body.scrollTop = 0;        document.documentElement.scrollTop = 0;      };    }  };document.addEventListener("DOMContentLoaded", function() { createButton(configObj, null); });</script>
</body>
</html>