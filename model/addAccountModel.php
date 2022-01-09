<?php

if (isset($_POST["submitAccount"])){

    $submitBtn = array_pop($_POST);


    // foreach ($_POST as $value){
    //     empty($value) ?
    //          $error = "<aside><p class='p-3 mb-2 bg-danger text-white text-center'>Vous devez remplir tous les champs pour ajouter un compte !</p></aside>" :
    //          $datas[] = htmlspecialchars($value);
    // }


    foreach ($_POST as $value){
        if (empty($value)){
            $error = "<aside><p class='p-3 mb-2 bg-danger text-white text-center'>Vous devez remplir tous les champs pour ajouter un compte !</p></aside>";
            $validate = false;
        } else {
            var_dump($value);
            $datas[] = htmlspecialchars($value);
            $validate = true;
        }
    }



    if ($validate && $validate2){
        $date = date("Y-m-d");
        array_push($datas, $date); 
        var_dump($datas);


        // echo "<meta http-equiv='refresh' content='0'>";

        // $validate = false;
        // $validate2 = false;
        // $_SESSION["newAccount"] = $datas;
        // header("Refresh: 0");
    } 
    // else {
    //     $error = "<aside><p class='p-3 mb-2 bg-danger text-white text-center'>Données érronnées</p></aside>";
    // }
    // var_dump($datas);
    
    // $_SESSION["newAccount"] = $datas;


    // à modifier
}

?>
<?php
// if(intval($_POST["Amount"]) === 0){
    //     $error = "<aside><p class='p-3 mb-2 bg-danger text-white text-center'>Données érronnées</p></aside>";
    //     $validate = false;
    // } else {
    //     $validate = true;
    // }
    // (count($_POST) !== count($value))

    // if($datas) {
    //     // var_dump($datas);
    //     if (intval($datas[1]) === 0) {
    //         $error = "<aside><p class='p-3 mb-2 bg-danger text-white text-center'>Données érronnées</p></aside>";
    //         $validate2 = false;
    //     } else {
    //         $validate2 = true;
    //     }
    // }   


    // if (is_array($datas) && intval($_POST["Amount"]) > 0){
    //     $date = date("Y-m-d");
    //     array_push($datas, $date);
    // } else {
    //     $error = "<aside><p class='p-3 mb-2 bg-danger text-white text-center'>Données érronnées</p></aside>";
    // }
    // $date = date("Y-m-d");
    // array_push($datas, $date);
    // var_dump($datas);
    // echo $datas[1];
    // if (is_array($datas) && count($datas) === count($_POST) && isset($validate)){
    //     $date = date("Y-m-d");
    //     array_push($datas, $date); 
    //     var_dump($datas);

    // }

?>