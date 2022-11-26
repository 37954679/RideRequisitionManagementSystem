<?php
require_once "../session.php"; 
        $Name=$_POST['StudentName'];
        $Event=$_POST['Event'];
        $School=$_POST['School'];
        $RegistrationNumber=$_POST['RegistrationNo'];
        $TotalNumber=$_POST['TotalNumber'];
        $VehicleRequested=$_POST['vehicleid'];
        $description=$_POST['Description'];
        $destination=$_POST['Destination'];
        $date=$_POST['date'];
        
        $stmt="insert into bookings(StudentName,School_Club,Total_Number,VehicleRequested,Reason_For_Booking,Destination,date,RegNumber) 
        values('$Name','$School','$TotalNumber','$VehicleRequested','$description','$destination','$date','$RegistrationNumber')";
        if(mysqli_query(mysqli_connect('localhost','root','','vehiclemanagement'),$stmt))
        {
            $sql="select NumberPlate from vehicles where NumberPlate='$VehicleRequested'";
            $connection=mysqli_connect('localhost','root','','vehiclemanagement');
            $query=mysqli_query($connection,$sql);
            $row=mysqli_fetch_assoc($query);
            $numberPlate=$row['NumberPlate'];
            $sqlstmt="update driver set availability='unavailable' where VehicleNumberPlate='$numberPlate'";
            $queryupdate=mysqli_query($connection,$sqlstmt);
           echo "Booked Successfully";
        }
        else{
            echo "Error!! Try again";
        }
    ?>