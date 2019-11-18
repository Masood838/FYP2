<?php
include "dbconnect.php";
$id=$_GET["id"];
$table=$_GET["table"];
$page=$_GET["page"];
if(isset($id)&&isset($table)&&isset($page))
{
    $deletequrey = "DELETE FROM $table WHERE id = '$id'";
    mysqli_query($con, $deletequrey);
    header("Location: $page");
}
?>