<?php
session_start();
$data=$_SESSION['availability'];
$user=$_SESSION['loggedInUser'];
$connection=mysqli_connect('localhost','root','','ride_requisition_and_management_system');
$sql="update driver set availability='$data' where Name='$user'";
$query=mysqli_query($connection,$sql);
if($query)
{
    echo "Updated Successfully";
}
else
{
    echo "There was an error in updating status";
    header("location:index.php");
}
?>