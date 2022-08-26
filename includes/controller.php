<?php
include("database.php");

if(isset($_POST['insert']))
{
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $age = $_POST['age'];

    if(empty($fname))
    {
        header("location: crud_app.php?msg=You need to fill the first name!");
    }

    else 
    {
        // Attempt insert query execution
$sql = "INSERT INTO crud_app(firstname, lastname, age)VALUES($fname, $lname, $age)";
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

    }

}




