<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpform/phpmailer/src/Exception.php';
require 'phpform/phpmailer/src/PHPMailer.php';
require 'phpform/phpmailer/src/SMTP.php';

// if(isset($_POST["submit"])){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form input values
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $plan = $_POST['plan'];
    $check_in = $_POST['check-in'];
    $check_out = $_POST['check-out'];
    $adults = $_POST['adults'];
    $child = $_POST['child'];
    $budget = $_POST['budget'];

    // Construct message body
    $message = "
        Name: $name<br>
        Number of Customers: $number<br>
        Email: $email<br>
        Location: $location<br>
        Plan To: $plan<br>
        Check In Date: $check_in<br>
        Check Out Date: $check_out<br>
        Adults: $adults<br>
        Child: $child<br>
        Budget: $budget<br>
    ";

    // Initialize PHPMailer
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'sabanabegam0211@gmail.com'; // Your Gmail username
    $mail->Password = 'ppbisxmcvwlnxynu'; // Your Gmail password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('sabanabegam0211@gmail.com');
    $mail->addAddress('sabanabegam0211@gmail.com'); // Set recipient email address
    $mail->isHtml(true);
    $mail->Subject = 'Hotel Booking Inquiry';
    $mail->Body = $message;

     // Try to send the email

     if ($mail->send()) {
        echo "success";
    } else {
        echo "error";
    }



   
}
?>