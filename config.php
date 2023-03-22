<?php

include 'vendor.autoload.php';
$config = require 'config.php'; 

$server_name = ''localhost'';
$user_name = ''username'';
$password = ''password'';


//Povezi me s bazom
$connection = mysqli_connection($server_name, $user_name, $password)

//Provjeri vezu
if (!$connection) {
    echo("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";
  ?>
