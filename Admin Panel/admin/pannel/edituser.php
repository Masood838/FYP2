<?php
include 'header.php';
$id=$_GET["id"];
$query = "SELECT * FROM `user` where id='$id'";
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_array($result))
{
$editfirstname = $row['firstname'];
$editlastname = $row['lastname'];
$editusername = $row['username'];
$editmobile = $row['mobile'];
$editphone = $row['phone'];
$editemail = $row['email'];
$editcity = $row['city'];
$editcountry = $row['country'];
$editpassword = $row['password'];
}
}
if(isset($_POST['submit']) != "")
{
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$mobile = $_POST['mobile'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$city = $_POST['city'];
$country = $_POST['country'];
$query = "UPDATE `user` SET `firstname`='$firstname',`lastname`='$lastname',`username`='$username',`mobile`='$mobile',`phone`='$phone',`email`='$email',`city`='$city',`country`='$country' WHERE `id`= '$id'";
mysqli_query($con,$query);
echo "<script>
aler('Data Updated Successfully')
</script>";
header('location: allusers.php');
}
?>
<div class="page-wrapper">
    <h2 class="text-danger" style="margin-left: 10%;"><strong><u>Add New User</u></strong></h2>
    <div class="container">
        <form class="" style="width: 50%;margin-left: 3%" method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input type="text" class="form-control" name="firstname" placeholder="First Name" value="<?php echo $editfirstname?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="text" class="form-control" name="lastname" placeholder="Last Name" value="<?php echo $editlastname ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">User Name</label>
                <input type="text" class="form-control" name="username" placeholder="User Name" value="<?php echo $editusername?>">
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Mobile</label>
                <input type="text" class="form-control" name="mobile" placeholder="Mobile" value="<?php echo $editmobile ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="text" class="form-control" name="phone" placeholder="Phone" value="<?php echo $editphone?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $editemail?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">City</label>
                <input type="text" class="form-control" name="city" placeholder="City" value="<?php echo $editcity?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Country</label>
                <input type="text" class="form-control" name="country" placeholder="Country" value="<?php echo $editcountry?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $editpassword?>">
            </div>
            <button type="submit" id="submit" name="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>

<?php include 'footer.php';?>