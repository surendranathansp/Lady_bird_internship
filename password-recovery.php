<?php
include('includes/config.php');
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
  
require 'vendor/autoload.php';

$mail = new PHPMailer;
if(isset($_POST['send'])){


$femail=$_POST['femail'];

$row1=mysqli_query($con,"select email,password,fname from users where email='$femail'");
$row2=mysqli_fetch_array($row1);
if($row2>0)
{
$toemail = $row2['email'];
$fname = $row2['fname'];
$subject = "Information about your password";
$password=$row2['password'];
$message = "Your password is ".$password;
$mail->isSMTP();                            
$mail->Host = 'smtp.gmail.com';           
$mail->SMTPAuth = true;                     
$mail->Username = 'surendranathansp@gmail.com';    
$mail->Password = 'sugyhlvnrfwjjxcd'; 
$mail->SMTPSecure = 'tls';                  
$mail->Port = 587;                          
$mail->setFrom('your gmail id here','your name here');
$mail->addAddress($toemail);   
$mail->isHTML(true);  
$bodyContent=$message;
$mail->Subject =$subject;
$bodyContent = 'Dear'." ".$fname;
$bodyContent .='<p>'.$message.'</p>';
$mail->Body = $bodyContent;
if(!$mail->send()) {
echo  "<script>alert('Message could not be sent');</script>";
echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
   echo  "<script>alert('Your Password has been sent Successfully');</script>";
}

}
else
{
echo "<script>alert('Email not register with us');</script>";   
}
}






?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Password Reset </title>
        <link href="css/styles.css" rel="stylesheet" />
        <style>
        body {
            background-image: url('https://img.freepik.com/free-vector/paper-style-dynamic-lines-background_23-2149008629.jpg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            padding: 0;
        }
    </style>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">

<h3 class="text-center font-weight-light my-4">Password Recovery</h3></div>
<div class="card-body">

<div class="small mb-3 text-muted">Enter your email address that you have registered </div>


<form method="post">
                                           
<div class="form-floating mb-3">
<input class="form-control" name="femail" type="email" placeholder="name@example.com" required />
<label for="inputEmail">Email address</label>
</div>

<div class="d-flex align-items-center justify-content-between mt-4 mb-0">
<a class="small" href="login.php">Return to login</a>
<button class="btn btn-primary" type="submit" name="send">Reset Password</button>
</div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="signup.php">Need an account? Sign up!</a></div>
                        <div class="small"><a href="index.php">Back to Home</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
       <?php include('includes/footer.php');?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
