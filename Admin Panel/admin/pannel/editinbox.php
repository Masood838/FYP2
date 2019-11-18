<?php
include 'header.php';
$id=$_GET["id"];
$query = "SELECT * FROM `inbox` where id='$id'";
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_array($result))
{
$editname=$row["name"];
$editemail=$row["email"];
$editsubject=$row["subject"];
$editmessage=$row["message"];
}
}
if(isset($_POST['submit']) != "")
{
$name=$_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$message=$_POST["message"];
$query = "UPDATE `inbox` SET `name`='$name',`email`='$email',`subject`='$subject',`message`='$message'  WHERE `id`= '$id'";

mysqli_query($con,$query);
$msg="Data Successfully Updated";
header('location: allinbox.php');
}
?>
<div class="page-wrapper">
    <h2 class="text-danger" style="margin-left: 10%;"><strong><u>Inbox</u></strong></h2>
    <div class="container">
        <form class="" style="width: 50%;margin-left: 3%" method="post" action="">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $editname ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $editemail ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Subject</label>
                <input type="text" class="form-control" name="subject" placeholder="Subject" value="<?php echo $editsubject ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Message</label>
                <textarea class="form-control" name="message" placeholder="Message" ><?php echo $editmessage ?></textarea>
            </div>
            
            <button type="submit" id="submit" name="submit" onclick="addrecord()" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
<?php include 'footer.php';?>