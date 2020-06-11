<?php
header("Content-Type: application/json; charset=UTF-8");

// Call of config file
require_once("db_connection_config.php");

// Create MySql connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Query
$stmt = $conn->prepare("$query ORDER BY school_class");
$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);

// Output as json
echo json_encode($outp, JSON_UNESCAPED_UNICODE);
