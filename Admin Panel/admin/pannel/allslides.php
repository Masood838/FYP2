<?php
include 'header.php';
?>
<div class="page-wrapper">
    <div class="container-fluid">
        <h2 class="text-danger">Slides Records</h2><hr><br>
        <table class="table table-responsive table-bordered table-striped" >
            <tr style="color:white;background:darkslateblue">
                <th width="10%">NO.</th>
                
                <th width="80%">Image</th>
                
                
                <th width="10%">Edit</th>
                <th width="10%">Delete</th>
            </tr>
            <?php
            $query = "SELECT * FROM `slides`";
            $result = mysqli_query($con,$query);
            
            
            if(mysqli_num_rows($result)>0)
            {
            $number = 1;
            while($row = mysqli_fetch_array($result))
            {
            ?>
            <tr>
                <td><?php echo $number ?></td>
                
                <td><img src="image/<?php echo $row['image'] ?>" style="width=200px;height:160px;"></td>
                
                <td>
                    <a href="editslides.php?id=<?php echo $row['id']?>" class="btn btn-warning">Edit</button>
                    </td>
                    <td>
                        <a href="delete.php?id=<?php echo $row['id']?>&table=slides&page=allslides.php" class="btn btn-danger ">Delete</button>
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