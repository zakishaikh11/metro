<?php

// $db = "CREATE DATABASE myDB";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;}

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "Metro";

// $conn = mysqli_connect($servername,$username,$password,$database);
if(isset($_POST["submit"])){
$name = $_POST["Name"];
$city = $_POST["City"];
$station = $_POST["Station"];
$mobile = $_POST["mobile"];
$email= $_POST["email"];
$subject = $_POST["subject"];
$feedbackMsg = $_POST["feedbackMsg"];

echo "Thank you for your response";


// $sql = "CREATE TABLE Contact (
//   name VARCHAR(30) NOT NULL ,
//   city VARCHAR(10) NOT NULL,
//   station VARCHAR(30) NOT NULL,
//   mobile int(10) NOT NULL,
//   email VARCHAR(50) NOT NULL,
//   subject VARCHAR(30) NOT NULL,
//   feedbackMsg VARCHAR(50) NOT NULL
//   )";
//   $conn->query($sql);
}
?>