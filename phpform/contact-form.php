<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// if(isset($_POST["submit"])){
//     // Get form input values
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $message = $_POST['message'];
   

//     // Construct message body
//     $messageBody = "
//         Name: $name<br>
        
//         Email: $email<br>
//         Message: $message<br>
       
//     ";

//     // Initialize PHPMailer
//     $mail = new PHPMailer(true);
//     $mail->isSMTP();
//     $mail->Host = 'smtp.gmail.com';
//     $mail->SMTPAuth = true;
//     $mail->Username = 'sabanabegam0211@gmail.com'; // Your Gmail username
//     $mail->Password = 'ppbisxmcvwlnxynu'; // Your Gmail password
//     $mail->SMTPSecure = 'ssl';
//     $mail->Port = 465;
//     $mail->setFrom('sabanabegam0211@gmail.com');
//     $mail->addAddress('sabanabegam0211@gmail.com'); // Set recipient email address
//     $mail->isHtml(true);
//     $mail->Subject = 'Booking Enquiry';
//     $mail->Body = $messageBody;

//     // Try to send the email
//     if($mail->send()) {
//         echo "success";
//     } else {
//         echo "error";
//     }
// }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form input values
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Construct message body
    $messageBody = "
        Name: $name<br>
        
        Email: $email<br>
        Message: $message<br>
       
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
