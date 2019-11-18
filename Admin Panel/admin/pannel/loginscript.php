<?php
include 'dbconnect.php';
session_start();
if(isset($_SESSION['usr_name']))
{
header("location: index.php");
}
if (isset($_POST['btn-login'])) {

$usr_name = $_POST['username'];
$usr_pass = $_POST['password'];
$query = $con->query("SELECT * FROM admin WHERE `name`='$usr_name' or `email`='$usr_name'");
$row=$query->fetch_array();
$count = $query->num_rows;
if ($usr_pass == $row['password'] && $count == 1) {
$_SESSION['usr_name'] = $usr_name;
$_SESSION['usr_id'] = $row['id'];
$mag = "<div class='alert alert-danger'>
    <span class='glyphicon glyphicon-info-sign'></span> &nbsp; LOGIN
</div> ";
header("location: index.php");
} else {
$msg = "<div class='alert alert-danger'>
    <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
</div>";
header("Location: login.php");
}
$connect->close();
}
?>