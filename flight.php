<!doctype html>
<html lang="en">
   <head>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
   
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
      <title>Flight Booking Page | Modern Tourism Network</title>
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
               <div class="inner-baner-container" style="background-image: url(img/flight-bgimg.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">FLIGHT</h1>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>
            <!-- Inner Banner html end-->
            <section class="content">
               <h1>Discover Your Next Adventure</h1>
               <h2>Book Your Flights with Ease</h2><br>
               <div class="container">
               <p>
            Plan your next journey with our hassle-free flight booking service. Whether you're jetting off for a business trip or a leisurely getaway, we've got you covered. Choose from a wide selection of airlines and destinations, and book your flights with just a few clicks. Enjoy peace of mind with our secure booking process and 24/7 customer support. Start your adventure today!
               </p>
              </div>
           </section>
            <!-- subscribe section html start -->
           <div class="f1-container" style="min-height: max-content;min-width: auto;padding: 0;box-sizing: border-box;">
            <main>
               
                <div class="card shadow p-3 mb-5 bg-body rounded" style="background-image: url(img/dubaii.jpg)!important;   background :no-repeat;
                background-size: cover ;
              background-attachment: fixed;
              ">
<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'phpform/phpmailer/src/Exception.php';
// require 'phpform/phpmailer/src/PHPMailer.php';
// require 'phpform/phpmailer/src/SMTP.php';

// if(isset($_POST["send"])){

    
//     $name = $_POST['name'];
//     $phone = $_POST['phone'];
//     $fromLocation = $_POST['fromLocation'];
//     $toLocation = $_POST['toLocation'];
//     $tripType = isset($_POST['strip']) ? $_POST['strip'] : '';
//     $fromDate = $_POST['fromDate'];
//     $toDate = $_POST['toDate'];
//     $adults = $_POST['adults'];
//     $child = $_POST['child'];
//     $infant = $_POST['infant'];


//     $message = "
//         Name: $name<br>
//         Phone Number: $phone<br>
//         From Location: $fromLocation<br>
//         To Location: $toLocation<br>
//         Trip Type: $tripType<br>
//         From Date: $fromDate<br>
//         To Date: $toDate<br>
//         Adults: $adults<br>
//         Child: $child<br>
//         Infant: $infant<br>
//     ";

//     $mail = new PHPMailer(true);
//     $mail->isSMTP();
//     $mail->Host = 'smtp.gmail.com';
//     $mail->SMTPAuth = true;
//     $mail->Username = 'sabanabegam0211@gmail.com';
//     $mail->Password = 'ppbisxmcvwlnxynu';
//     $mail->SMTPSecure = 'ssl';
//     $mail->Port = 465;
//     $mail->setFrom('sabanabegam0211@gmail.com');
//     $mail->addAddress('sabanabegam0211@gmail.com');
//     $mail->isHtml(true);
//     $mail->Subject = 'Flight Booking';
//     $mail->Body = $message;

