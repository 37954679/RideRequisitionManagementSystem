<?php
session_start();
if(isset($_SESSION['loggedInUser']))
{

}
else
{
header('location:../login.php');
}
?>