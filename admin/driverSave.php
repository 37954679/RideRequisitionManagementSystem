<?php
$connect=mysqli_connect("localhost","root","","vehiclemanagement");
    $username=$_POST['username'];
    $email=$_POST['Email'];
    $phoneNumber=$_POST['PhoneNumber'];
    $vehicleType=$_POST['VehicleTypes'];
    $VehicleNumberPlate=$_POST['NumberPlates'];
    $password=$_POST['Password'];
    if(mysqli_query($connect,"insert into driver(Name,Email,VehicleType,VehicleNumberPlate,PhoneNumber,
    availability,password) values('$username','$email','$vehicleType','$VehicleNumberPlate','$phoneNumber','unavailable','$password')
    "))
    {
        mysqli_query($connect,"insert into users(username,password,role) values('$username','$password','driver')");
        echo "Driver Registered successfully";
    }
    else{
        echo "There was an error in registering the drivers";
    }
?>