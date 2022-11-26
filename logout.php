<?php
require_once "session.php";
unset($_SESSION['loggedInUser']);
header("location:login.php");
?>