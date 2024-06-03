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
      <title>Kodaikanal Packages | Modern Tourism Network</title>
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
               <div class="inner-baner-container" style="background-image: url(img\resort\ecr.webp);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">ECR Resort
                           
                           </h1>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>
            <div style="text-align: center;">
    <!-- <h2>Under Construction</h2>
    <p>This page is currently under construction. Please check back later.</p> -->
    <img src="img\resort\commingsoon.jpg" style="margin-left: auto; margin-right: auto; display: block;" alt="Under Construction">
</div>

            
      
                          
<br><br><br><br>




                           
          
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
      <script>
         let url = window.location.href
         let starWrap = document.querySelectorAll('.start-wrap')
         starWrap[0].remove() 
         // getting value from query===========
         let package = url.split('?')[1].split('&')[0].split('=')[1]
         let cost = url.split('?')[1].split('&')[1].split('=')[1]
         // console.log(package,cost);
 
         // getting into dom==================
         let packgePrice=document.querySelectorAll('.package-price .price')
         // console.log(packgePrice[0]);
 
         if(package==='honeymoon'){
            // console.log('l');
            // logic starts here=======
            let price=packgePrice[0].querySelectorAll('span')
            // Select the ul element
const ulElement = document.querySelector('.package-meta ul');

// Remove the second li element (index 1)
ulElement.removeChild(ulElement.children[1]);

            let textNode = document.createTextNode("Package Starts From -")
            packgePrice[0].innerHTML=''
            packgePrice[0].appendChild(textNode)
            packgePrice[0].appendChild(document.createElement('br'))
            packgePrice[0].appendChild(price[0])
            price[0].innerText = " ₹ "+cost +' /- Couples'
            // let span = price[0].appendChild(document.createElement('h5'))
            // span.className='price'
            // span.innerHTML="Package"
            // console.log(price[0]);
         }
        
      </script>
   </body>
</html>