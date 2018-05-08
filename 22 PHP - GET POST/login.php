<?php
sleep(2);
header("Content-Type: application/json; charset=UTF-8");
if (!empty($_REQUEST['pass1']) && !empty($_REQUEST['pass2'])){
    if ($_REQUEST['pass1'] == $_REQUEST['pass2']) {
        if (strlen($_REQUEST['pass1'])>=8){
            $response = [
                success => true,
                token => 'Ok'
            ];  
        }
    } else {
        $response = [
            success => false,
            error => 'Slaptažodžiai nesutampa'
        ];
    }
} else {
    $response = [
        success => false,
        error => 'Įveskite duomenis'
    ];
}

echo json_encode($response);

?>