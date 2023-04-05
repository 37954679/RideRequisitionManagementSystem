<!DOCTYPE html>
<html lang="en">
<?php
$driverid=$_POST['id'];
$connect=mysqli_connect("localhost","root","","ride_requisition_and_management_system");
$sqlstmt="select * from driver where id='$driverid'";
$query=mysqli_query($connect,$sqlstmt);
$row=mysqli_fetch_assoc($query);
$VehicleNumberPlate=$row['VehicleNumberPlate'];
require_once "../session.php";
?>
<head>
    <title>Ride Requisition Management System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="auth-bg">
                <span class="r"></span>
                <span class="r s"></span>
                <span class="r s"></span>
                <span class="r"></span>
            </div>
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <i class="feather icon-user-plus auth-icon"></i>
                    </div>
                    <h3 class="mb-4">Booking</h3>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="VehicleId" value="<?php echo $VehicleNumberPlate;?>" placeholder="Vehicle Id" readonly>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="<?php echo $_SESSION['loggedInUser']; ?>" id="RegistrationNo" placeholder="Registration Number" required readonly>
                    </div>
                    <div class="input-group mb-4">
                        <input type="text" id="StudentName" class="form-control" placeholder="Student Name" required>
                    </div>
                    
                    <div class="input-group mb-3">
                       <select class="form-control" id="school" required>
                       <option></option>
                        <option value="N/A">N/A</option>
                        <option value="Business and Economics">Business and Economics</option>
                        <option value="Science Engineering and Technology">Science Engineering and Technology</option>
                        <option value="Education">Education</option>
                        <option value="Music and Performing Arts">Music and Performing Arts</option>
                        <option value="Medicine and Health Sciences">Medicine and Health Sciences</option>
                        <option value="law">Law</option>
    </select>
                    </div>
                    <div class="input-group mb-4">
                        <select class="form-control" id="event" required>
                            <option value="Academic">Academic</option>
                            <option value="Clubs">Clubs</option>
                            <option value="Others">Others</option>
    </select>
                    </div>
                    <div class="input-group mb-4">
                        <input type="text" id="TotalNumber" class="form-control" placeholder="Total Number" required>
                    </div>
                    <div class="input-group mb-4">
                        <input type="text" class="form-control" id="Destination" placeholder="Destination" required>
                    </div>
                    <div class="input-group mb-4">
                        <input type="date" class="form-control" id="date" required>
                    </div>
                    <div class="input-group mb-4">
                        <input type="text" class="form-control" id="Description" placeholder="Description" required>
                    </div>
                    
                    <div class="form-group text-left">
                        <div class="checkbox checkbox-fill d-inline">
                            <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-1" checked="">
                            <label for="checkbox-fill-1" class="cr"> Save</label>
                        </div>
                    </div>
                    <div class="form-group text-left">
                      
                    </div>
                    <button class="btn btn-primary shadow-2 mb-4" onclick="book()">Submit Booking</button>
                </div>
                <div id="responce"></div>
            </div>
        </div>
        
    </div>
<script>
    function book(){
    var vehicleid=document.getElementById('VehicleId').value;
    var StudentName=document.getElementById('StudentName').value;
    var RegistrationNo=document.getElementById('RegistrationNo').value;
    var School=document.getElementById('school').value;
    var Event=document.getElementById('event').value;
    var date=document.getElementById('date').value;
    var TotalNumber=document.getElementById('TotalNumber').value;
    var Destination=document.getElementById('Destination').value;
    var Description=document.getElementById('Description').value;
$.ajax({
    type:'post',
    url:'savebook.php',
    data:{vehicleid:vehicleid,RegistrationNo:RegistrationNo,StudentName:StudentName,School:School,Event:Event,TotalNumber:TotalNumber,Destination:Destination,Description:Description,date:date},
    success:function(data){
        alert(data);
        $("#response").html(data);
    }
});
    }
</script>
    <!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
