<?php
session_start();
$DBserver = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname='mytiffin';


$conn = new mysqli($DBserver,$dbuser,$dbpassword,$dbname);
if($conn->connect_error){
	trigger_error('Database connection failed: '. $conn->connect_error);
}
else
//echo 'database connection successfull';
//  $sql="CREATE DATABASE shop";

//   if($conn->query($sql)==false)
// {
//  trigger_error('wrong sql'. $sql .$conn->error);
// }

// else
// echo 'Database created successful';
// $sql="CREATE TABLE customer(
//  id int not null auto_increment primary key,
//  FirstName varchar(255),
//  LastName varchar(255),
// Email varchar(255),
//  Password varchar(255),
//  Type varchar(255)
//  ) ";
// if($conn->query($sql)==false)
// {
// trigger_error('wrong sql'. $sql .$conn->connect_error);
// }

// else
// echo 'Database Table created successful';

?>