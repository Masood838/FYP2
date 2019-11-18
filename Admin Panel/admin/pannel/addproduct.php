<?php
include 'header.php';
if(isset($_POST['submit']) != "")
{
$name=$_POST["name"];
$price=$_POST["price"];
$category=$_POST["category"];
$brand=$_POST["brand"];
$stock=$_POST["stock"];
$description=$_POST["description"];
$image = $_FILES['image']['name'];
$target = "image/".basename($image);
move_uploaded_file($_FILES['image']['tmp_name'], $target);
$query = "INSERT INTO `product`(`name`, `price`, `category`, `brand`, `stock`, `description`,`image`) VALUES ('$name','$price','$category','$brand','$stock','$description','$image')";
mysqli_query($con,$query);
$msg="Inserted Successfully";
header("location: allproduct.php?msg='$msg'");
}
?>
<div class="page-wrapper">
    <h2 class="text-danger" style="margin-left: 10%;"><strong><u>Add New User</u></strong></h2>
    <div class="container">
        <form class="" style="width: 50%;margin-left: 3%" method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="text" class="form-control" name="price" placeholder="Price">
            </div>
            
            <div class="form-group">
                <label >Select Category</label>
                <select class="form-control" name="category">
                    <option class="disabled">---Select---</option>
                    <?php
                    $query = "Select * from category" or die(mysqli_error());
                    $getCategories = $con->query($query);
                    while($row = mysqli_fetch_array($getCategories)) {
                    ?>
                    <option class="form-control circle" value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                    <?php }?>
                </select>
            </div>
            <div class="form-group">
                <label >Select Brand</label>
                <select class="form-control" name="brand">
                    <option class="disabled">---Select---</option>
                    <?php
                    $query = "Select * from brand" or die(mysqli_error());
                    $getCategories = $con->query($query);
                    while($row = mysqli_fetch_array($getCategories)) {
                    ?>
                    <option class="form-control circle" value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                    <?php }?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">stock</label>
                <input type="text" class="form-control" name="stock" placeholder="stock">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">description</label>
                <input type="text" class="form-control" name="description" placeholder="description">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" class="form-control" name="image" placeholder="description">
            </div>
            
            <button type="submit" id="submit" name="submit" onclick="addrecord()" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
<?php include 'footer.php';?>