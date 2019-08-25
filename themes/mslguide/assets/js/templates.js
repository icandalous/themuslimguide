function cours_preview(data){
  let categorie = data['categorie'] && data['categorie'][0] ? data['categorie'][0]['nom'] : DEFAUT_CAT;
  let adresse = data['organisateur'] ? data['organisateur']['adresse'] : "";
  
 return `<div class="card border-success mb-3 item active" style="max-width: 18rem;">
            <div class="card-header bg-transparent border-success">${categorie}</div>
            <div class="card-body text-success cours-body">
                <h5 class="card-title">${data['titre']}</h5>
                <p class="card-text">${data['description']}</p>
            </div>
            <div class="card-footer bg-transparent border-success">
                <div>Debut : <span class="card-text"><small class="text-muted">Last updated 3 mins ago</small></span></div>
                <div>Fin : <span class="card-text"><small class="text-muted">Last updated 3 mins ago</small></span></div>
                <div>Lieu : <span class="card-text"><small class="text-muted">${adresse}</small></span></div>
            </div>
        </div>`;

}