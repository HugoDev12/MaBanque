let httpRequest = new XMLHttpRequest();
httpRequest.onreadystatechange = function() {
    if(httpRequest.readyState === XMLHttpRequest.DONE){
        if(httpRequest.status === 200){  
            let securityAlert = JSON.parse(httpRequest.responseText); 
                window.addEventListener("load", securityText(securityAlert)); // Event on loading's page                         
        } else {console.log("une erreur est survenue");}
    } else {console.log("chargement en cours");}
}

httpRequest.open("GET", "datas (js and json)/security.json"); // Get the content to display from json file
httpRequest.send();



function securityText(securityAlert){

    let layer = document.createElement("div");
    layer.setAttribute("id", "onload");
    layer.classList.add("d-flex","align-items-center","justify-content-center");
    layer.innerHTML =           // inner HTML with bootstrap classes with json file content
         `                      
            <section class="d-flex flex-column" id="blockAlert">
                <h2 class="text-center","mb-4">${securityAlert.title}</h2>
                <p>${securityAlert.content}</p>
                <button class="btn btn-primary align-self-end align-self-lg-center" id="toClose">
                J'ai compris
                </button>
            </section>  
        `;
    !sessionStorage.getItem("layerClick") && document.body.appendChild(layer);
    
    // Event on button's click
    document.getElementById("toClose").addEventListener("click", function () {
        sessionStorage.setItem("layerClick", true);
        document.querySelector("body").removeChild(layer);
    })
}

