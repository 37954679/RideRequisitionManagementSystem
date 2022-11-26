<?php require_once "../session.php"; ?>
<?php
$type=$_POST['type'];
$connect=mysqli_connect("localhost","root","","vehiclemanagement");
$sqlstmt="select NumberPlate from vehicles where vehicleType='$type'";
$query=mysqli_query($connect,$sqlstmt);
if(mysqli_num_rows($query)>0)
{
    echo "<option>Select Number Plate</option>";
    while($row=mysqli_fetch_assoc($query))
    {
        echo "<option>".$row['NumberPlate']."</option>";
    }
}
else{
    echo "<option>Select Number Plate</option>";
}
?>