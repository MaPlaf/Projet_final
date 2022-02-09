// Change style of navbar on scroll

window.onscroll = function() {
 myFunction()
};

function myFunction(){
 var navbar = document.getElementById("myNavbar");
 if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
   navbar.className = "w3-navbar" + " w3-card-2" + " w3-animate-top" + " w3-white";
 } else {
   navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
 }
}


// Smooth Scroll

$(document).ready(function(){

	$("a.scroll").on('click', function(event) {
  
	  if (this.hash !== "") {
		event.preventDefault();
		
		var where = this.hash;
  
		$('html, body').animate({
		  scrollTop: $(where).offset().top
		}, 900, function(){
	 
		  window.location.hash = where;
		});
	  } 
	});
  });


// Full size on click

var images = document.querySelectorAll('img');

for(var i=0, len = images.length; i < len; i++){
    images[i].addEventListener('click', openModal(i));
	}

function openModal(i){

	let modal = document.getElementById("myModal");
	let img = document.getElementById("img" + i);
	let modalImg = document.getElementById("imgFullSize");

	img.onclick = function(){
		modal.style.display = "block";
		modalImg.src = this.src;
		}

	var close = document.getElementsByClassName("w3-closebtn")[0];

	close.onclick = function() { 
		modal.style.display = "none";
		}
}
  
  