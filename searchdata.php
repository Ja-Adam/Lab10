<?php
$user = 'root';
$pass = ''; 
$dbName = 'lab_10'; 
$host = 'localhost';                    
$conn = new mysqli($host, $user, $pass, $dbName);                                       //DB-руу холбох

if ($conn->connect_error) {                                                             
    die("Холболт амжилтгүй: " . $conn->connect_error);
}

if(isset($_GET['q'])) {
  $searchQuery = $_GET['q'];
  
  

  
  // Send JSON
  header('Content-Type: application/json');
  echo json_encode($results);
} else {
  echo 'No search query provided';
}
?>