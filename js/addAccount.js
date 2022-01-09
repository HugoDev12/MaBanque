
$("#Open").click(function(){

    let accountLayer = $('<div></div>').attr('id','Account').addClass('d-flex justify-content-center align-items-center flex-column')
    .append(`
    <div id='Form'>
        <aside><button class='btn btn-info' id='closeBtn'>Retour</button></aside>
        <form action="" method="post" id='formContent' autocomplete='off'>
            <div>
                <label for='accountName' class='form-label'>Nom du compte :</label>
                <input type='text' class='form-control' id='accountName' name='accountName' autocomplete='off'/>
            </div>
            <div>
                <label for='accountNumber' class='form-label'>Numéro :</label>
                <input type='text' class='form-control' id='accountNumber' name='accountNumber' autocomplete='off'/>
            </div>
            <div>
                <label for='Amount' class='form-label'>Montant :</label>
                <input type='text' class='form-control' id='Amount' name='Amount' autocomplete='off'/>
            </div>
            <div>
                <button class='btn btn-primary' type='submit' name='submitAccount' id='submitBtn'>Ajouter</button>
            </div>
        </form>
    </div>
    `);

    $('main').append(accountLayer);


    $("#closeBtn").click(function(){
        $("#Account").remove(); 
    })
})


// <div class='col-md-3'>
// <label for='lastOperation' class='form-label'>Dernière opération :</label>
// <input type='text' class='form-control' id='lastOperation' name='lastOperation' required/>
// </div>

{/* <div class='col-md-3'>
<label for='opDetails'>Dérnière opération :</label><br>
    <select id='opDetails' name='opDetails'>
        <option value='depot'>Dépôt</option>
        <option value='retrait'>Retrait</option>
    </select>
<label for='opAmount' class='form-label'>Montant :</label>
<input type='number' min='0' step='10' id='opAmount' name='opAmount' class='form-control'/>
</div> */}

{/* <div id='Form'>
    <aside><button class='btn btn-info' id='closeBtn'>Retour</button></aside>
    <form action="index.php" method="post" id='formContent' autocomplete='off'>
        <div>
            <label for='accountName' class='form-label'>Nom du compte :</label>
            <input type='text' class='form-control' id='accountName' name='accountName' required/>
        </div>
        <div>
            <label for='accountNumber' class='form-label'>Numéro :</label>
            <input type='text' class='form-control' id='accountNumber' name='accountNumber' required/>
        </div>
        <div>
            <label for='Owner' class='form-label'>Propriétaire(s) :</label>
            <input type='number' class='form-control' id='Owner' name='Owner' min='1' max='9' required/>
        </div>
        <div>
            <label for='Amount' class='form-label'>Montant :</label>
            <input type='text' class='form-control' id='Amount' name='Amount' required/>
        </div>
        <div>
            <button class='btn btn-primary' type='submit' name='submitAccount' id='submitBtn'>Ajouter</button>
        </div>
    </form>
</div>  */}


{/* <div id='Form'> 
<aside><button class='btn btn-info' id='closeBtn'>Retour</button></aside>
    <form id='formContent' class='column' action='index.php' method='post' autocomplete='off'>
        <div class='col-md-4'>
            <label for='accountName' class='form-label'>Nom du compte :</label>
            <input type='text' class='form-control' id='accountName' name='accountName' required/>
        </div>
        <div class='col-md-4'>
            <label for='accountNumber' class='form-label'>Numéro :</label>
            <input type='text' class='form-control' id='accountNumber' name='accountNumber' required/>
        </div>
        <div class='col-md-4'>
            <label for='Owner' class='form-label'>Propriétaire(s) :</label>
            <div class='input-group has-validation'>
            <input type='number' class='form-control' id='Owner' name='Owner' min='1' max='9' required/>
            </div>
        </div>
        <div class='col-md-3'>
            <label for='Amount' class='form-label'>Montant :</label>
            <input type='text' class='form-control' id='Amount' name='Amount' required/>
        </div>
        <div class='col-md-3'>
            <button class='btn btn-primary' type='submit' name='submitAccount' id='submitBtn'>Ajouter</button>
        </div>
    </form>
</div> */}