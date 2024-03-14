<?php
$serverName = "localhost";
$username = "root";
$password = "";
$dataBase = "chatapp";
$tableName = "admin";


$conn  = mysqli_connect($serverName,$username,$password,$dataBase);

//creating Table
// $sql = "CREATE TABLE $dataBase . $tableName (
//     `s_no` int primary key AUTO_INCREMENT,
//     `name` text not null,
//     `email` text unique not null,
//     `username` text unique not null,
//     `password` text not null
//     );";

// $result = mysqli_query($conn,$sql);


?>