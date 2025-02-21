<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    

<section class="container">
    <div class="row">
        <div class="col-8">
            <h1>Contact Us</h1>
            <form method="post">
            <input type="text" name="name" placeholder="Your name" class="form-control mb-2">
            <input type="text" name="email" placeholder="Your Email" class="form-control mb-2">
            <input type="text" name="subject" placeholder="Your Subject" class="form-control mb-2">
            <textarea name="message" placeholder="Your Message" class="form-control mb-2"></textarea>
            <input type="submit" value="Send Message" name="btn_submit">
            </form>
        </div>
    </div>
</section>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
function sendMail($name,$email,$subject,$message){

    $mail = new PHPMailer(true);
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'noorunnisa560@gmail.com';                     //SMTP username
    $mail->Password   = 'izuuztvooalindxy';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port `


    $mail->setFrom('noorunnisa560@gmail.com', $name);
    $mail->addAddress('noorunnisa560@gmail.com', 'Joe User'); 
    $mail->addReplyTo($email, $name);


     //Content
     $mail->isHTML(true);                                  //Set email format to HTML
     $mail->Subject = 'PHP Mailer testing :' .$name;
     $mail->Body    = 'Name: '.$name.'<br> Email: '.$email.'<br>Subject: '.$subject.'<br>Message: '.$message;

     if($mail->send()){
        echo "<script>alert('Mail has been sent successfully')</script>";
     }
     else{
        echo "<script>alert('Mail Not send')</script>";

     }


}



if(isset($_POST['btn_submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    sendMail($name,$email,$subject,$message);


}

?>


</body>
</html>