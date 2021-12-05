
<?php 

function checkInputs($name, $number, $owner, $amount, $lastOperation) {

    $pattern = '/(^\s|[!@#$%^&*(),?"{}|<>])/i';
    if ((preg_match ($pattern, $name))
        || (preg_match ($pattern, $owner))
        || (preg_match ($pattern, $number))
        || (preg_match ($pattern, $amount))
        || (preg_match ($pattern, $lastOperation))) {

            echo "<h1 class='text-center text-danger'>données de formulaire invalides</h1>";

    } else {
        return "[
            'name' => '$name',
            'number' => '$number',
            'owner' => '$owner',
            'amount' => '$amount',
            'last_operation' => '$lastOperation'
            ],\n";
    }
    
}
?>