let menu = document.querySelector('#menu-bar');
let header = document.querySelector('header');

function myFunction(x) {
    x.classList.toggle("fa-times");
    header.classList.toggle('active');
  }

  window.onscroll = () =>{
    menu.classList.remove('fa-times');
    header.classList.remove('active');
};


var typed = new Typed('.typing-text', {
  strings : ['web designer', 'digital marketer','Front end developer', 'graphic designer','web designer',],
  loop : true,
  typeSpeed : 150
});
 
VanillaTilt.init(document.querySelectorAll('.tilt'),{
  max:25
});
//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}