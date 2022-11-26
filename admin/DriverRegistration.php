<!DOCTYPE html>
<html lang="en">

<head>
    <title>Driver  Registration</title>
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
    <?php require_once "../session.php"; ?>
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
      function register()
      {
        var username=document.getElementById("username").value;
        var email=document.getElementById("email").value;
        var phoneNumber=document.getElementById("phone").value;
        var vehicleTypes=document.getElementById("vehicleTypes").value;
        var numberplates=document.getElementById("NumberPlates").value;
        var password=document.getElementById("password").value;
        $.ajax({
            type:'post',
            url:'driverSave.php',
            data:{username:username,Email:email,PhoneNumber:phoneNumber,VehicleTypes:vehicleTypes,NumberPlates:numberplates,Password:password},
            success:function(data){
                $('#result').html(data);
                username.value="";
            }
        })
      }
    function NumberPlates(id)
    {
       var vehicleType=document.getElementById(id).value;
        $.ajax({
            type:'post',
            url:'vehicleNumberPlates.php',
            data:{type:vehicleType},
            success:function(data){
                $('#NumberPlates').html(data);
            }
        })
    }
</script>
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
                    <h3 class="mb-4">Driver Registration</h3>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" id="username">
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email"id="email">
                    </div>
                    <div class="input-group mb-3">
                        <input type="phone" class="form-control" placeholder="Phone number" id="phone">
                    </div>
                    <div class="input-group mb-3">
                        <select class="form-control" id="vehicleTypes" name="vehicleTypes" onchange="NumberPlates(this.id)">
                            <option value="Buses">Buses</option>
                            <option value="Cars">Cars</option>
                            <option>Minibuses</option>
                            </select>
                    </div>
                    <div class="input-group mb-3" >
                        <select class="form-control" id="NumberPlates">
                            <option>Available</option>
                            </select>
                    </div>
                    <div class="input-group mb-4">
                        <input type="password" class="form-control" id="password" placeholder="password">
                    </div>
                    <div class="form-group text-left">
                    
                    </div>
                    <div class="form-group text-left">
                    </div>
                    <button class="btn btn-primary shadow-2 mb-4" name="register" onclick="register()">Register Driver</button>
               </div>
            </div>
        </div>
        <div id="result"></div>
    </div>
    
<script src="assets/js/vendor-all.min.js">
</script>

	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
