<?php
include 'header.php';
?>
<div class="page-wrapper">
    <div class="container-fluid">
        <h2 class="text-danger">Company Records</h2><hr><br>
        <table class="table table-responsive table-bordered table-striped" >
            <table id="mytable" class="table table-responsive table-bordered table-striped" >
                <tr style="color:white;background:darkslateblue">
                    <th width="15%">NO.</th>
                    <th width="15%">Name</th>
                    <th width="15%">Email</th>
                    <th width="15%">Phone</th>
                    <th width="15%">Mobile</th>
                    <th width="15%">Address</th>
                    
                    <th width="15%">Logo</th>
                    <th width="15%">Edit</th>
                    <th width="15%">Delete</th>
                </tr>
                <?php
                $query = "SELECT * FROM `company`";
                $result = mysqli_query($con,$query);
                
                
                if(mysqli_num_rows($result)>0)
                {
                $number = 1;
                while($row = mysqli_fetch_array($result))
                {
                ?>
                <tr>
                    <td><?php echo $number?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['phone']?></td>
                    <td><?php echo $row['mobile']?></td>
                    <td><?php echo $row['address']?></td>
                    
                    <td><img src="image/<?php echo $row['logo'] ?>" style="width=100px;height:80px;"></td>
                    
                    <td>
                        <a href="editcompany.php?id=<?php echo $row['id']?>" class="btn btn-warning">Edit</button>
                        </td>
                        <td>
                            <a href="delete.php?id=<?php echo $row['id']?>&table=company&page=company.php" class="btn btn-danger ">Delete</button>
                            </td>
                        </tr>
                        
                        <?php
                        $number++;
                        }
                        }
                        ?>
                    </table>
                </div>
            </div>
            <?php
            include 'footer.php';
            ?>