<?php
include 'header.php';
if(isset($_POST['submit']) != "")
{
$name=$_POST["name"];
$testimonials=$_POST["testimonials"];
$image = $_FILES['image']['name'];
$target = "image/".basename($image);
move_uploaded_file($_FILES['image']['tmp_name'], $target);
$query = "INSERT INTO `testimonials`(`name`, `image`,`testimonials`) VALUES ('$name','$image','$testimonials')";
mysqli_query($con,$query);
$msg="Inserted Successfully";
header("location: alltestimonials.php?msg='$msg'");
}
?>
<div class="page-wrapper">
    <h2 class="text-danger" style="margin-left: 10%;"><strong><u>Add New Testimonials</u></strong></h2>
    <div class="container">
        <form class="" style="width: 50%;margin-left: 3%" method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Testimonials</label>
                <input type="text" class="form-control" name="testimonials" placeholder="Testimonials">
            </div>
            <button type="submit" id="submit" name="submit" onclick="addrecord()" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
<?php include 'footer.php';?>