<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpform/phpmailer/src/Exception.php';
require 'phpform/phpmailer/src/PHPMailer.php';
require 'phpform/phpmailer/src/SMTP.php';

// if(isset($_POST["submit"])){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form input values
    $email = $_POST['email'];
    $name = $_POST['name'];
    $pickup = $_POST['pickup'];
    $drop = $_POST['drop'];
    $tripType = isset($_POST['flex']) ? $_POST['flex'] : '';
    $pickupDate = $_POST['fromDate'];
    $dropDate = $_POST['toDate'];
    $adults = $_POST['adult'];
    $child = $_POST['child'];
    $location = $_POST['Location'];

    // Construct message body
    $message = "
        Name: $name<br>
        Email: $email<br>
        Pickup Location: $pickup<br>
        Drop Location: $drop<br>
        Trip Type: $tripType<br>
        Pickup Date: $pickupDate<br>
        Drop Date: $dropDate<br>
        Adults: $adults<br>
        Child: $child<br>
        Location: $location<br>
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
    $mail->Subject = 'Cab Booking Enquiry';
    $mail->Body = $message;

     // Try to send the email

     if ($mail->send()) {
        echo "success";
    } else {
        echo "error";
    }



   
}
?>