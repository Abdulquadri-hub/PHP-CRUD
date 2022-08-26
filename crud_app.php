<!-- header -->
<?php
include("includes/header.php"); 
include("includes/controller.php"); 
$sql = "select * from crud_app";
$result = mysqli_query($conn,$sql);
?>
        <h4>CRUD OPERATION APPLICATION IN PHP</h4>

    <div class="box1">
        <h5>ALL STUDENTS</h5>

        <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    ADD STUDENTS
    </button>


    </div>

        <table class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                <th>ID</th>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>AGE</th>
                <th>UPDATE</th>
                <th>DELETE</th>
                </tr>
            </thead>
            <?php while($read = mysqli_fetch_assoc($result)):?>
            <tbody>
                <tr>
                    <td><?=$read['id']?></td>
                    <td><?=$read['firstname']?></td>
                    <td><?=$read['lastname']?></td>
                    <td><?=$read['age']?></td>
                    <td><a class="btn btn-success" href="update.php?id=<?=$read['id']?>">Update</a></td>
                    <td><a class="btn btn-success" href="delete.php?id=<?=$read['id']?>">Delete</a></td>
                </tr>
            </tbody>
            <?php endwhile;?>
        </table>

        <?php
        if(isset($_GET['msg']))
        {
            echo "<h6>".$_GET['msg']."</h6>";
        }
            
        ?>
         <?php
        if(isset($_GET['insert_msg']))
        {
            echo "<h5>".$_GET['msg']."</h5>";
        }
            
        ?>

        <!-- form start -->
    <form action="" method="post" id="form">

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">

<h3>Add Students</h3>

<!-- inputs -->
<div  class="form-group">
    <input type="text" name="firstname" class="form-control" placeholder="last_name">
</div>

<div  class="form-group">
    <input type="text" name="lastname" class="form-control" placeholder="last_name">
</div>

<div  class="form-group">
    <input type="text" name="age" class="form-control" placeholder="Age">
</div>
<!-- input end -->

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" value="" name="insert" class="btn btn-primary">Add Students</button>
    </div>
    </div>
</div>
</div>
    
</form>
<!-- form end -->
    
    <!-- footer -->
<?php include("includes/footer.php"); ?>