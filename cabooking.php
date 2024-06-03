<!doctype html>
<html lang="en">
   <head>
   <?php include('components/head.html')?>

      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- favicon -->
      <link rel="icon" type="image/png" href="img/mtn_logo.jpg">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" media="all">
      <!-- Fonts Awesome CSS -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/fontawesome/css/all.min.css">
      <!-- jquery-ui css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/jquery-ui/jquery-ui.min.css">
      <!-- modal video css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/modal-video/modal-video.min.css">
      <!-- light box css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/lightbox/dist/css/lightbox.min.css">
      <!-- slick slider css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick.css">
      <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick-theme.css">
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="style.css">
      <title>Cab Booking | Modern Tourism Network</title>
   </head>
   <body>
    <div id="siteLoader" class="site-loader">
        <div class="preloader-content">
           <img src="assets/images/loader1.gif" alt="">
        </div>
     </div>
     <div id="page" class="full-page">
     <?php  include ("components/header.php")?>


         <main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(img/cab1.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">CAB BOOKING </h1>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>
            <!-- Inner Banner html end-->
           
            <!-- subscribe section html start -->
           <div class="container" style="min-height: max-content;min-width: 100vw;padding: 0;box-sizing: border-box;">
            <main>
               
                <section class="content">
                    <h1>Ride in Comfort, Arrive in Style</h1>
                    <h2>Book Your Cab with Ease</h2><br>
                    <div class="container">
                    <p >
                     Enjoy a comfortable and convenient ride with our cab booking service. Whether you need a ride to the airport, a business meeting, or a night out on the town, we've got you covered. Choose from a range of vehicles and book your cab with ease. Our professional drivers will ensure you reach your destination safely and on time. Experience hassle-free travel with our cab booking service.
                    </p>
                  </div>
                </section>
                <?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'phpform/phpmailer/src/Exception.php';
// require 'phpform/phpmailer/src/PHPMailer.php';
// require 'phpform/phpmailer/src/SMTP.php';

// if(isset($_POST["submit"])){
//     // Get form input values
//     $email = $_POST['email'];
//     $name = $_POST['name'];
//     $pickup = $_POST['pickup'];
//     $drop = $_POST['drop'];
//     $tripType = isset($_POST['flex']) ? $_POST['flex'] : '';
//     $pickupDate = $_POST['fromDate'];
//     $dropDate = $_POST['toDate'];
//     $adults = $_POST['adult'];
//     $child = $_POST['child'];
//     $location = $_POST['Location'];

//     // Construct message body
//     $message = "
//         Name: $name<br>
//         Email: $email<br>
//         Pickup Location: $pickup<br>
//         Drop Location: $drop<br>
//         Trip Type: $tripType<br>
//         Pickup Date: $pickupDate<br>
//         Drop Date: $dropDate<br>
//         Adults: $adults<br>
//         Child: $child<br>
//         Location: $location<br>
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
//     $mail->Subject = 'Cab Booking Enquiry';
//     $mail->Body = $message;

//     // Try to send the email
//     if($mail->send()) {
//         echo "
//             <script>
//                 alert('Email sent successfully');
//                 document.location.href = 'cabooking.php';
//             </script>
//         ";
//     } else {
//         echo "
//             <script>
//                 alert('Error: Unable to send email');
//             </script>
//         ";
//     }

// }

?>


<?php include('components/cabform.php')?>
<script>
   let roundDate = document.getElementById("dateInput");
        roundDate.disabled=true;
        roundDate.classList.add("disable");
        console.log(roundDate)
        //radio values
        ;
        let singleTrip = document.getElementById("singletrip");
        console.log(singleTrip);
        singleTrip.addEventListener('click', (e) => {
          if (e.target.value="singletrip"){
            roundDate.disabled=true;
            roundDate.classList.add("disable");
          }
           console.log(e.target.value);
        });
        let roundTrip = document.getElementById("roundtrip");
        roundTrip.addEventListener('click', (e) => {
          console.log(e.target.value);
          if (e.target.value="RoundTrip"){
            roundDate.disabled=false;
            roundDate.classList.remove("disable");
          }
        });
        
        console.log(roundTrip);
        console.log(roundDate);
</script>   
             </main>
            </div>
            <!-- subscribe html end -->
         </main>
         <?php include ("components/footer.php")?>

          <a id="backTotop" href="#" class="to-top-icon">
            <i class="fas fa-chevron-up"></i>
          </a>
         <!-- custom search field html -->
         <div class="header-search-form">
            <div class="container">
               <div class="header-search-container">
                  <form class="search-form" role="search" method="get" >
                     <input type="text" name="s" placeholder="Enter your text...">
                  </form>
                  <a href="#" class="search-close">
                     <i class="fas fa-times"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- header html end -->
      </div>
      <!-- <script>
  function validateForm() {
    var email = document.forms["emailContact"]["email"].value;
    var name = document.forms["emailContact"]["name"].value;
    var pickup = document.forms["emailContact"]["pickup"].value;
    var drop = document.forms["emailContact"]["drop"].value;
    var fromDate = document.forms["emailContact"]["fromDate"].value;
    var adult = document.forms["emailContact"]["adult"].value;
    var child = document.forms["emailContact"]["child"].value;

    if (email == "") {
      alert("Email must be filled out");
      return false;
    }
    if (name == "") {
      alert("Name must be filled out");
      return false;
    }
    if (pickup == "") {
      alert("Pickup location must be filled out");
      return false;
    }
    if (drop == "") {
      alert("Drop location must be filled out");
      return false;
    }
    if (fromDate == "") {
      alert("From date must be filled out");
      return false;
    }
    if (adult == "") {
      alert("Number of adults must be filled out");
      return false;
    }
    if (child == "") {
      alert("Number of children must be filled out");
      return false;
    }
  }
</script> -->

      <!-- JavaScript -->
      <script src="assets/js/jquery.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
      <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/vendors/jquery-ui/jquery-ui.min.js"></script>
      <script src="assets/vendors/countdown-date-loop-counter/loopcounter.js"></script>
      <script src="assets/js/jquery.counterup.js"></script>
      <script src="assets/vendors/modal-video/jquery-modal-video.min.js"></script>
      <script src="assets/vendors/masonry/masonry.pkgd.min.js"></script>
      <script src="assets/vendors/lightbox/dist/js/lightbox.min.js"></script>
      <script src="assets/vendors/slick/slick.min.js"></script>
      <script src="assets/js/jquery.slicknav.js"></script>
      <script src="assets/js/custom.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      
   </body>
</html>