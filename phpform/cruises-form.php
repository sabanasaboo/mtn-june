<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpform/phpmailer/src/Exception.php';
require 'phpform/phpmailer/src/PHPMailer.php';
require 'phpform/phpmailer/src/SMTP.php';

// if(isset($_POST["submit"])){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form input values
    $name = $_POST['name_booking'];
    $email = $_POST['email_booking'];
    $phone = $_POST['phone_booking'];
    $destination = $_POST['destination'];
    $dateOfTravel = $_POST['s'];
    $numberOfDays = $_POST['number_of_days'];
    $numberOfAdults = $_POST['number_of_adults'];
    $numberOfChildren = $_POST['number_of_children'];

    // Construct message body
    $message = "
        Full Name: $name<br>
        Email: $email<br>
        Mobile Number: $phone<br>
        Destination: $destination<br>
        Date of Travel: $dateOfTravel<br>
        Number of Days: $numberOfDays<br>
        Number of Adults: $numberOfAdults<br>
        Number of Children: $numberOfChildren<br>
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
    $mail->Body = $message;

     // Try to send the email

     if ($mail->send()) {
        echo "success";
    } else {
        echo "error";
    }



   
}
?>