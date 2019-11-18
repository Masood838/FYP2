<?php
include 'header.php';
$id=$_GET["id"];
$query = "SELECT * FROM `company` where id='$id'";
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_array($result))
{
$editname=$row["name"];
$editemail=$row["email"];
$editphone=$row["phone"];
$editmobile=$row["mobile"];
$editaddress=$row["address"];

$editimage=$row["image"];

}
}
if(isset($_POST['submit']) != "")
{
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$mobile=$_POST["mobile"];
$address=$_POST["address"];

$image = $_FILES['image']['name'];
$target = "image/".basename($image);
move_uploaded_file($_FILES['image']['tmp_name'], $target);
$query = "UPDATE `company` SET `name`='$name',`email`='$email',`phone`='$phone',`mobile`='$mobile',`address`='$address',`logo`='$image' WHERE `id`= '$id'";

mysqli_query($con,$query);
$msg=$query;
header("location: company.php?msg='$msg'");
}
?>
<div class="page-wrapper">
    <h2 class="text-danger" style="margin-left: 10%;"><strong><u>Update Website Info</u></strong></h2>
    <div class="container">
        <form class="" style="width: 50%;margin-left: 3%" method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $editname?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" name="email" placeholder="email" value="<?php echo $editemail?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="text" class="form-control" name="phone" placeholder="Phone" value="<?php echo $editphone?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mobile</label>
                <input type="text" class="form-control" name="mobile" placeholder="Mobile" value="<?php echo $editmobile?>">
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">address</label>
                <input type="text" class="form-control" name="address" placeholder="address" value="<?php echo $editaddress?>">
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Logo</label>
                <input type="file" class="form-control" name="image" placeholder="description" value="<?php echo $editimage?>">
            </div>
            
            <button type="submit" id="submit" name="submit" onclick="addrecord()" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
<?php include 'footer.php';?>