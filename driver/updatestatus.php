<?php
$date=date('d-m-y');
$connect=mysqli_connect("localhost","root","","vehiclemanagement");
if($connect)
{
    $sqlcheck="select * from Bookings where status='active'";
   
        $sql="update Bookings set status='inactive' where date='$date'";
$query=mysqli_query($connect,$sql);
if($query)
{
    echo "Status Updated successfully ";
}
else{
    echo "error!! Try again later";
}
}

else{
    echo "Error in connecting to the database".mysqli_error();
}
?>