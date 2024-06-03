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
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $email = $_POST['email_booking'];
    $phone = $_POST['phone_booking'];
    $address = $_POST['Address'];
    $date = $_POST['s'];
    $age = $_POST['age'];
    $martialStatus = isset($_POST['martialStatus']) ? $_POST['martialStatus'] : '';
    $emiPackage = $_POST['Location'];
    $emiAmount = $_POST['emiAmount'];
    $emiMonths = $_POST['emiMonths'];
    $paymentMethod = isset($_POST['payment']) ? $_POST['payment'] : '';
    $refPersonName = $_POST['refPersonName'];
    $refPersonPhone = $_POST['refPersonPhone'];

    // Construct message body
    $messageBody = "
        Name: $name<br>
        Gender: $gender<br>
        Email: $email<br>
        Phone: $phone<br>
        Address: $address<br>
        Date: $date<br>
        Age: $age<br>
        Martial Status: $martialStatus<br>
        EMI Package: $emiPackage<br>
        EMI Amount: $emiAmount<br>
        EMI Months: $emiMonths<br>
        Payment Method: $paymentMethod<br>
        Referral Person Name: $refPersonName<br>
        Referral Person Phone: $refPersonPhone<br>
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