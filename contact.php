<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


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
      <title>Contact Page | Modern Tourism Network</title>
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
               <div class="inner-baner-container" style="background-image: url(img/contact-bg1.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">CONTACT</h1>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>
            <!-- Inner Banner html end-->
           
            <!-- subscribe section html start -->
           <div class="container" style="min-height: max-content;min-width: auto;padding: 0;box-sizing: border-box;">
            <main>
               



                <div class="contact-page-section">
                    <div class="contact-form-inner">
                       <div class="container">
                          <div class="row">
                             <div class="col-md-6">
                                <div class="contact-from-wrap">
                                   <div class="section-heading">
                                      <h5 class="dash-style">GET IN TOUCH</h5>
                                      <h2>CONTACT US TO GET MORE INFO</h2>
                                      <p>Get in touch for details on planning your next adventure! Our team is ready to assist with destinations, pricing, and booking. Create unforgettable experiences with us!</p>
                                   </div>
                                  


                                 <form id="contactForm" class="contact-from" >
                                       <p>
                                          <input type="text" name="name" placeholder="Your Name*">
                                       </p>
                                       <p>
                                          <input type="email" name="email" placeholder="Your Email*">
                                       </p>
                                       <p>
                                          <textarea rows="8" placeholder="Your Message*" name="message"></textarea>
                                       </p>
                                       <p>
                                          <input type="submit" name="submit" id="contact_submit" value="SUBMIT MESSAGE">
                                       </p>
                                    </form>
<script>
$(document).ready(function(){
    $('#contactForm').submit(function(e){
        e.preventDefault();

        // Get form data
      //   var formData = $(this).serialize();
        const formData = new FormData(this);
        const formObject = Object.fromEntries(formData.entries());

                           //  console.log(formObject);

                            let numreg = /^(0|[1-9]\d*)$/
                            if(formObject.name.length<5){
                                validate  = false;
                                alert("Please enter a valid name minimum 5 letter");
                            }
                            else if(!formObject.email){
                              validate  = false;
                                alert("Please enter a email");
                            }
                            else if(!formObject.message){
                              validate  = false;
                                alert("Please enter a message");
                            }
                            else{
                                validate = true
                            }
        // Send form data using Axios to submit.php
        if(validate){
                                let subBtn = document.getElementById('contact_submit');
                            subBtn.value = 'sending....'
        axios.post('https://mtn-wldj.onrender.com/mtnsendEmail', formData)
            .then(function (response) {
                if(response.data.data == 'success'){
                    alert('Message sent successfully');
                                        let  a = document.getElementById("contactForm")
                                        subBtn.value = 'sended'
                                        a.reset();
                                        setTimeout(() => {
                                            subBtn.value = 'SUBMIT MESSAGE'
                                            
                                          }, 3000);
                } else {
                    alert('Error: Unable to send message check your internet');
                }
            })
            .catch(function (error) {
               //  alert('Error: ' + error);
               alert('something went wrong')
            });
         }
    });
});
</script>

                                   <!-- <form class="contact-from" action="contact.php" method="post">
                                      <p>
                                         <input type="text" name="name" placeholder="Your Name*">
                                      </p>
                                      <p>
                                         <input type="email" name="email" placeholder="Your Email*">
                                      </p>
                                      <p>
                                         <textarea rows="8" placeholder="Your Message*"  name="message"></textarea>
                                      </p>
                                      <p>
                                         <input type="submit" name="submit" value="SUBMIT MESSAGE">
                                      </p>
                                   </form> -->
                                </div>
                             </div>
                             <div class="col-md-6">
                                <div class="contact-detail-wrap">
                                   <h3>Need help ?? Feel free to contact us !</h3>
                                   <p>If you need assistance or have any inquiries, don't hesitate to reach out to us! Our dedicated team is here to help you every step of the way. Whether you're planning your next adventure, looking for travel advice, or have questions about our services, we're ready to provide you with the support you need.</p>
                                   <p>  Your satisfaction is our priority, and we're committed to ensuring that your experience with us is seamless and enjoyable. Contact us today, and let us assist you in making your travel dreams a reality!
                                 </p>
                             


                                   <div class="details-list">
                                      <ul>
                                         <li>
                                            <span class="icon">
                                               <i class="fas fa-map-signs"></i>
                                            </span>
                                            <div class="details-content">
                                               <h4>Location Address</h4>
                                               <span>No.34, 2nd floor,Nagappa Nagar,1st
                                                
                                                Main Road,Chromepet,Chennai -600 044</span>
                                            </div>
                                         </li>
                                         <li>
                                            <span class="icon">
                                               <i class="fas fa-envelope-open-text"></i>
                                            </span>
                                            <div class="details-content">
                                               <h4>Email Address</h4>
                                               <span>support@mtnbookings.com
                                                infomoderntourismnetwork@gmail.com
                                               </span>
                                            </div>
                                         </li>
                                         <li>
                                            <span class="icon">
                                               <i class="fas fa-phone-volume"></i>
                                            </span>
                                            <div class="details-content">
                                               <h4>Phone Number</h4>
                                               <span> Mobile: +91 9489714476  <br> +91 9445204433 </span>

                                            </div>
                                         </li>
                                      </ul>
                                   </div>
                                   <div class="contct-social social-links">
                                      <h3>Follow us on social media..</h3>
                                      <ul>
                                       <li><a href="https://www.facebook.com/mtnresorts.in"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                       <li><a href="https://www.instagram.com/moderntourismnetwork?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                       <li><a href="https://www.linkedin.com/company/mtnmoderntourismnetwork/"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                       <li><a href="https://twitter.com/modern_tourism_"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                      </ul>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="map-section">
                      

                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.2624543549978!2d80.13468413561287!3d12.95505044711673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525fb102227b4f%3A0x82fe3195f7d9f7f3!2s34%2C%201st%20Main%20Rd%2C%20Nagappa%20Nagar%2C%20Chromepet%2C%20Chennai%2C%20Tamil%20Nadu%20600044!5e0!3m2!1sen!2sin!4v1707459539749!5m2!1sen!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                 </div>






                
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
      <script 
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
      crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      
   </body>
</html>