<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// if(isset($_POST["submit"])){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form input values
    $name = $_POST['name_booking'];
    $email = $_POST['email_booking'];
    $phone = $_POST['phone_booking'];
    $date = $_POST['s'];
    // Get selected options
    $options = "";
    if(isset($_POST['tour_guide'])) {
        $options .= "Tour guide, ";
    }
    if(isset($_POST['insurance'])) {
        $options .= "Insurance, ";
    }
    if(isset($_POST['dinner'])) {
        $options .= "Dinner, ";
    }
    if(isset($_POST['bike_rent'])) {
        $options .= "Bike rent";
    }

    // Construct message body
    $messageBody = "
        Name: $name<br>
        Email: $email<br>
        Phone: $phone<br>
        Date: $date<br>
        Options: $options<br>
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
    $mail->Subject = 'Booking Enquiry';
    $mail->Body = $messageBody;

     // Try to send the email

     if ($mail->send()) {
        echo "success";
    } else {
        echo "error";
    }



   
}
?>