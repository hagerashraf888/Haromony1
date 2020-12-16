$(document).ready(function(){

    // slideToggle
    $(".open-r").click(function(){
        $(".rooms").slideToggle(1000)
    })

    $(".open-p").click(function(){
      $(".products").slideToggle(1000)
    })

  $(".open-ro").click(function(){
    $(".room").slideToggle(1000)
  })

  $(".open-pro").click(function(){
    $(".product").slideToggle(1000)
  })
})

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown menu if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  } 