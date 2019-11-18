<?php
include 'header.php';
$id=$_GET["id"];
$query = "SELECT * FROM `testimonials` where id='$id'";
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_array($result))
{
$editname=$row["name"];
$editimage=$row["image"];

$edittestimonials=$row["testimonials"];
}
}
if(isset($_POST['submit']) != "")
{
$name=$_POST["name"];
$image = $_FILES['image']['name'];
$target = "image/".basename($image);
move_uploaded_file($_FILES['image']['tmp_name'], $target);
$testimonials=$_POST["testimonials"];
$query = "UPDATE `testimonials` SET `name`='$name',`image`='$image',`testimonials`='$testimonials' WHERE `id`= '$id'";

mysqli_query($con,$query);
$msg="Data Successfully Updated";
header('location: alltestimonials.php');
}
?>
<div class="page-wrapper">
    <h2 class="text-danger" style="margin-left: 10%;"><strong><u>Add New Testimonials</u></strong></h2>
    <div class="container">
        <form class="" style="width: 50%;margin-left: 3%" method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $editname;?>">
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" class="form-control" name="image" value="<?php echo $image?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Testimonials</label>
                <input type="text" class="form-control" name="testimonials" placeholder="Testimonials" value="<?php echo $edittestimonials;?>">
            </div>
            <button type="submit" id="submit" name="submit" onclick="addrecord()" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
<?php include 'footer.php';?>