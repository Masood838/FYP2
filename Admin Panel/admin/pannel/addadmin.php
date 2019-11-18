<?php
include 'header.php';
if(isset($_POST['submit']) != "")
{
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$query = "INSERT INTO `admin`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
mysqli_query($con,$query);
$msg="Data Successfully Inserted";
header('location: alladmin.php');
}
?>
<div class="page-wrapper">
    <h2 class="text-danger" style="margin-left: 10%;"><strong><u>Add New Admin</u></strong></h2>
    <div class="container">
        <form class="" style="width: 50%;margin-left: 3%" method="post" action="">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="text" class="form-control" name="password" placeholder="Password">
            </div>
            
            <button type="submit" id="submit" name="submit" onclick="addrecord()" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
<?php include 'footer.php';?>