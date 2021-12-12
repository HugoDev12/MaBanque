
$("#Open").click(function(){

    let accountLayer = $('<div></div>').attr('id','Account').addClass('d-flex justify-content-center align-items-center flex-column')
    .append(`
        <div id='Form'> 
        <aside><button class='btn btn-info' id='closeBtn'>Retour</button></aside>
            <form id='formContent' class='column' action='index.php' method='post' autocomplete='off'>
                <div class='col-md-4'>
                    <label for='accountName' class='form-label'>Nom du compte :</label>
                    <input type='text' class='form-control' id='accountName' name='accountName'/>
                </div>
                <div class='col-md-4'>
                    <label for='accountNumber' class='form-label'>Numéro :</label>
                    <input type='text' class='form-control' id='accountNumber' name='accountNumber'/>
                </div>
                <div class='col-md-4'>
                    <label for='Owner' class='form-label'>Propriétaire :</label>
                    <div class='input-group has-validation'>
                    <input type='text' class='form-control' id='Owner' name='Owner'/>
                    </div>
                </div>
                <div class='col-md-3'>
                    <label for='Amount' class='form-label'>Montant :</label>
                    <input type='text' class='form-control' id='Amount' name='Amount'/>
                </div>
                <div class='col-md-3'>
                    <label for='lastOperation' class='form-label'>Dernière opération :</label>
                    <input type='text' class='form-control' id='lastOperation' name='lastOperation'/>
                </div>
                <div class='col-md-3'>
                    <button class='btn btn-primary' type='submit' name='submit' id='submitBtn'>Ajouter</button>
                </div>
            </form>
        </div>
    `);


    

    $('main').append(accountLayer);

    // $("#closeBtn").click(function(){
    //     console.log("test");
    //     $('main').remove(accountLayer);  ici
    // })
})





// let letters = $("#accountName","#Owner");

// $("#accountName").change(function(e) {
//     console.log(e.target.value);
//     console.log("test");
//     let name = e.target.value;
//     if (name.match(/(^\s|[!@#$%^&*(),.?":{}|<>])/g)) {
//         $(this).css('border','1px solid red');
//         $("#submitBtn").attr("disabled",true);
//     }
// })

{/* <div class='invalid-feedback'>
Please select a valid state.
</div> */}





// id='validationCustomUsername' aria-describedby='inputGroupPrepend' 

{/* <div class='col-12'>
<div class='form-check'>
<input class='form-check-input' type='checkbox' value='' id='invalidCheck' required/>
<label class='form-check-label' for='invalidCheck'>
Agree to terms and conditions
</label>
<div class='invalid-feedback'>
    You must agree before submitting.
</div>
</div>
</div> */}