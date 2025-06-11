<?php 
 
$host = "localhost";
$id = "root";
$pw = "111111";
$database = "kusuri_db";

try {
    $dsn = "mysql:host={$host};dbname={$database};charset=utf8mb4";
    $conn = new PDO($dsn, $id, $pw);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $conn->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  } catch(PDOException $e) {
    echo $e->getMessage();
  }
?>