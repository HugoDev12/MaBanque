let httpRequest = new XMLHttpRequest();
httpRequest.onreadystatechange = function() {
    if(httpRequest.readyState === XMLHttpRequest.DONE){
        if(httpRequest.status === 200){  
            let banksData = JSON.parse(httpRequest.responseText);
                window.addEventListener("load", getTab(banksData));
        } else {console.log("une erreur est survenue");}
    } else {console.log("chargement en cours");}
}

httpRequest.open("GET", "datas (js and json)/banksInfo.json");
httpRequest.send();



function getTab(banksData) {

// ##################################   Création du tableau enfant de main  ################################ //
    let main = document.querySelector("main");
    let table = document.createElement("table");
    table.classList.add("table");
    main.appendChild(table);

// ##################################   Création de la première ligne enfant du tableau  ################################ //
    let tableHeader = document.createElement("tr");
    table.appendChild(tableHeader);

    let bankList = document.createElement("th");
    bankList.innerText = "Banque";
    tableHeader.appendChild(bankList);
    let firstRow;

// ##################################   Création des autres lignes enfant du tableau  ################################ //
    let interest = document.createElement("tr");
    interest.innerText = "Taux d'intérêt";
    let folderCost = document.createElement("tr");
    folderCost.innerText = "Frais de dossier";
    let insuranceCost = document.createElement("tr");
    insuranceCost.innerText = "Assurance bancaire";
    table.append(interest, folderCost, insuranceCost);
    let secondRow;
    let thirdRow;
    let lastRow;
    

// ##################################   Création des cellules enfants des lignes en parcourant l'objet JSON  ################################ //
    for (let banks in banksData){
        firstRow = document.createElement("th");
        firstRow.innerHTML += `<th>${banks}</th>`;
        tableHeader.append(firstRow);
        
        for (let value in banksData[banks]){
            if (value.includes("Taux")){
                secondRow = document.createElement("th");
                secondRow.innerHTML += `<th>${banksData[banks][value]}</th>`;
                interest.append(secondRow);
            }
            if (value.includes("Frais")){
                thirdRow = document.createElement("th");
                thirdRow.innerHTML += `<th>${banksData[banks][value]}</th>`;
                folderCost.append(thirdRow);
            }
            if (value.includes("Assurance")){
                lastRow = document.createElement("th");
                lastRow.innerHTML += `<th>${banksData[banks][value]}</th>`;
                insuranceCost.append(lastRow);
            }
        }
    }
}