//     if($mail->send()) {
//         echo "
//             <script>
//                 alert('Email sent successfully');
//                 document.location.href = 'flight.php';
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





                          <!-- flight FORM  -->
                          <?php include ("components/flightforms.php")?>


                          



                               
                </div>
                
                
                <br><br><br>
                <div class="container">
                  <div class="card shadow p-3 mb-5 bg-body rounded">
                    <h2 class="  content">Top India Destination for you</h2>
                    <p class="text-dark new" style="   margin-top: 4px;  text-align: justify;">
                      Thomas Cook enables customers to efficiently book flights to approximately
                      <b>70 plus</b> destinations in the country. The top domestic destinations include
                      <span id="dots" class="text-dark new">...</span><span id="more" class="text-dark new">Ahmadabad, Port-Blair, Delhi, Guwahati, Cochin, Goa, Bagdogra and Jaipur. When it comes to choosing <b>domestic flights</b>, one should consider the following factors: preference of airline, class of travel, price, baggage allowance, food and on-board entertainment. The aforementioned factors will aid in making the most optimal decision.</span>
                    </p>
                    <a href="javascript:void(0);" onclick="myFunction()" id="myBtn">Read more</a>
                
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 mt-5">
                      <div class="col mb-4">
                        <div class="card mx-auto">
                          <img src="img/goa.jpg" class="flight-img card-img-top photos" alt="...">
                          <div class="card-body">
                            <h5 class="card-title text-primary">Goa Flights</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col mb-4">
                        <div class="card mx-auto">
                          <img src="img/manali.jpg" class=" flight-img card-img-top photos" alt="...">
                          <div class="card-body">
                            <h5 class="card-title text-primary">Manali Flights</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col mb-4">
                        <div class="card mx-auto">
                          <img src="img/Ahmedabad.jpg" class=" flight-img card-img-top photos" alt="...">
                          <div class="card-body">
                            <h5 class="card-title text-primary">Ahmedabad Flights</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col mb-4">
                        <div class="card mx-auto">
                          <img src="img/cochin.jpg" class=" flight-img card-img-top photos" alt="...">
                          <div class="card-body">
                            <h5 class="card-title text-primary">Cochin Flights</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col mb-4">
                        <div class="card mx-auto">
                          <img src="img/delhi.jpg" class=" flight-img card-img-top photos" alt="...">
                          <div class="card-body">
                            <h5 class="card-title text-primary">Delhi Flights</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col mb-4">
                        <div class="card mx-auto">
                          <img src="img/gangtok.jpg" class="flight-img card-img-top photos" alt="...">
                          <div class="card-body">
                            <h5 class="card-title text-primary">Gangtok Flights</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col mb-4">
                        <div class="card mx-auto">
                          <img src="img/guwahati.jpg" class=" flight-img card-img-top photos" alt="...">
                          <div class="card-body">
                            <h5 class="card-title text-primary">Guwahati Flights</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col mb-4">
                        <div class="card mx-auto">
                          <img src="img/portblair.jpg" class=" flight-img card-img-top photos" alt="...">
                          <div class="card-body">
                            <h5 class="card-title text-primary">Portblair Flights</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <br><br><br>
                
                <div class="container">
                  <div class="card shadow p-3 mb-5 bg-body rounded">
                    <h2 class="content">Top International Destination for you</h2>
                    <p class="text-dark " style="margin-top: 4px;  text-align: justify;">Thomas Cook enables customers to efficiently book flights to approximately <b>70 plus</b> destinations in the country. The top domestic destinations include <span id="dots2" class="text-dark">...</span><span id="more2" class="text-dark">Ahmadabad, Port-Blair, Delhi, Guwahati, Cochin, Goa, Bagdogra and Jaipur. When it comes to choosing <b>domestic flights</b>, one should consider the following factors: preference of airline, class of travel, price, baggage allowance, food and on-board entertainment. The aforementioned factors will aid in making the most optimal decision.</span></p>
                <a href="javascript:void(0);" onclick="myFunction2()" id="myBtn2">Read more</a>
                
                
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 mt-5">
                      <div class="col mb-4">
                        <div class="card">
                          <img src="img/burjkhalifa.jpg" class="flight-img card-img-top photos flight-img" alt="...">
                          <div class="card-body">
                            <h5 class="card-title text-primary">Dubai Flights</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col mb-4">
                        <div class="card">
                          <img src="img/australia.jpg" class="flight-img card-img-top photos" alt="...">
                          <div class="card-body">
                            <h5 class="card-title text-primary">Australia Flights</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col mb-4">
                        <div class="card">
                          <img src="img/bali.jpg" class="flight-img card-img-top photos" alt="...">
                          <div class="card-body">
                            <h5 class="card-title text-primary">Bali Flights</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col mb-4">
                        <div class="card">
                          <img src="img/bangkok.jpg" class="flight-img card-img-top photos" alt="...">
                          <div class="card-body">
                            <h5 class="card-title text-primary">Bangkok Flights</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col mb-4">
                        <div class="card">
                          <img src="img/istanbul.jpg" class="flight-img card-img-top photos" alt="...">
                          <div class="card-body">
                            <h5 class="card-title text-primary">Istanbul Flights</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col mb-4">
                        <div class="card">
                          <img src="img/singapore.jpg" class="flight-img card-img-top photos" alt="...">
                          <div class="card-body">
                            <h5 class="card-title text-primary">Singapore Flights</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col mb-4">
                        <div class="card">
                          <img src="img/kualalumpur.jpg" class="flight-img card-img-top photos" alt="...">
                          <div class="card-body">
                            <h5 class="card-title text-primary">Kuala Lumpur Flights</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col mb-4">
                        <div class="card">
                          <img src="img/mauritius.jpg" class="flight-img card-img-top photos" alt="...">
                          <div class="card-body">
                            <h5 class="card-title text-primary">Mauritius Flights</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                
                <div class="container-md">
                
                  <h2 class=" content">Book International and Domestic Flight Tickets from the Comfort of your home </h2>
                  <p class=" text-dark">Over the last decade, there has been a significant spike in the number of Indian flyers. Owing to the reach of the internet, people are becoming aware of the various global tourist locations, and the internet has also made flight ticket booking child’s play. Forget the hassle of going to your travel dealer; you can <span id="dots3" class=" text-dark">...</span><span id="more3" class=" text-dark">now book flights online at Thomas Cook at the most competitive prices. If you are looking to make flight bookings, then we’ve great flight offers for you! Whether domestic or international, you can browse through our wide range of airlines, compare their prices, and choose the one that fits your bill. That’s not all, you can set a price alert and we’ll notify you when the prices drop, making travel even more cost-effective. You can also set your preferences and look at direct flights only or book your connecting flight ticket. If you are looking for a bargain deal on flight bookings, then you can use our lowest fare calculator and know the dates in the next 12 months, when the flight tickets would be the cheapest. If you are a flexible traveler, then this option will help you save thousands. Thomas Cook aims at making flight bookings seamless and faster. Whether you’re in an elevator or in the train, you can book flights online on the Thomas Cook website.</span></p>
                  <a href="javascript:void(0);" onclick="myFunction3()" id="myBtn3">Read more</a>
                </div>
                <br>
                
                
                









                
             </main>
            </div>
            <!-- subscribe html end -->
         </main>
       <footer id="colophon" class="site-footer footer-primary">
            <div class="top-footer">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-3 col-md-6">
                        <aside class="widget widget_text">
                           <h3 class="widget-title">
                              About Travel
                           </h3>
                           <div class="textwidget widget-text">
                            MTN Travels offers premier curated adventures and personalized itineraries, ensuring unparalleled experiences for discerning travelers, with a focus on luxury, authenticity, and tailored journeys to individual preferences and interests...
                           </div>
                           <div class="award-img">
                              <a href="#"><img src="assets/images/logo6.png" alt=""></a>
                              <a href="#"><img src="assets/images/logo2.png" alt=""></a>
                           </div>
                        </aside>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <aside class="widget widget_text">
                           <h3 class="widget-title">CONTACT INFORMATION</h3>
                           <div class="textwidget widget-text">
                              <ul>
                                 <li>
                                    <a href="#">
                                       <i class="fas fa-phone-alt"></i>
                                       +91 9489714476
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <i class="fas fa-envelope"></i>
                                       support@mtnbookings.com
                                    </a>
                                 </li>
                                 <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    No.34,2nd floor
                                    <br>
                                    Nagappa Nagar, <br>1st Main Road, <br>Chromepet, <br>Chennai -600 044
                                 </li>
                              </ul>
                           </div>
                        </aside>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <aside class="widget widget_recent_post">
                           <h3 class="widget-title">Our group of companies</h3>
                           <ul>
                              <li>
                               
                                 <p>LIP properties Pvt Ltd</p>
                                 <p>Signmedia Infotech</p>
                                 <p>Siddha Suththi Arockya Saalai</p>
                                 <p>Addsbazar Classifieds Pvt Ltd</p>
                                 <p>Wise global real-estate LLC Dubai</p>

          
                              </li>
                              
                           </ul>
                        </aside>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <aside class="widget widget_newslatter">
                           <h3 class="widget-title">SUBSCRIBE US</h3>
                           <div class="widget-text">
                           </div>
                           <form class="newslatter-form">
                              <input type="email" name="s" placeholder="Your Email..">
                              <input type="submit" name="s" value="SUBSCRIBE NOW">
                           </form>
                        </aside>
                     </div>
                  </div>
               </div>
            </div>
            <div class="buttom-footer">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-md-5">
                        <div class="footer-menu">
                           <ul>
                              <li>
                                 <a href="#">Privacy Policy</a>
                              </li>
                              <li>
                                 <a href="#">Term & Condition</a>
                              </li>
                              <li>
                                 <a href="#">FAQ</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-2 text-center">
                        <div class="footer-logo">
                          <a href="index.php">
                            <img class="black-logo flogo" src="img/mtn_logo.jpg" alt="logo">
                         </a>
                        </div>
                     </div>
                     <div class="col-md-5">
                        <div class="copy-right text-right">Copyright © 2024 MTN. All Rights Reserved.</div>
                     </div>
                  </div>
               </div>
            </div>
          </footer>
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
        let roundDate = document.getElementById("toDate");
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
        
        
        /////
        
        function myFunction() {
          var dots = document.getElementById("dots");
          var moreText = document.getElementById("more");
          var btnText = document.getElementById("myBtn");
        
          if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
          } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
          }
        }
        function myFunction2() {
          var dots2 = document.getElementById("dots2");
          var moreText2 = document.getElementById("more2");
          var btnText2 = document.getElementById("myBtn2");
        
          if (dots2.style.display === "none") {
            dots2.style.display = "inline";
            btnText2.innerHTML = "Read more";
            moreText2.style.display = "none";
          } else {
            dots2.style.display = "none";
            btnText2.innerHTML = "Read less";
            moreText2.style.display = "inline";
          }
        }
        
        function myFunction3() {
          var dots3 = document.getElementById("dots3");
          var moreText3 = document.getElementById("more3");
          var btnText3 = document.getElementById("myBtn3");
        
          if (dots3.style.display === "none") {
            dots3.style.display = "inline";
            btnText3.innerHTML = "Read more";
            moreText3.style.display = "none";
          } else {
            dots3.style.display = "none";
            btnText3.innerHTML = "Read less";
            moreText3.style.display = "inline";
          }
        }
        // funtion singletrip(){
        //   // let roundtrip = document.getElementById('roundtrip')
        //   console.log(roundtrip);
        // }
        
        </script>
        <script>
        // $(document).ready(function () {
        //   $("#fromDate, #toDate").datepicker({
        //     dateFormat: "dd-mm-yy",
        //     duration: "fast"
        //   });
        // });
        
        
        
        </script>
        


      <!-- JavaScript -->
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
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
      <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      
      
   </body>
</html>