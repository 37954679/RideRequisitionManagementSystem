<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once "PHPMailer/src/PHPMailer.php";
require_once "PHPMailer/src/Exception.php";
require_once "PHPMailer/src/SMTP.php";
require 'vendor/autoload.php';
$user=$_SESSION['loggedInUser'];
$StudentReg=$_POST['studentReg'];
echo $StudentReg;
$conn=mysqli_connect("localhost","root","","vehiclemanagement");
$sql=mysqli_query($conn,"select * from students where RegistrationNumber='$StudentReg'");
$r=mysqli_num_rows($sql);
$row=mysqli_fetch_assoc($sql);
$email=$row['email'];
if($r !=true)
{
echo $email;
}
else
{
$query="update bookings set Approval='approved' where RegNumber='$StudentReg'";
  $htmlcode= "<html><body style='background-color:#fff;border:1px solid black;font-size:25px;font-weight:bold;border-radius:20px'><center><h1><u>Feedback</h1><h2>Dear ".$user."</h2>Your Booking  has been approved successfully.<br><hr><b></center></body></html>";

if(mysqli_query($conn,$query))
{

$mail = new PHPMailer(true);

try {
  $mail->SMTPDebug = 2;                 
  $mail->isSMTP();                      
  $mail->Host  = 'smtp.gmail.com;';         
  $mail->SMTPAuth = true;             
  $mail->Username = 'vincentbettoh@gmail.com';        
  $mail->Password = 'vewwdlaflpairsyb';           
  $mail->SMTPSecure = 'tls';              
  $mail->Port  = 587;
  $mail->setFrom("kabarak@gmail.com", "kabarak University");    
  $mail->addAddress($email); 
  $mail->isHTML(true);                
  $mail->Subject = 'Subject';
  $mail->Body=$htmlcode;
  $mail->AltBody = 'Body in plain text for non-HTML mail clients';
  $mail->send();
  echo "<script>alert('confirmation sent!');</script>";
  ?>
  <script>
setTimeout(function () {
   window.location.href= 'index.php'; // the redirect goes here

},200);
</script>
  <?php
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
echo "<h2 style='color:green'>Thank you </h2>";
}


?>