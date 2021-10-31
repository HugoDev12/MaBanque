
let main = document.querySelector("main");
main.classList.add("container", "d-flex", "flex-wrap","justify-content-center","justify-content-lg-evenly");

fetch("https://oc-jswebsrv.herokuapp.com/api/articles")

.then(function(response) {
    if(response.ok){
        return response.json().then(function(response){
            Object.entries(response).forEach(([key, value]) => {
                let article = document.createElement("article");
                article.innerHTML +=`<h2>${value.contenu}</h2><p>${value.id}<br>${value.titre}</p>`; // Object.keys(value)[...]) [id, titre, contenu]  Si on veut récupérer les clés
                article.classList.add("m-5");
                main.appendChild(article);
                });
        })
    } else {
        alert("Erreur 404 !");
    } 
})
.catch(function(error){
    alert(error.message);
})
