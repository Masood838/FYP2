<?php
include 'header.php';
if(isset($_POST['submit']) != "")
{
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$role = $_POST['role'];
$mobile = $_POST['mobile'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$city = $_POST['city'];
$country = $_POST['country'];
$password = $_POST['password'];
$query = "INSERT INTO `user`(`firstname`, `lastname`, `username`, `role`, `mobile`, `phone`, `email`, `city`, `country`, `password`) VALUES ('$firstname','$lastname','$username','$role','$mobile','$phone','$email','$city','$country','$password')";
mysqli_query($con,$query);
echo "<script>
aler('Data Inserted Successfully')
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
                <input type="text" class="form-control" name="firstname" placeholder="First Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="text" class="form-control" name="lastname" placeholder="Last Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">User Name</label>
                <input type="text" class="form-control" name="username" placeholder="User Name">
            </div>
            <div class="form-group">
                <label >Select Account Type</label>
                <select class="form-control" name="role">
                    <option class="disabled">---Select---</option>
                    <option class="form-control circle" value="Vendor">Vendor</option>
                    <option class="form-control circle" value="Customer">Customer</option>
                    
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mobile</label>
                <input type="text" class="form-control" name="mobile" placeholder="Mobile">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="text" class="form-control" name="phone" placeholder="Phone">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">City</label>
                <input type="text" class="form-control" name="city" placeholder="City">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Country</label>
                <input type="text" class="form-control" name="country" placeholder="Country">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <button type="submit" id="submit" name="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
<?php include 'footer.php';?>