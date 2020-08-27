let cerrarimg = document.querySelectorAll(".cerrarimg")[0];
let abririmg = document.querySelectorAll(".abririmg")[0];
let modalimg = document.querySelectorAll(".modalimg")[0];

// Aparte

abririmg.addEventListener("click", function(e){
	e.preventDefault();

	setTimeout(function(){
		modalimg.style.visibility = "visible";	
	},0)
});

cerrarimg.addEventListener("click", function(e){
	e.preventDefault();

	setTimeout(function(){
		modalimg.style.visibility = "hidden";	
	},0)
});