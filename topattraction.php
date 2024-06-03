<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
      <title>Top Attraction Page | Modern Tourism Network</title>
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
               <div class="inner-baner-container" style="background-image: url(img/semmozhi-poonga.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">TOP ATTRACTIONS</h1>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>
            <!-- Inner Banner html end-->
           
            <!-- subscribe section html start -->
           <div class="topattraction-container" style="min-height: max-content;min-width: auto;box-sizing: border-box;">
            <main>
               

               <div class="row">
                  <div class="col-lg-2"></div>
                  <div class="col-lg-8">
                     <h2>Places to Visit our Location</h2>
                     <div class="input-group mb-3" style="width: auto;">
                        <div class="input-group-prepend">
                           <span class="input-group-text " style="height:38px;" id="search-icon">
                           <i class="fa-solid fa-magnifying-glass"></i>
                           </span>
                        </div>
                        <select id="Location" name="Location" class="form-control rounded-0">
                           <option value="">Enter your location</option>
                           <option value="centralrailway">Chennai Central Railway Station</option>
                           <option value="eamall">Express Avenue Mall</option>
                           <option value="guindy">Guindy Snake Park</option>
                           <option value="pondy">Pondy Bazaar</option>
                           <option value="vgp">VGP Marine Kingdom</option>
                        </select>
                     </div>
                     <br>
         
         <div id="parent">
                     <div class="row kapal city" id="kapal">
                        <div class="col-lg-6">
                           <div id="carouselExample1" class="carousel slide">
                              <div class="carousel-inner">
                                 <div class="carousel-item active"> <img src="img/kapaleeshwarar-2.jpg" style="height:300px!important;width:100%;object-fit: cover; " alt="..."> </div>
                                 <div class="carousel-item"> <img src="img/kapaleeshwarar-1.jpg" style="height: 300px!important;width:100%;width:100%;object-fit: cover; " alt="..."> </div>
                                 <div class="carousel-item"> <img src="img/kapaleeshwarar-3.jpg" style="height: 300px!important;width:100%;object-fit: cover; " alt="..."> </div>
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample1" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button> <button class="carousel-control-next" type="button" data-bs-target="#carouselExample1" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
                           </div>
                        </div>
                        <div class="col-lg-6">
                              <h3>Kapaleeshwarar Temple</h3>
                              <div class="d-flex">
                                 <div class="rating"> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9734;</span> </div>
                                 <p class="mnr"> 203</p>
                           </div>
                           <div class="  d-flex  ">
                              <div class="col-lg-5 ml-1">
                                 <p>Religious Sites</p>
                                 <p>Open now</p>
                                 <button type="button" class="btn btn-warning " style="border-radius: 45px;">See tours</button>
                                 <!-- <p>Open now</p> -->
                              </div>
                              <div class=" col-lg-7 comment p-0 ">
                                 <div class="d-flex shopping-profile">
                                    <img src="img/1pic.jpg" class="img-fluid  " alt="...">
                                    <p class="col-lg-4">by Dhivya</p>
                                 </div>
                                 <p class="para"style="text-align: justify;">An Ancient temple dedicated to Lord Shiva, it's a big complex with multiple temples within the complex.</p>
                              </div>
                           </div>
                        </div>
                     </div>
         
         
         
         
               <br>
               <div class="row eamall city"  id="eamall">
                 
                        <div class="col-lg-6">
                           <div id="carouselExample2" class="carousel slide">
                              <div class="carousel-inner">
                                 <div class="carousel-item active"> <img src="img/ea123.jpg" style="height:300px!important;width:100%;object-fit: cover; " alt="..."> </div>
                                 <div class="carousel-item"> <img src="img/ea3.jpg" style="height: 300px!important;width:100%;object-fit: cover; " alt="..."> </div>
                                 <div class="carousel-item"> <img src="img/ea2.jpg" style="height: 300px!important;width:100%;object-fit: cover;" alt="..."> </div>
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button> <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="str">
                              <h3>Express Avenue Mall</h3>
                              <div class="d-flex">
                                 <div class="rating"> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9734;</span> <span class="star text-success">&#9734;</span> </div>
                                 <p class="mnr"> 153</p>
                              </div>
                           </div>
                           <div class="d-flex  ">
                              <div class="col-lg-5 ml-1">
                                 <p>Shopping Malls</p>
                                 <p>Nungambakkam</p>
                                 <button type="button" class="btn btn-warning " style="border-radius: 45px;">See tours</button>
                              </div>
                              <div class=" col-lg-7 comment p-0 ">
                                 <div class="d-flex shopping-profile">
                                    <img src="img/pic2.jpg" class="img-fluid  " alt="...">
                                    <p class="col-lg-4">by Rahul</p>
                                 </div>
                                 <p class="para" style="text-align: justify;" >We had purchase the clothes and had dinner n food court vth friends and we feel at abroad.</p>
                             </div>
                           </div>
                        </div>
               </div>
               <br>
               <div class="row vgp city" id="mylapore">
                  
                     
                        <div class="col-lg-6">
                           <div id="carouselExample3" class="carousel slide">
                              <div class="carousel-inner">
                                 <div class="carousel-item active"> <img src="img/mylapore1.jpg" style="height:300px!important;width:100%;object-fit: cover; " alt="..."> </div>
                                 <div class="carousel-item"> <img src="img/mylapore2.jpg" style="height: 300px!important;width:100%;object-fit: cover;" alt="..."> </div>
                                 <div class="carousel-item"> <img src="img/mylapore3.jpg" style="height: 300px!important;width:100%;object-fit: cover;" alt="..."> </div>
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample3" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button> <button class="carousel-control-next" type="button" data-bs-target="#carouselExample3" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="str">
                              <h3>Mylapore</h3>
                              <div class="d-flex">
                                 <div class="rating"> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> </div>
                                 <p class="mnr"> 126</p>
                              </div>
                           </div>
                           <div class="d-flex  ">
                              <div class="col-lg-5 ml-1">
                                 <p>Neighbourhoods</p>
                                 <p>Mylapore</p>
                                 <button type="button" class="btn btn-warning " style="border-radius: 45px;">See tours</button>
                              </div>
                              <div class=" col-lg-7 comment p-0 ">
                                 <div class="d-flex shopping-profile">
                                    <img src="img/pic4.jpg" class="img-fluid " alt="...">
                                    <p class="col-lg-4">by yasmin chithara</p>
                                 </div>
                                 <p class="para " style="text-align: justify;">This is neighbouring to chennai and known for most of it's temples chruches and monuments or architectures that it hold</p>
                              </div>
                           </div>
                        </div>
                     
               </div>
               <br>
               <div class="row vgp city" id="tnagar">
                 
                        <div class="col-lg-6">
                           <div id="carouselExample4" class="carousel slide">
                              <div class="carousel-inner">
                                 <div class="carousel-item active"> <img src="img/tnagar1.jpg" style="height:300px!important;width:100%;object-fit: cover;" alt="..."> </div>
                                 <div class="carousel-item"> <img src="img/tnagar2.jpg" style="height: 300px!important;width:100%;object-fit: cover;" alt="..."> </div>
                                 <div class="carousel-item"> <img src="img/tnagar3.jpg" style="height: 300px!important;width:100%;object-fit: cover;" alt="..."> </div>
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample4" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button> <button class="carousel-control-next" type="button" data-bs-target="#carouselExample4" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="str">
                              <h3>T Nagar</h3>
                              <div class="d-flex">
                                 <div class="rating"> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> </div>
                                 <p class="mnr"> 381</p>
                              </div>
                           </div>
                           <div class="d-flex  ">
                              <div class="col-lg-5 ml-1">
                                 <p>Neighbourhoods</p>
                                 <p>Royapettah</p>
                                 <button type="button" class="btn btn-warning " style="border-radius: 45px;">See tours</button>
                              </div>
                              <div class=" col-lg-7 comment p-0 ">
                                 <div class="d-flex shopping-profile">
                                    <img src="img/pic10.jpg" class="img-fluid " alt="...">
                                    <p class="col-lg-4">by vinitha rani</p>
                                 </div>
                                 <p class="para" style="text-align: justify;">Shopping and getting ur blouse stitched in 1hr..shopping in ranganathan street is a wonderful experience...</p>
                              </div>
                           </div>
                        </div>
                 </div>
               <br>
               <div class="row vgp city" id="vgp">
                 
                        <div class="col-lg-6">
                           <div id="carouselExample5" class="carousel slide">
                              <div class="carousel-inner">
                                 <div class="carousel-item active"> <img src="img/marine2.jpg" style="height:300px!important;width:100%;object-fit: cover; " alt="..."> </div>
                                 <div class="carousel-item"> <img src="img/marine1.jpg" style="height: 300px!important;width:100%;object-fit: cover; " alt="..."> </div>
                                 <div class="carousel-item"> <img src="img/marine3.jpg" style="height: 300px!important;width:100%;object-fit: cover;" alt="..."> </div>
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample5" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button> <button class="carousel-control-next" type="button" data-bs-target="#carouselExample5" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="str">
                              <h3>VGP Marine Kingdom</h3>
                              <div class="d-flex">
                                 <div class="rating"> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9734;</span> <span class="star text-success">&#9734;</span> </div>
                                 <p class="mnr"> 379</p>
                              </div>
                           </div>
                           <div class="d-flex  ">
                              <div class="col-lg-5 ml-1">
                                 <p>Aquariums</p>
                                 <p>Open now</p>
                                 <button type="button" class="btn btn-warning " style="border-radius: 45px;">See tours</button>
                              </div>
                              <div class=" col-lg-7 comment p-0 ">
                                 <div class="d-flex shopping-profile">
                                    <img src="img/pic5.jpg" class="img-fluid  " alt="...">
                                    <p class="col-lg-4">by Dinesh kumar</p>
                                 </div>
                                 <p class="para" style="text-align: justify;">wow experience , cool ambiance , clean and neat .. lot of collection of fish and underwater tunnel with moving ramp i...</p>
                              </div>
                           </div>
                        </div>
                    
               </div>
               <br>
               <div class="row vgp city" id="annazoo">
                 
                        <div class="col-lg-6">
                           <div id="carouselExample6" class="carousel slide">
                              <div class="carousel-inner">
                                 <div class="carousel-item active"> <img src="img/azoo1.jpg" style="height:300px!important;width:100%;object-fit: cover; " alt="..."> </div>
                                 <div class="carousel-item"> <img src="img/azoo2.jpg" style="height: 300px!important;width:100%;object-fit: cover;" alt="..."> </div>
                                 <div class="carousel-item"> <img src="img/azoo3.jpg" style="height: 300px!important;width:100%;object-fit: cover;" alt="..."> </div>
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample6" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button> <button class="carousel-control-next" type="button" data-bs-target="#carouselExample6" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="str">
                              <h3>Arignar Anna Zoological Park</h3>
                              <div class="d-flex">
                                 <div class="rating"> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9734;</span> </div>
                                 <p class="mnr"> 153</p>
                              </div>
                           </div>
                           <div class="d-flex  ">
                              <div class="col-lg-5 ml-1">
                                 <p>Zoos</p>
                                 <p>Open now</p>
                                 <button type="button" class="btn btn-warning " style="border-radius: 45px;">See tours</button>
                              </div>
                              <div class=" col-lg-7 comment p-0 ">
                                 <div class="d-flex shopping-profile">
                                    <img src="img/pic6.jpg" class="img-fluid  " alt="...">
                                    <p class="col-lg-4">by venba</p>
                                 </div>
                                 <p class="para" style="text-align: justify;">Some animals couldn't see, but some animals we seen in the zoo...</p>
                              </div>
                           </div>
                        </div>
                     
               </div>
               <br>
               <div class="row pondy city " id="pondy ">
                 
                        <div class="col-lg-6">
                           <div id="carouselExample7" class="carousel slide">
                              <div class="carousel-inner">
                                 <div class="carousel-item active"> <img src="img/pondy3.jpg" style="height:300px!important;width:100%;object-fit: cover; " alt="..."> </div>
                                 <div class="carousel-item"> <img src="img/pondy1.jpg" style="height: 300px!important;width:100%;object-fit: cover;" alt="..."> </div>
                                 <div class="carousel-item"> <img src="img/pondy2.jpg" style="height: 300px!important;width:100%;object-fit: cover;" alt="..."> </div>
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample7" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button> <button class="carousel-control-next" type="button" data-bs-target="#carouselExample7" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="str">
                              <h3>Pondy Bazaar</h3>
                              <div class="d-flex">
                                 <div class="rating"> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> </div>
                                 <p class="mnr"> 103</p>
                              </div>
                           </div>
                           <div class="d-flex  ">
                              <div class="col-lg-5 ml-1">
                                 <p>Neighbourhoods</p>
                                 <p>Pondy Bazaar</p>
                                 <button type="button" class="btn btn-warning " style="border-radius: 45px;">See tours</button>
                              </div>
                              <div class=" col-lg-7 comment p-0 ">
                                 <div class="d-flex shopping-profile">
                                    <img src="img/pic7.jpg" class="img-fluid  " alt="...">
                                    <p class="col-lg-4">by Tamil</p>
                                 </div>
                                 <p class="para" style="text-align: justify;">We went into an amazing shop full of stainless steel products of mediocre quality but very inexpensive.</p>
                              </div>
                           </div>
                        </div>
                     
               </div>
               <br>
               <div class="row pondy city "  id="vadapalani">
                  
                        <div class="col-lg-6">
                           <div id="carouselExample8" class="carousel slide">
                              <div class="carousel-inner">
                                 <div class="carousel-item active"> <img src="img/vpalani1.jpg" style="height:300px!important;width:100%;object-fit: cover; " alt="..."> </div>
                                 <div class="carousel-item"> <img src="img/vpalani2.jpg" style="height: 300px!important;width:100%;object-fit: cover; " alt="..."> </div>
                                 <div class="carousel-item"> <img src="img/vpalani3.jpg" style="height: 300px!important;width:100%;object-fit: cover; " alt="..."> </div>
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample8" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button> <button class="carousel-control-next" type="button" data-bs-target="#carouselExample8" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="str">
                              <h3>Vadapalani Murugan Temple</h3>
                              <div class="d-flex">
                                 <div class="rating"> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9734;</span> <span class="star text-success">&#9734;</span> </div>
                                 <p class="mnr"> 276</p>
                              </div>
                           </div>
                           <div class="d-flex  ">
                              <div class="col-lg-5 ml-1">
                                 <p>Religious Sites</p>
                                 <p>Vadapalani</p>
                                 <button type="button" class="btn btn-warning " style="border-radius: 45px;">See tours</button>
                              </div>
                              <div class=" col-lg-7 comment p-0 ">
                                 <div class="d-flex shopping-profile">
                                    <img src="img/pic8.jpg" class="img-fluid  " alt="...">
                                    <p class="col-lg-4">by Rakshana</p>
                                 </div>
                                 <p class="para" style="text-align: justify;">It is also believed that worshipping Lord Murugan here is as pious as praying to him at the Original Palani temple.</p>
                              </div>
                           </div>
                        </div>
                    
               </div>
               <br>
               <div class="row guindy city" id="guindy">
                  
                        <div class="col-lg-6">
                           <div id="carouselExample9" class="carousel slide">
                              <div class="carousel-inner">
                                 <div class="carousel-item active"> <img src="img/guindy1.jpg" style="height:300px!important;width:100%;object-fit: cover; " alt="..."> </div>
                                 <div class="carousel-item"> <img src="img/guindy3.jpg" style="height: 300px!important;width:100%;object-fit: cover; " alt="..."> </div>
                                 <div class="carousel-item"> <img src="img/guindy.jpg" style="height: 300px!important;width:100%;object-fit: cover; " alt="..."> </div>
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample9" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button> <button class="carousel-control-next" type="button" data-bs-target="#carouselExample9" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="str">
                              <h3>Guindy Snake Park</h3>
                              <div class="d-flex">
                                 <div class="rating"> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9734;</span> </div>
                                 <p class="mnr"> 295</p>
                              </div>
                           </div>
                           <div class="d-flex  ">
                              <div class="col-lg-5 ml-1">
                                 <p>Nature & Wildlife Areas</p>
                                 <p>Guindy East</p>
                                 <button type="button" class="btn btn-warning " style="border-radius: 45px;">See tours</button>
                              </div>
                              <div class=" col-lg-7 comment p-0 ">
                                 <div class="d-flex shopping-profile">
                                    <img src="img/pic2.jpg" class="img-fluid  " alt="...">
                                    <p class="col-lg-4">by Vijay</p>
                                 </div>
                                 <p class="para" style="text-align: justify;">The park is well maintained and has a variety of reptiles like snakes, crocodiles and lizards. The enclosures for the...</p>
                              </div>
                           </div>
                        </div>
                     
               </div>
               <br>
               <div class="row centralrailway city" id="centralrailway">
                  
                        <div class="col-lg-6">
                           <div id="carouselExample10" class="carousel slide">
                              <div class="carousel-inner">
                                 <div class="carousel-item active"> <img src="img/cc1.jpg" style="height:300px!important;width:100%;object-fit: cover; " alt="..."> </div>
                                 <div class="carousel-item"> <img src="img/cc2.jpg" style="height: 300px!important;width:100%;object-fit: cover; " alt="..."> </div>
                                 <div class="carousel-item"> <img src="img/cc3.jpg" style="height: 300px!important;width:100%;object-fit: cover; " alt="..."> </div>
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample10" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button> <button class="carousel-control-next" type="button" data-bs-target="#carouselExample10" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="str">
                              <h3>Chennai Central Railway Station</h3>
                              <div class="d-flex">
                                 <div class="rating"> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> </div>
                                 <p class="mnr"> 738</p>
                              </div>
                           </div>
                           <div class="d-flex  ">
                              <div class="col-lg-5 ml-1">
                                 <p>Points of Interest & Landmarks • Architectural Buildings</p>
                                 <p>Open now</p>
                                 <button type="button" class="btn btn-warning " style="border-radius: 45px;">See tours</button>
                              </div>
                              <div class=" col-lg-7 comment p-0 ">
                                 <div class="d-flex shopping-profile">
                                    <img src="img/pic10.jpg" class="img-fluid " alt="...">
                                    <p class="col-lg-4">by Nathira</p>
                                 </div>
                                 <p class="para" style="text-align: justify;">I visited this fascinating RED building touring all the british buildings of chennai.</p>
                              </div>
                           </div>
                        </div>
                     
             </div>
             </div>
             <br>
         
             <div class="col-lg-2"> </div>
             
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


      <script>
         let select = document.getElementById('Location')
            let city = document.querySelectorAll('.city')
            select.addEventListener('change',
            (e)=>{
                // console.log(e.target.value);
                let cityName = e.target.value
                // console.log(cityName);

                // city.forEach(e=>{
                //     console.log(e);
                //     console.log(e.className.split(' ')[1]);
                // })

                let fitered = Array.from(city).filter((e,i)=>{
                    if (cityName == "")
                    {
                        return e
                    }
                  return e.className.split(' ')[1] === cityName 
                })
                // console.log(fitered);
                let parent = document.getElementById('parent')
                parent.innerHTML= null
                // parent.append(fitered)
                fitered.forEach(e=>{
                    parent.append(e)
                })
                for(i=0;i<fitered.length;i++)
                {
                    console.log(fitered);
                }

                // for append unflitered array
             if(city!==""){
                 var unFiltered = Array.from(city).filter((e,i)=>{
                     return e.className.split(' ')[1] !== cityName
                    })
                }
            if(unFiltered){
              unFiltered.forEach( e => {
                parent.append(e)
              })
            }
            })
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