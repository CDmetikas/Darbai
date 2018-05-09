<?php
require 'connectDB.php';
header('Content-Type: application/json');

$id = $_REQUEST['id'];

$sql = "DELETE FROM radars WHERE id=$id";

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