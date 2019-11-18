<?php
include 'header.php';
$id=$_GET["id"];
$query = "SELECT * FROM `slides` where id='$id'";
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_array($result))
{

$editimage=$row["image"];

}
if(isset($_POST['submit']) != "")
{

$image = $_FILES['image']['name'];
$target = "image/".basename($image);
move_uploaded_file($_FILES['image']['tmp_name'], $target);

$query = "UPDATE `slides` SET `image`='$image' WHERE `id`= '$id'";

mysqli_query($con,$query);
$msg="Data Successfully Updated";
header('location: allslides.php');
}
?>
<div class="page-wrapper">
    <h2 class="text-danger" style="margin-left: 10%;"><strong><u>Add New Slides</u></strong></h2>
    <div class="container">
        <form class="" style="width: 50%;margin-left: 3%" method="post" action="" enctype="multipart/form-data">
            
            <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" class="form-control" name="image" value="<?php echo $image?>">
            </div>
            
            <button type="submit" id="submit" name="submit" onclick="addrecord()" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
<?php include 'footer.php';?>