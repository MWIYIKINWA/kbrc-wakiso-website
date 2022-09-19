<?php

include('PHPMailer/PHPMailerAutoload.php');

if (isset($_POST['contact'])) {
    
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $phone = $_POST['phone'];
    $subject = "KBRC Wakiso NewsLetter";

    $mail = new PHPMailer();

  $mail->isSMTP(); 
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'ssl' ; 
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 465; 
  $mail->isHTML(true); 
  $mail->isSMTP(); 
  $mail->Username = 'isaacmwiyikinwa08@gmail.com'; 
  $mail->Password = 'pxueyqzyyxnoynxy'; 
  $mail->setFrom('isaacmwiyikinwa08@gmail.com'); 

  $mail->Body = $fname.$lname.$phone.$message; 
  $mail->Subject = $subject; 
  $mail->addAddress($email); 

  $mail->send();
  
  echo "<script>alert('Thank you for contacting us')</script>";
  header("location:../../contact.php");
  
}
else{
  echo "<script>alert('Sending failed')</script>";
  header("location:../../contact.php");

}
