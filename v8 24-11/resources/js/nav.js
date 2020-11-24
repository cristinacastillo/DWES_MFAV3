window.onload=function(){
	let mainNav = document.getElementById("js-menu");

	let navBarToggle = document.getElementById("js-navbar-toggle");
	console.log('hola');

	navBarToggle.addEventListener("click", function() {
	  mainNav.classList.toggle("active");
	});
}