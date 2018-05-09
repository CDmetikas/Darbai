 <?php 
  require 'connectDB.php';
  header('Content-Type: application/json');
// ______________________________________________________________________________________
  $sql = 'SELECT * FROM radars';
  $result = $conn->query($sql); 
// ______________________________________________________________________________________
  $autos = [];

    // output data of each row
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $autos[] = $row;
      }
      
  } else {
    echo "0 results";
  }
  $conn->close();
 
  echo json_encode([
    'success' => true,
    'data' => $autos
    ]);
 
 
 ?>