<?php
require 'connectDB.php';
header("Content-Type: application/json; charset=UTF-8");

$date = $_REQUEST['date'];
$number = $_REQUEST['number'];
$distance = $_REQUEST['distance'];
$time = $_REQUEST['time'];


if (!empty($date) && !empty($number) && !empty($distance) && !empty($time)){

    $sql = "INSERT INTO radars (date, number, distance, time)
    VALUES ('$date', '$number', '$distance', '$time')";
    
    if ($conn->query($sql) === TRUE) {
        $response = [
            success => true,
            token => 'Ok'
        ]; 
    } else {
        $response = [
            success => false,
            error => $conn->error
        ];
    }
} else {
    $response = [
        success => false,
        error => 'Įveskite visus duomenis'
    ];
}

echo json_encode($response);
$conn->close();

?>