$(document).ready(function(){
    $(window).scroll(function(){
        // sticky navbar on scroll script
        if(this.scrollY > 20){
            $('.navbar').addClass("sticky");
        }else{
            $('.navbar').removeClass("sticky");
        }
        
        // scroll-up button show/hide script
        if(this.scrollY > 500){
            $('.scroll-up-btn').addClass("show");
        }else{
            $('.scroll-up-btn').removeClass("show");
        }
    });

    // slide-up script
    $('.scroll-up-btn').click(function(){
        $('html').animate({scrollTop: 0});
        // removing smooth scroll on slide-up button click
        $('html').css("scrollBehavior", "auto");
    });

    $('.navbar .menu li a').click(function(){
        // applying again smooth scroll on menu items click
        $('html').css("scrollBehavior", "smooth");
    });

    // toggle menu/navbar script
    $('.menu-btn').click(function(){
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });
    // owl carousel script
    $('.carousel').owlCarousel({
        margin: 20,
        loop: true,
        autoplayTimeOut: 2000,
        autoplayHoverPause: true,
        responsive: {
            0:{
                items: 1,
                nav: false
            },
            600:{
                items: 2,
                nav: false
            },
            1000:{
                items: 3,
                nav: false
            }
        }
    });
});
function triggerClick(e) {
    document.querySelector('#profileImage').click();
  }
  function displayImage(e) {
    if (e.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e){
        document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
      }
      reader.readAsDataURL(e.files[0]);
    }
  }

	$(document).ready(function(){
        $("#news-slider").owlCarousel({
            items:3,
            navigation:true,
            navigationText:["",""],
            autoPlay:true
        });
    });
function myFunction1() {
var dots = document.getElementById("dots1");
var moreText = document.getElementById("more1");
var btnText = document.getElementById("myBtn1");

if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
    } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
    }
}
function myFunction2() {
var dots = document.getElementById("dots2");
var moreText = document.getElementById("more2");
var btnText = document.getElementById("myBtn2");

if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
    } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
    }
}
$(document).ready(function () {
    $("#myBtn").click(function () {
        $(this).prev().slideToggle();
        if ($(this).text() == "Read more") {
            $(this).text("Read Less");
        } else {
            $(this).text("Read More");
        }
    });
});
function myFunction3() {
    var dots = document.getElementById("dots3");
    var moreText = document.getElementById("more3");
    var btnText = document.getElementById("myBtn3");
    
    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more"; 
        moreText.style.display = "none";
        } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less"; 
        moreText.style.display = "inline";
        }
    }
    $(document).ready(function () {
        $("#myBtn").click(function () {
            $(this).prev().slideToggle();
            if ($(this).text() == "Read more") {
                $(this).text("Read Less");
            } else {
                $(this).text("Read More");
            }
        });
    });
function myFunction4() {
    var dots = document.getElementById("dots4");
    var moreText = document.getElementById("more4");
    var btnText = document.getElementById("myBtn4");
    
    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more"; 
        moreText.style.display = "none";
        } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less"; 
        moreText.style.display = "inline";
        }
    }
    $(document).ready(function () {
        $("#myBtn").click(function () {
            $(this).prev().slideToggle();
            if ($(this).text() == "Read more") {
                $(this).text("Read Less");
            } else {
                $(this).text("Read More");
            }
        });
    });
    function myFunction5() {
    var dots = document.getElementById("dots5");
    var moreText = document.getElementById("more5");
    var btnText = document.getElementById("myBtn5");

    if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
    } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
    }
    }
    $(document).ready(function () {
    $("#myBtn").click(function () {
        $(this).prev().slideToggle();
        if ($(this).text() == "Read more") {
            $(this).text("Read Less");
        } else {
            $(this).text("Read More");
        }
    });
    });
function myFunction6() {
var dots = document.getElementById("dots6");
var moreText = document.getElementById("more6");
var btnText = document.getElementById("myBtn6");

    if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
    } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
    }
    }
    $(document).ready(function () {
    $("#myBtn").click(function () {
        $(this).prev().slideToggle();
        if ($(this).text() == "Read more") {
            $(this).text("Read Less");
        } else {
            $(this).text("Read More");
        }
    });
});