<!DOCTYPE html>
<html lang="en">
<?php require_once "../session.php"; ?>
<head>
    <title>vehicle Management</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

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
                    <h3 class="mb-4">Staff Registration</h3>
                    <form action="" method="POST">
                    <div class="input-group mb-4">
                        <input type="text" class="form-control" name="Name" placeholder="Full names">
                    </div>
                    <div class="input-group mb-4">
                        <input type="text" class="form-control" name="Department" placeholder="Department">
                    </div>
                    <div class="input-group mb-4">
                        <input type="text" class="form-control" name="StaffNo" placeholder="Staff Number">
                    </div>
                    <div class="form-group text-left">
                    
                    </div>
                    <div class="form-group text-left">
                    </div>
                    <button type="submit" name="register" class="btn btn-primary shadow-2 mb-4">Register Staff</button>
               </div>
    </form>
            </div>
        </div>
    </div>
    <?php
    if(isset($_POST['register']))
    {
        $Name=$_POST['Name'];
        $Department=$_POST['Department'];
        $StaffNo=$_POST['StaffNo'];
        

        $stmt="insert into staff(Name,Department,StaffNo,Password) values('$Name','$Department','$StaffNo','staff123')";
        if(mysqli_query(mysqli_connect('localhost','root','','vehiclemanagement'),$stmt))
        {
            
        $stmt1="insert into users(username,password,role) values('$StaffNo','staff123','staff')";
        mysqli_query(mysqli_connect('localhost','root','','vehiclemanagement'),$stmt1);
            ?>
<script>
    alert("Inserted Successfully");
    </script>

<?php
        }
        else{
            echo "Error!! Try again";
        }
    }
    ?>
    <!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
