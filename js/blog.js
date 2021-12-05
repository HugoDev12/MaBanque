
let main = document.getElementById("blogMain");
main.classList.add("container-fluid", "d-flex", "flex-wrap","justify-content-center","justify-content-lg-evenly");

fetch("https://oc-jswebsrv.herokuapp.com/api/articles")

.then(function(response) {
    if(response.ok){
        return response.json().then(function(response){
            Object.entries(response).forEach(([key, value]) => {
                let article = document.createElement("article");
                article.innerHTML +=`<h2>${value.contenu}</h2><p>${value.id}<br>${value.titre}</p>`; // Object.keys(value)[...]) [id, titre, contenu]  to get keys
                article.classList.add("p-5","articleCards");
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
