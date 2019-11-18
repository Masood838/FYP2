<?php
include 'header.php';
$id=$_GET["id"];
$query = "SELECT * FROM `about` where id='$id'";
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_array($result))
{
$editheading=$row["heading"];
$editimage=$row["image"];

$editcontent=$row["content"];
}
}
if(isset($_POST['submit']) != "")
{
$heading=$_POST["heading"];
$image = $_FILES['image']['name'];
$target = "image/".basename($image);
move_uploaded_file($_FILES['image']['tmp_name'], $target);
$content=$_POST["content"];
$query = "UPDATE `about` SET `heading`='$heading',`image`='$image',`content`='$content' WHERE `id`= '$id'";

mysqli_query($con,$query);
$msg="Data Successfully Updated";
header('location: about.php');
}
?>
<div class="page-wrapper">
    <h2 class="text-danger" style="margin-left: 10%;"><strong><u>Update About Us</u></strong></h2>
    <div class="container">
        <form class="" style="width: 50%;margin-left: 3%" method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="heading" placeholder="Heading" value="<?php echo $editheading;?>">
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" class="form-control" name="image" value="<?php echo $image?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Content</label>
                <textarea type="text" class="form-control" name="content" placeholder="Content" ><?php echo $editcontent;?></textarea>
            </div>
            <button type="submit" id="submit" name="submit" onclick="addrecord()" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
<?php include 'footer.php';?>