<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "ecom";
$con = mysqli_connect ("$host","$user","$password","$database");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

