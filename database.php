<?php

$server = 'localhost:3306';
$username = 'root';
$password = 'admin123$';
$database = 'colegiodb';

try {
  $conn =  mysqli_connect(
                "localhost:3306","root","admin123$");
        
        if (!$conn) {
            exit('Connect Error (' . mysqli_connect_errno() . ') '
                   . mysqli_connect_error());
        }
        //set the default client character set 
        mysqli_set_charset($conn, 'utf-8');

        // estableciendo la BDD
        mysqli_select_db($conn, "colegiodb");       
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}
?>