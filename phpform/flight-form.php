

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpform/phpmailer/src/Exception.php';
require 'phpform/phpmailer/src/PHPMailer.php';
require 'phpform/phpmailer/src/SMTP.php';

// if(isset($_POST["send"])){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {


    
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $fromLocation = $_POST['fromLocation'];
    $toLocation = $_POST['toLocation'];
    $tripType = isset($_POST['strip']) ? $_POST['strip'] : '';
    $fromDate = $_POST['fromDate'];
    $toDate = $_POST['toDate'];
    $adults = $_POST['adults'];
    $child = $_POST['child'];
    $infant = $_POST['infant'];


    $message = "
        Name: $name<br>
        Phone Number: $phone<br>
        From Location: $fromLocation<br>
        To Location: $toLocation<br>
        Trip Type: $tripType<br>
        From Date: $fromDate<br>
        To Date: $toDate<br>
        Adults: $adults<br>
        Child: $child<br>
        Infant: $infant<br>
    ";

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'sabanabegam0211@gmail.com';
    $mail->Password = 'ppbisxmcvwlnxynu';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('sabanabegam0211@gmail.com');
    $mail->addAddress('sabanabegam0211@gmail.com');
    $mail->isHtml(true);
    $mail->Subject = 'Flight Booking';
    $mail->Body = $message;

    // Try to send the email

    if ($mail->send()) {
        echo "success";
    } else {
        echo "error";
    }



   
}
?>