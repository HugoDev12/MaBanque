


let httpRequest = new XMLHttpRequest();
httpRequest.onreadystatechange = function() {
    if(httpRequest.readyState === XMLHttpRequest.DONE){
        if(httpRequest.status === 200){  
            let securityAlert = JSON.parse(httpRequest.responseText);
                window.addEventListener("load", securityText(securityAlert));                           
        } else {console.log("une erreur est survenue");}
    } else {console.log("chargement en cours");}
}

httpRequest.open("GET", "datas (js and json)/security.json");
httpRequest.send();



function securityText(securityAlert){

    let frontWindow = document.createElement("div");
    let message = document.createElement("section");
    let title = document.createElement("h2");
    let text = document.createElement("p");
    let exit = document.createElement("button");

    frontWindow.setAttribute("id", "onload");
    frontWindow.classList.add("d-flex","align-items-center","justify-content-center");
    message.classList.add("d-flex","flex-column");
    exit.classList.add("btn","btn-primary","align-self-end","align-self-lg-center");
    title.classList.add("text-center","mb-4");
    message.setAttribute("id", "blockAlert");
    title.innerText = securityAlert.title;
    text.innerText = securityAlert.content;
    exit.innerText = "J'ai compris";

    document.body.appendChild(frontWindow);
    frontWindow.appendChild(message);
    message.appendChild(title);
    message.appendChild(text);
    message.appendChild(exit);

    exit.addEventListener("click", function () {
        document.querySelector("body").removeChild(frontWindow);
    })
}

