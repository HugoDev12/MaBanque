let httpRequest = new XMLHttpRequest();
httpRequest.onreadystatechange = function() {
    if(httpRequest.readyState === XMLHttpRequest.DONE){
        if(httpRequest.status === 200){  
            let securityAlert = JSON.parse(httpRequest.responseText); 
                window.addEventListener("load", securityText(securityAlert)); // Evenement au chargement de la page                         
        } else {console.log("une erreur est survenue");}
    } else {console.log("chargement en cours");}
}

httpRequest.open("GET", "datas (js and json)/security.json"); // récupérer le contenu à afficher dans un fichier JSON
httpRequest.send();



function securityText(securityAlert){

    let layer = document.createElement("div");
    layer.setAttribute("id", "onload");
    layer.classList.add("d-flex","align-items-center","justify-content-center");
    layer.innerHTML =           // Contenu HTML avec classes Bootstrap et texte venant de JSON 
         `                      
            <section class="d-flex flex-column" id="blockAlert">
                <h2 class="text-center","mb-4">${securityAlert.title}</h2>
                <p>${securityAlert.content}</p>
                <button class="btn btn-primary align-self-end align-self-lg-center" id="toClose">
                J'ai compris
                </button>
            </section>  
        `;
    document.body.appendChild(layer);
    
    // Evenement au click du boutton
    document.getElementById("toClose").addEventListener("click", function () {
        document.querySelector("body").removeChild(layer);
    })
}

