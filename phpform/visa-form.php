<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// if(isset($_POST["submit"])){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form input values
   //  $email = $_POST['email'];
    $name = $_POST['name'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    $trip_way = $_POST['fav_language'];
    $travel_date = $_POST['travel-date'];
    $round_date = $_POST['round-date'];
    $no_adults = $_POST['no-adults'];
    $no_kids = $_POST['no-kids'];
    $no_infants = $_POST['no-infants'];
    $visa_type = $_POST['visa-type'];

    // Construct message body
    $message = "
      
        Name: $name<br>
        From: $from<br>
        To: $to<br>
        Trip Way: $trip_way<br>
        Travel Date: $travel_date<br>
        Round Date: $round_date<br>
        No of Adults: $no_adults<br>
        No of Kids: $no_kids<br>
        No of Infants: $no_infants<br>
        Visa Type: $visa_type<br>
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
    $mail->Subject = 'Travel Booking Enquiry';
    $mail->Body = $message;

   // Try to send the email

   if ($mail->send()) {
    echo "success";
} else {
    echo "error";
}




}
?>