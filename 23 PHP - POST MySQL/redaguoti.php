<?php
require 'connectDB.php';
header('Content-Type: application/json');

$id = $_REQUEST['id'];
$date = $_REQUEST['date'];
$number = $_REQUEST['number'];
$distance = $_REQUEST['distance'];
$time = $_REQUEST['time'];


$sql = "UPDATE radars SET date='$date', number='$number', distance='$distance', time='$time' WHERE id=$id";

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
echo json_encode($response);
$conn->close();

?>