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
    $email = $_POST['email'];
    $travelDate = $_POST['travel-date'];
    $number = $_POST['number'];
    $currency = $_POST['currency'];
    $amount = $_POST['amount'];

    // Construct message body
    $message = "
        Name: $name<br>
        Email: $email<br>
        Travel Date: $travelDate<br>
        Number: $number<br>
        Currency Type: $currency<br>
        Amount (INR): $amount<br>
    ";

    // Initialize PHPMailer
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'your_email@gmail.com'; // Your Gmail username
    $mail->Password = 'your_password'; // Your Gmail password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('your_email@gmail.com');
    $mail->addAddress('recipient_email@example.com'); // Set recipient email address
    $mail->isHtml(true);
    $mail->Subject = 'Forex Enquiry';
    $mail->Body = $message;

     // Try to send the email

     if ($mail->send()) {
        echo "success";
    } else {
        echo "error";
    }



   
}
?>