<?php
        $Name=$_POST['StaffName'];
        $Event=$_POST['Event'];
        $School=$_POST['School'];
        $StaffNumber=$_POST['StaffNo'];
        $TotalNumber=$_POST['TotalNumber'];
        $VehicleRequested=$_POST['vehicleid'];
        $description=$_POST['Description'];
        $destination=$_POST['Destination'];
        
        $stmt="insert into bookings(StudentName,School_Club,Total_Number,VehicleRequested,Reason_For_Booking,Destination) 
        values('$Name','$School','$TotalNumber','$VehicleRequested','$description','$destination')";
        if(mysqli_query(mysqli_connect('localhost','root','','ride_requisition_and_management_system'),$stmt))
        {
            $sql="select NumberPlate from vehicles where id='$VehicleRequested'";
            $connection=mysqli_connect('localhost','root','','ride_requisition_and_management_system');
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