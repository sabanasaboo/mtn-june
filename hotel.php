<!doctype html>
<html lang="en">
<?php include('components/head.html')?>

   <head>
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
      <title>Hotels Page | Modern Tourism Network</title>
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
               <div class="inner-baner-container" style="background-image: url(img/hotel-bg1.png);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">Hotel Booking </h1>
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
                    <h1>Your Home Away From Home</h1>
                    <h2>Book Your Stay with Ease</h2><br>
                    <div class="container">
                    <p>
                     Find the perfect accommodation for your next trip with our hotel booking service. Whether you're looking for a luxurious resort, a cozy bed and breakfast, or a budget-friendly hotel, we have options to suit every traveler. Book your stay with ease and enjoy a comfortable and relaxing experience. Our user-friendly platform makes it simple to find and reserve your ideal hotel. Start planning your trip today and make your stay memorable.
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
//     $name = $_POST['name'];
//     $number = $_POST['number'];
//     $email = $_POST['email'];
//     $location = $_POST['location'];
//     $plan = $_POST['plan'];
//     $check_in = $_POST['check-in'];
//     $check_out = $_POST['check-out'];
//     $adults = $_POST['adults'];
//     $child = $_POST['child'];
//     $budget = $_POST['budget'];

//     // Construct message body
//     $message = "
//         Name: $name<br>
//         Number of Customers: $number<br>
//         Email: $email<br>
//         Location: $location<br>
//         Plan To: $plan<br>
//         Check In Date: $check_in<br>
//         Check Out Date: $check_out<br>
//         Adults: $adults<br>
//         Child: $child<br>
//         Budget: $budget<br>
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
//     $mail->Subject = 'Hotel Booking Inquiry';
//     $mail->Body = $message;

//     // Try to send the email
//     if($mail->send()) {
//         echo "
//             <script>
//                 alert('Email sent successfully');
//                 // Redirect to a thank you page
//                 window.location.href = 'hotel.php';
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



<?php include ("components/hotelform.php") ?>








                
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
      <script>
        $( function() {
  $( "#datepicker" ).datepicker({
      dateFormat: "dd-mm-yy"
      ,	duration: "fast"
  });
  $( "#datepicker1" ).datepicker({
      dateFormat: "dd-mm-yy"
      ,	duration: "fast"
  });
} );
$("#datepicker").change((e)=>{console.log(e.target.value);})
  </script>
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