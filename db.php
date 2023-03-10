<?php
$servername = "localhost";
$username = "root";
$password = "";
 $database = "mySite";

 // Create connection &// Check connection
        $conn = mysqli_connect($servername, $username, $password, $database );
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
         

         // // Create database
        // $sql = "CREATE DATABASE mySite";
        // if (mysqli_query($conn, $sql)) {
        // echo "Database created successfully";
        // } else {
        // echo "Error creating database: " . mysqli_error($conn);
        // }


        // sql to create table
// $sql = "CREATE TABLE signup (
// id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// user_name VARCHAR(255) NOT NULL UNIQUE,
// user_password VARCHAR(255) NOT NULL,
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if (mysqli_query($conn, $sql)) {
//   echo "Table signup created successfully";
// } else {
//   echo "Error creating table: " . mysqli_error($conn);
// }

// $errorMessage ="";
// $successMessage ="";




