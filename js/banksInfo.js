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

    let table = document.querySelector("table");

    let tableHeader = document.createElement("tr");
    tableHeader.setAttribute("id","firstRow");
    tableHeader.innerHTML = "<th>Banque</th>";
    let firstRow = Object.keys(Object.entries(banksData)[0][1]);
    getBanksValues(table, tableHeader, firstRow); // first row of table


    let interest = document.createElement("tr");
    interest.innerHTML = "<th>Société Générale</th>";
    let sgBank = Object.values(Object.entries(banksData)[0][1]);
    getBanksValues(table, interest, sgBank); // second row


    
    let folderCost = document.createElement("tr");
    folderCost.innerHTML = "<th>BNP Paribas</th>";
    let bnpBank = Object.values(Object.entries(banksData)[1][1]);
    getBanksValues(table, folderCost, bnpBank); // third row


    let insuranceCost = document.createElement("tr");
    insuranceCost.innerHTML = "<th>Crédit Agricole</th>";
    let caBank = Object.values(Object.entries(banksData)[2][1]);
    getBanksValues(table, insuranceCost, caBank); // last row

}


function getBanksValues (table, getRow ,bankValues){
    for (let datas in bankValues){
        getRow.innerHTML += `<td>${bankValues[datas]}</td>`
    }
    table.append(getRow);
    return table;
}




