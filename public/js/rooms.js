// scroll height
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
} 

// fixed navbar
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");

// hide/show logo
$(window).scroll(function() {
  if ($(this).scrollTop() > 0) {
    $('#logo').hide();
  } else {
    $('#logo').show();
  }
});

/* rooms */
$('.rooms').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1000,
  dots: true,
  infinite: true,
  responsive: 
  [
  {
    breakpoint: 1024,
    settings: {
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    dots: true
    }
  },
  {
    breakpoint: 600,
    settings: {
    slidesToShow: 2,
    slidesToScroll: 1
    }
  },
  {
    breakpoint: 480,
    settings: {
    slidesToShow: 1,
    slidesToScroll: 1
    }
  }
  ]
  
});

/* products */
$('.products').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1000,
  dots: true,
  infinite: true,
  responsive: 
  [
  {
    breakpoint: 1024,
    settings: {
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    dots: true
    }
  },
  {
    breakpoint: 600,
    settings: {
    slidesToShow: 2,
    slidesToScroll: 1
    }
  },
  {
    breakpoint: 480,
    settings: {
    slidesToShow: 1,
    slidesToScroll: 1
    }
  }
  ]
  
});