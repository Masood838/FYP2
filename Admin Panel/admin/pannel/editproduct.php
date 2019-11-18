<?php
include 'header.php';
$id=$_GET["id"];
$query = "SELECT * FROM `product` where id='$id'";
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_array($result))
{
$editname=$row["name"];
$editprice=$row["price"];
$editcategory=$row["category"];
$editbrand=$row["brand"];
$editstock=$row["stock"];
$editdescription=$row["description"];
$editimage=$row["image"];

}
}
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
$query = "UPDATE `product` SET `name`='$name',`image`='$image',`price`='$price',`category`='$category',`brand`='$brand',`stock`='$stock',`description`='$description'  WHERE `id`= '$id'";

mysqli_query($con,$query);
$msg="Updated Succesfully Successfully";
header("location: allproduct.php?msg='$msg'");
}
?>
<div class="page-wrapper">
    <h2 class="text-danger" style="margin-left: 10%;"><strong><u>Add New User</u></strong></h2>
    <div class="container">
        <form class="" style="width: 50%;margin-left: 3%" method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $editname?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="text" class="form-control" name="price" placeholder="Price" value="<?php echo $editprice?>">
            </div>
            
            <div class="form-group">
                <label >Select Category</label>
                <select class="form-control" name="category">
                    <option class="disabled">---Select---</option>
                    <?php
                    $query = "Select * from category" or die(mysqli_error());
                    $getCategories = $con->query($query);
                    while($row = mysqli_fetch_array($getCategories)) {
                    if($row["name"]==$editcategory){
                    
                    
                    ?>
                    
                    <option class="form-control circle" value="<?php echo $row['name'];?>" selected><?php echo $row['name'];?></option>
                    <?php
                    }
                    else{
                    ?>
                    <option class="form-control circle" value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                    <?php
                    }
                    
                    }?>
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
                    if($row["name"]==$editbrand){
                    
                    
                    ?>
                    
                    <option class="form-control circle" value="<?php echo $row['name'];?>" selected><?php echo $row['name'];?></option>
                    
                    <?php
                    }
                    else{
                    ?>
                    <option class="form-control circle" value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                    
                    <?php
                    }
                    
                    }?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">stock</label>
                <input type="text" class="form-control" name="stock" placeholder="stock" value="<?php echo $editstock?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">description</label>
                <input type="text" class="form-control" name="description" placeholder="description" value="<?php echo $editdescription?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" class="form-control" name="image" placeholder="description" value="<?php echo $editimage?>">
            </div>
            
            <button type="submit" id="submit" name="submit" onclick="addrecord()" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
<?php include 'footer.php';?>