/*******************************
 * COURS API CALL
 * 
 * ****************************/

 var token = "";
var params = {email:"admin@test.com", password:"test123"}
$.ajax({
	url: coursApiUrl + "login",
	method: "POST",
	data:params,
	success: function(response) {
		token = response["data"]["api_token"];
		console.log(token);
		$.ajax({
			url: coursApiUrl + "cours/details",
			method: "GET",
			headers: {
				"Authorization" : "Bearer " + token
			},
			success: function(response) {
				console.log(response);
				loadCours(response);
			}
		});
	}
});

function loadCours(data){
    let DEFAUT_CAT = "GENERAL";
    let html = "";
   for(let i = 0; i< data.length || i ==10; i++){
       let categorie = data[i]['categorie'] && data[i]['categorie'][0] ? data[i]['categorie'][0]['nom'] : DEFAUT_CAT;
       let adresse = data[i]['organisateur'] ? data[i]['organisateur']['adresse'] : "";
       html+= '<div class="card border-success mb-3 item active" style="max-width: 18rem;">'
       +'<div class="card-header bg-transparent border-success">'+categorie+'</div>'
       +'<div class="card-body text-success cours-body">'
        +'<h5 class="card-title">'+data[i]['titre']+'</h5>'
    +'<p class="card-text">'+data[i]['description']+'</p>'
  +'</div>'
  +'<div class="card-footer bg-transparent border-success">'
      +'<div>Debut : <span class="card-text"><small class="text-muted">Last updated 3 mins ago</small></span></div>'
      +'<div>Fin : <span class="card-text"><small class="text-muted">Last updated 3 mins ago</small></span></div>'
      +'<div>Lieu : <span class="card-text"><small class="text-muted">'+adresse+'</small></span></div>'
  +'</div>'
+'</div>'
   }
   console.log(html);
   $('#team-carousel').html(html);
   	// Image Carousel
	$("#team-carousel").owlCarousel({
	  slideSpeed : 300,
	  paginationSpeed : 400,
	  items : 4,
	  autoPlay: 3000,
	  stopOnHover : true,
	});

}
