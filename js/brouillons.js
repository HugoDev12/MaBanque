



    // table.innerHTML += "<tr id='tHead'><th>Banque</th></tr>";

    // Object.entries(banksData).forEach(([key, value]) => {
    //     let tableHeader = document.createElement("th");
    //     tableHeader.innerHTML += key;
    //     document.getElementById("tHead").append(tableHeader);
    // })


    
    

    // console.log(Object.keys(Object.entries(banksData)[0][1]));

    // Object.entries(banksData).forEach(([key, value]) => {
    //     console.log();

        // let allValues = [];

        // for (let eachValue in value){
        //     // console.log(value[eachValue]);
        //     console.log(eachValue);
        //     // allValues.push(value[eachValue]);
        //     // console.log(allValues);

        //     // eachValue === 
        //     document.querySelector("table").innerHTML += `<th>${value[eachValue]}</th>`;


        // }
        // console.log(Object.values(value.map(x => [x])));
        // document.querySelector("table").innerHTML += `<tr><th>${Object.values(value)}<th></tr>`;
    // })
    // console.log(document.querySelector("table").children);

// // ##################################   Création du tableau enfant d'une div container (elle même enfant du main) ################################ //
//     let main = document.querySelector("main");
//     let div = document.createElement("div");
//     div.classList.add("container","table-responsive");
//     let table = document.createElement("table");
//     table.classList.add("table");
//     main.appendChild(div);
//     div.appendChild(table);

// // ##################################   Création de la première ligne enfant du tableau  ################################ //
//     let tableHeader = document.createElement("tr");
//     tableHeader.classList.add("pb-5");
//     let bankList = document.createElement("th");
//     bankList.innerText = "Banque";
//     tableHeader.appendChild(bankList);
//     let firstRow;

// // ##################################   Création des autres lignes enfant du tableau  ################################ //
//     let interest = document.createElement("tr");
//     interest.innerText = "Taux d'intérêt";
//     interest.classList.add("rowTitle");
//     let folderCost = document.createElement("tr");
//     folderCost.innerText = "Frais de dossier";
//     folderCost.classList.add("rowTitle");
//     let insuranceCost = document.createElement("tr");
//     insuranceCost.innerText = "Assurance bancaire";
//     insuranceCost.classList.add("rowTitle");
//     table.append(tableHeader, interest, folderCost, insuranceCost);

// // ##################################   Création des cellules enfants des lignes en parcourant l'objet JSON banksinfo  ################################ //
//     for (let banks in banksData){
//         firstRow = document.createElement("th");
//         firstRow.innerHTML += `<th>${banks}</th>`;
//         tableHeader.append(firstRow);
        
//         for (let value in banksData[banks]){
//             if (value.includes("Taux")){
//                 let secondRow;
//                 secondRow = document.createElement("th");
//                 secondRow.innerHTML += `<th>${banksData[banks][value]}</th>`;
//                 interest.append(secondRow);
//             }
//             if (value.includes("Frais")){
//                 let thirdRow;
//                 thirdRow = document.createElement("th");
//                 thirdRow.innerHTML += `<th>${banksData[banks][value]}</th>`;
//                 folderCost.append(thirdRow);
//             }
//             if (value.includes("Assurance")){
//                 let lastRow;
//                 lastRow = document.createElement("th");
//                 lastRow.innerHTML += `<th>${banksData[banks][value]}</th>`;
//                 insuranceCost.append(lastRow);
//             }
//         }
//     }

// --##################################################################################################################//

let secondRow = getTableRow(row2, row2Values, "Société générale", 0);


function getTableRow (getRow, bankValues, bankName, bankIndex){
    getRow = document.createElement("tr");
    getRow.innerHTML = `<th>${bankName}</th>`;
    bankValues = Object.values(Object.entries(banksData)[bankIndex][1]);
    return getBanksValues(table, getRow, bankValues);
}

