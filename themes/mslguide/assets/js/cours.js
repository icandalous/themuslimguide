/*******************************
 * COURS API CALL
 * 
 * ****************************/

 var token = "";
$.ajax({
	url: "/quran/cours/login",
	method: "GET",
	success: function(response) {
		token = response["data"]["api_token"];
		console.log(token);
		$.ajax({
			url: "quran/cours/courant/"+token,
			method: "GET",
			success: function(response) {
				console.log(response);
				loadCours(response);
			}
		});
	}
});

function loadCours(data){
    let DEFAUT_CAT = "GENERAL";
    let html = new StringBuilder();
   for(let i = 0; i< data.length || i ==10; i++){
       html.append(cours_preview(data[0]));
   }
   console.log(html.toString());
   $("#loader-cours").hide();
   $('#cours-carousel').html(html.toString());
   	// Image Carousel
	$("#cours-carousel").owlCarousel({
	  slideSpeed : 300,
	  paginationSpeed : 400,
	  items : 4,
	  autoPlay: 3000,
	  stopOnHover : true,
	});

}
