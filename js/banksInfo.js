
function makeTabHeader(table, banksData) {
    let tableHeader = document.createElement("tr");
    tableHeader.setAttribute("id","firstRow");
    let keys = Object.keys(banksData["Société générale"]);
    for(let value of keys) {
        tableHeader.innerHTML += "<th>" + value +"</th>";
    }
    table.append(tableHeader);  
}

function makeTableRow (table, bank){
    row = document.createElement("tr");
    // Make the cells
    for (let key in bank){
        row.innerHTML += `<td>${bank[key]}</td>`
    }
    table.append(row);    
}

let httpRequest = new XMLHttpRequest();
httpRequest.onreadystatechange = function() {
    if(httpRequest.readyState === XMLHttpRequest.DONE){
        if(httpRequest.status === 200){  
            let banksData = JSON.parse(httpRequest.responseText);
            let table = document.querySelector("table");
            makeTabHeader(table, banksData);
            for(let key in banksData) {
                makeTableRow(table, banksData[key]);
            }

        } else {console.log("une erreur est survenue");}
    } else {console.log("chargement en cours");}
}

httpRequest.open("GET", "datas (js and json)/banksInfo.json");
httpRequest.send();



// ########################################################################     Another method, (better)     ##################################################################  //
// // Generate each lines in the table, one line per json object
// function makeTableRows(stat) {
//     let table = document.getElementById("statTable");
//     // For each json object in stat
//     for(const data of stat) {
//       // Add a row to the table
//       let row = table.insertRow(-1);
//       // For each property in the current JSON object
//       for(prop in data) {
//         // Add a cell in the row with the value of the property as text
//         let cell = row.insertCell(-1);
//         cell.innerText = data[prop];
//       }
//     }
//   }