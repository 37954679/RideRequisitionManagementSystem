<html>
    <head><title> RIDE REQUISITION AND MANAGEMENT SYSTEM</title>
    <link href="style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background:url('images/bus2.jpg');
            background-repeat:no-repeat;
            background-size:cover;
        }
.input{
    background:transparent;
    border-top:3px solid transparent;
    border-right:3px solid transparent;
    border-left:3px solid transparent;
    border-bottom:1px solid black;
}
form{
    background-color:purple;
    opacity:.8;
}
</style>
</head>
    <body>
<h3>RIDE REQUISITION AND MANAGEMENT SYSTEM</h3>
    <form action="" method="POST">
    <select class="input" name="role">
        <option value="student">
        student
        </option>
        <option value="driver">
        driver
        </option>
        <option value="admin">
        admin
        </option>
        <option value="staff">
        staff
        </option>
</select> <br>
        <label>username:</label><br><br><input class="input" type="text"place-holder="enter username" name="username"><br><br>
        <label>password:</label><br><br><input class="input"  type="password"place-holder="enter password" name="password"><br><br>
        <input type="submit" name="login" value="login" class="btn"><a href="#">forgot password</a>
</form>
<?php
if(isset($_POST['login']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$role=$_POST['role'];
$connection=mysqli_connect('localhost','root','','vehiclemanagement');
if($connection)
{
$stmt="select * from users where username='$username' and password='$password' and role='$role'";
if(mysqli_num_rows(mysqli_query($connection,$stmt))==1)
{
echo "login successful";
session_start();
$_SESSION['loggedInUser']=$username;
if($role=='admin')
{
    header("location:admin/");
}
elseif($role=="student"){
    header("location:student/");
}
else if($role=="driver")
{
    header("location:driver/");
    $sql="update driver set availability='available' where Name='$username'";
$query=mysqli_query($connection,$sql);
}
else{
    header("location:staff/");
}
}
else{
    echo "Check your username and password";
}
}
else
{
echo "Error in connecting to the database";
}
}
?>
</body>
</html>
