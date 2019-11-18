<?php
include 'header.php';
?>
<div class="page-wrapper">
    <div class="container-fluid">
        <h2 class="text-danger">Product Records</h2><hr><br>
        <table class="table table-responsive table-bordered table-striped" >
            <table id="mytable" class="table table-responsive table-bordered table-striped" >
                <tr style="color:white;background:darkslateblue">
                    <th width="15%">NO.</th>
                    <th width="15%">Name</th>
                    <th width="15%">Price</th>
                    <th width="15%">Category</th>
                    <th width="15%">brand</th>
                    <th width="15%">stock</th>
                    <th width="15%">description</th>
                    <th width="15%">Image</th>
                    <th width="15%">Edit</th>
                    <th width="15%">Delete</th>
                </tr>
                <?php
                $query = "SELECT * FROM `product`";
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
                    <td><?php echo $row['price']?></td>
                    <td><?php echo $row['category']?></td>
                    <td><?php echo $row['brand']?></td>
                    <td><?php echo $row['stock']?></td>
                    <td><?php echo $row['description']?></td>
                    
                    <td><img src="image/<?php echo $row['image'] ?>" style="width=100px;height:80px;"></td>
                    
                    <td>
                        <a href="editproduct.php?id=<?php echo $row['id']?>" class="btn btn-warning">Edit</button>
                        </td>
                        <td>
                            <a href="delete.php?id=<?php echo $row['id']?>&table=product&page=allproduct.php" class="btn btn-danger ">Delete</button>
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