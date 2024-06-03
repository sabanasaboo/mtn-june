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
      <title>Shopping Page | Modern Tourism Network</title>
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
               <div class="inner-baner-container" style="background-image: url(img/spencer3.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">SHOPPING MALL</h1>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>
            <!-- Inner Banner html end-->
           
            <!-- subscribe section html start -->
           <div class="shopping-container" >
            <main>
                <div class="row">
                   <div class="col-lg-2"></div>
                   <div class="col-lg-8" style="margin: 0 auto; width: fit-content;">
                      <h1>Shopping Mall In India</h1>
                   </div>
                   <div class="col-lg-2"></div>
                   <div class="input-group mb-3">
                      <div class="col-lg-2"></div>
                      <div class="input-group-prepend">
                         <span class="input-group-text  rounded-0 icon " style="height:38px;" id="search-icon">
                         <i class="fa-solid fa-magnifying-glass"></i>
                         </span>
                      </div>
                      <select id="Location" name="Location" class="form-control rounded-0 " >
                         8
                         <option value="">Select</option>
                         <option value="chennai">Chennai</option>
                         <option value="kerala">Kerala</option>
                         <option value="bangalore">Bangalore</option>
                         <option value="mumbai">Mumbai</option>
                         <!-- <option value="American Samoa"> </option> -->
                      </select>
                      <div class="col-lg-2"></div>
                   </div>
                   </div>
                   <div class="col-lg-2"></div>
                   <div id="parent">
                      <!-- chennai -->
                      <div class="row chennai city" id="chennai1">
                         <div class="col-lg-2"></div>
                         <div class="col-lg-8 p-5">
                            <!-- <br> -->
                            <div class="row">
                               <div class="col-lg-6"> 
                                  <div id="carouselExample1" class="carousel slide">
                                     <div class="carousel-inner">
                                        <div class="carousel-item active"> <img src="./img/express2.jpg" style="height:300px!important; width: 100%;" alt="..."> </div>
                                        <div class="carousel-item"> <img src="./img/express3.jpg" style="height: 300px!important; width: 100%;" alt="..."> </div>
                                        <div class="carousel-item"> <img src="./img/express2.jpg" style="height: 300px!important; width: 100%;" alt="..."> </div>
                                     </div>
                                     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample1" data-bs-slide="prev"> 
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                           <span class="visually-hidden"></span> </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample1" data-bs-slide="next">
                                                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                  <span class="visually-hidden"></span> </button>
                                  </div>
                               </div>
                               <div class="col-lg-6">
                                  <div class="str">
                                     <h3>Express Avenue</h3>
                                     <div class="d-flex">
                                        <div class="rating"> 
                                           <span class="star text-success">&#9733;</span>
                                           <span class="star text-success">&#9733;</span> 
                                           <span class="star text-success">&#9733;</span> 
                                           <span class="star text-success">&#9733;</span>
                                           <span class="star text-success">&#9733;</span> 
                                        </div>
                                        <p class="mnr"> 129</p>
                                     </div>
                                  </div>
                                  <div class="d-flex  ">
                                     <div class="col-lg-5 ml-1">
                                        <p>Shopping Malls</p>
                                        <p>Chennai</p>
                                        <button type="button" class="btn btn-warning " style="border-radius: 45px;">See tours</button>
                                     </div>
                                     <div class=" col-lg-7 comment p-0 ">
                                        <div class="d-flex shopping-profile">
                                           <img src="./img/prson/person.jpg" class="img-fluid col-lg-2 " alt="...">
                                           <p class="col-lg-4"> By NishantSharma14</p>
                                        </div>
                                        <p class="para" style="text-align: justify;">
                                           **One-Stop Shopping:** Whether you need to pick up daily essentials or indulge in a shopping spree, you can find i...
                                        </p>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <!-- <div class="col-lg-2"> </div> -->
                      </div>
                      <br>
                      <div class="row chennai city" id="chennai2">
                         <div class="col-lg-2"></div>
                         <div class="col-lg-8">
                            <div class="row">
                               <div class="col-lg-6">
                                  <div id="carouselExample2" class="carousel slide">
                                     <div class="carousel-inner">
                                        <div class="carousel-item active"> <img src="./img/S2.jpg" style="height:300px!important;width: 100%;" alt="..."> </div>
                                        <div class="carousel-item"> <img src="./img/spencer2.jpg" style="height: 300px!important;width: 100%;" alt="..."> </div>
                                        <div class="carousel-item"> <img src="./img/spencer3.jpg" style="height: 300px!important;width: 100%;" alt="..."> </div>
                                     </div>
                                     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button> <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
                                  </div>
                               </div>
                               <div class="col-lg-6">
                                  <div class="str">
                                     <h3>Spencer Plaza</h3>
                                     <div class="d-flex">
                                        <div class="rating"> 
                                           <span class="star text-success">&#9733;</span>
                                           <span class="star text-success">&#9733;</span> 
                                           <span class="star text-success">&#9733;</span> 
                                           <span class="star text-success">&#9733;</span> 
                                           <span class="star text-success">&#9734;</span> 
                                        </div>
                                        <p class="mnr"> 291</p>
                                     </div>
                                  </div>
                                  <div class="d-flex  ">
                                     <div class="col-lg-6 ml-1">
                                        <p>Shopping Mall</p>
                                        <p>Chennai</p>
                                        <button type="button" class="btn btn-warning " style="border-radius: 45px;">See tours</button>
                                     </div>
                                     <div class=" col-lg-6 comment p-0 ">
                                        <div class="d-flex shopping-profile">
                                           <img src="./img/prson/p1.jpeg" class="img-fluid col-lg-2 " alt="...">
                                           <p class="col-lg-4">By Inspire29790231958</p>
                                        </div>
                                        <p class="para">
                                           really enjoyed shopping in this mall
                                        </p>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-2"> </div>
                      </div>
                      <br>
                      <div class="row chennai city" id="chennai3">
                         <div class="col-lg-2"></div>
                         <div class="col-lg-8">
                            <div class="row">
                               <div class="col-lg-6">
                                  <div id="carouselExample3" class="carousel slide">
                                     <div class="carousel-inner">
                                        <div class="carousel-item active"> <img src="./img/vr.jpg" style="height:300px!important;width: 100%;" alt="..."> </div>
                                        <div class="carousel-item"> <img src="./img/vr22.jpg" style="height: 300px!important;width: 100%;" alt="..."> </div>
                                        <div class="carousel-item"> <img src="./img/vr3.jpg" style="height: 300px!important;width: 100%;" alt="..."> </div>
                                     </div>
                                     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample3" data-bs-slide="prev">
                                     <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> 
                                     </button> 
                                     <button class="carousel-control-next" type="button" data-bs-target="#carouselExample3" data-bs-slide="next"> 
                                     <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
                                  </div>
                               </div>
                               <div class="col-lg-6">
                                  <div class="str">
                                     <h3>Vr Mahal</h3>
                                     <div class="d-flex">
                                        <div class="rating"> 
                                           <span class="star text-success">&#9733;</span> 
                                           <span class="star text-success">&#9733;</span> 
                                           <span class="star text-success">&#9733;</span>
                                           <span class="star text-success">&#9733;</span>
                                           <span class="star text-success">&#9734;</span> 
                                        </div>
                                        <p class="mnr"> 987</p>
                                     </div>
                                  </div>
                                  <div class="d-flex  ">
                                     <div class="col-lg-6 ml-1">
                                        <p>Shopping Mall</p>
                                        <p>Chennai</p>
                                        <button type="button" class="btn btn-warning " style="border-radius: 45px;">See tours</button>
                                     </div>
                                     <div class=" col-lg-6 comment p-0 ">
                                        <div class="d-flex shopping-profile">
                                           <img src="./img/prson/p2.jpeg" class="img-fluid col-lg-2 " alt="...">
                                           <p class="col-lg-4">By Inspire29790231958</p>
                                        </div>
                                        <p class="para">
                                           No doubt it’s one of the very good mall in Chennai but today we have become very surprised when we when we visit we f...
                                        </p>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-2"> </div>
                      </div>
                      <br>
                      <!-- kerala  -->
                      <div class="row kerala city" id="kerala1">
                         <div class="col-lg-2"></div>
                         <div class="col-lg-8">
                            <div class="row">
                               <div class="col-lg-6">
                                  <div id="carouselExample4" class="carousel slide">
                                     <div class="carousel-inner">
                                        <div class="carousel-item active"> <img src="./img/lulumahal.jpg" style="height:300px!important;" alt="..."> </div>
                                        <div class="carousel-item"> <img src="./img/lulu2.jpg" style="height: 300px!important;" alt="..."> </div>
                                        <div class="carousel-item"> <img src="./img/lulu3.jpg" style="height: 300px!important;" alt="..."> </div>
                                     </div>
                                     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample4" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button> <button class="carousel-control-next" type="button" data-bs-target="#carouselExample4" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
                                  </div>
                               </div>
                               <div class="col-lg-6">
                                  <div class="str">
                                     <h3>Lulu Mahal </h3>
                                     <div class="d-flex">
                                        <div class="rating"> 
                                           <span class="star text-success">&#9733;</span> 
                                           <span class="star text-success">&#9733;</span>
                                           <span class="star text-success">&#9733;</span>
                                           <span class="star text-success">&#9733;</span>
                                           <span class="star text-success">&#9733;</span> 
                                        </div>
                                        <p class="mnr"> 145 </p>
                                     </div>
                                  </div>
                                  <div class="d-flex  ">
                                     <div class="col-lg-6 ml-1">
                                        <p>Mall</p>
                                        <p>Kerala</p>
                                        <button type="button" class="btn btn-warning " style="border-radius: 45px;">See tours</button>
                                     </div>
                                     <div class=" col-lg-6 comment p-0 ">
                                        <div class="d-flex shopping-profile">
                                           <img src="./img/prson/p5.jpeg" class="img-fluid col-lg-2 " alt="...">
                                           <p class="col-lg-4">rahul</p>
                                        </div>
                                        <p class="para">An Ancient temple dedicated to Lord Shiva, it's a big complex with multiple temples within the complex.</p>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-2"> </div>
                      </div>
                      <br>
                      <div class="row kerala city" id="kerala2">
                         <div class="col-lg-2"></div>
                         <div class="col-lg-8">
                            <div class="row">
                               <div class="col-lg-6">
                                  <div id="carouselExample5" class="carousel slide">
                                     <div class="carousel-inner">
                                        <div class="carousel-item active"> <img src="./img/hilite.jpg" style="height:300px!important;" alt="..."> </div>
                                        <div class="carousel-item"> <img src="./img/hilite2.webp" style="height: 300px!important;" alt="..."> </div>
                                        <div class="carousel-item"> <img src="./img/hilite33.jpg" style="height: 300px!important;" alt="..."> </div>
                                     </div>
                                     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample5" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button> <button class="carousel-control-next" type="button" data-bs-target="#carouselExample5" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
                                  </div>
                               </div>
                               <div class="col-lg-6">
                                  <div class="str">
                                     <h3>HiLite Mall</h3>
                                     <div class="d-flex">
                                        <div class="rating">
                                           <span class="star text-success">&#9733;</span> 
                                           <span class="star text-success">&#9733;</span> 
                                           <span class="star text-success">&#9733;</span>
                                           <span class="star text-success">&#9733;</span> 
                                           <span class="star text-success">&#9734;</span>
                                        </div>
                                        <p class="mnr"> 567</p>
                                     </div>
                                  </div>
                                  <div class="d-flex  ">
                                     <div class="col-lg-6 ml-1">
                                        <p>Complex</p>
                                        <p>Kerala</p>
                                        <button type="button" class="btn btn-warning " style="border-radius: 45px;">See tours</button>
                                     </div>
                                     <div class=" col-lg-6 comment p-0 ">
                                        <div class="d-flex shopping-profile">
                                           <img src="./img/prson/p6.jpeg" class="img-fluid col-lg-2 " alt="...">
                                           <p class="col-lg-4">By Muguncjb2015</p>
                                        </div>
                                        <p class="para">
                                           Saravana stores has several branches from the same family group but under different ownership. This particular store is...
                                        </p>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-2"> </div>
                      </div>
                      <br>
                      <!-- bangalore -->
                      <div class="row bangalore city" id="bangalore1">
                         <div class="col-lg-2"></div>
                         <div class="col-lg-8">
                            <div class="row">
                               <div class="col-lg-6">
                                  <div id="carouselExample6" class="carousel slide">
                                     <div class="carousel-inner">
                                        <div class="carousel-item active"> <img src="./img//ubcity.jpg" style="height:300px!important;" alt="..."> </div>
                                        <div class="carousel-item"> <img src="./img//ub2.jpg" style="height: 300px!important;" alt="..."> </div>
                                        <div class="carousel-item"> <img src="./img//ub3.jpg" style="height: 300px!important;" alt="..."> </div>
                                     </div>
                                     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample6" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button> <button class="carousel-control-next" type="button" data-bs-target="#carouselExample6" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
                                  </div>
                               </div>
                               <div class="col-lg-6">
                                  <div class="str">
                                     <h3>Ub city Mahal</h3>
                                     <div class="d-flex">
                                        <div class="rating"> 
                                           <span class="star text-success">&#9733;</span>
                                           <span class="star text-success">&#9733;</span> 
                                           <span class="star text-success">&#9733;</span> 
                                           <span class="star text-success">&#9734;</span> 
                                           <span class="star text-success">&#9734;</span>
                                        </div>
                                        <p class="mnr"> 873</p>
                                     </div>
                                  </div>
                                  <div class="d-flex  ">
                                     <div class="col-lg-6 ml-1">
                                        <p>Shopping Maal</p>
                                        <p>Bangalore</p>
                                        <button type="button" class="btn btn-warning " style="border-radius: 45px;">See tours</button>
                                     </div>
                                     <div class=" col-lg-6 comment p-0 ">
                                        <div class="d-flex shopping-profile">
                                           <img src="./img/prson/p5.jpeg" class="img-fluid col-lg-2 " alt="...">
                                           <p class="col-lg-4">By Curious58706347922</p>
                                        </div>
                                        <p class="para">
                                           I went for shopping with my family for shopping ,it's an amazing place for shopping and wonderful place..it has theat...
                                        </p>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-2"> </div>
                      </div>
                      <br>
                      <div class="row bangalore city" id="bangalore2">
                         <div class="col-lg-2"></div>
                         <div class="col-lg-8">
                            <div class="row">
                               <div class="col-lg-6">
                                  <div id="carouselExample7" class="carousel slide">
                                     <div class="carousel-inner">
                                        <div class="carousel-item active"> <img src="./img/orion.jpg" style="height:300px!important;" alt="..."> </div>
                                        <div class="carousel-item"> <img src="./img/orion2.jpg" style="height: 300px!important;" alt="..."> </div>
                                        <div class="carousel-item"> <img src="./img/orion3.jpg" style="height: 300px!important;" alt="..."> </div>
                                     </div>
                                     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample7" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button> <button class="carousel-control-next" type="button" data-bs-target="#carouselExample7" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
                                  </div>
                               </div>
                               <div class="col-lg-6">
                                  <div class="str">
                                     <h3>Orion</h3>
                                     <div class="d-flex">
                                        <div class="rating">
                                           <span class="star text-success">&#9733;</span> 
                                           <span class="star text-success">&#9733;</span> 
                                           <span class="star text-success">&#9733;</span> 
                                           <span class="star text-success">&#9733;</span> 
                                           <span class="star text-success">&#9734;</span>
                                        </div>
                                        <p class="mnr"> 490</p>
                                     </div>
                                  </div>
                                  <div class="d-flex  ">
                                     <div class="col-lg-6 ml-1">
                                        <p>Mall</p>
                                        <p>Bangalore</p>
                                        <button type="button" class="btn btn-warning " style="border-radius: 45px;">See tours</button>
                                     </div>
                                     <div class=" col-lg-6 comment p-0 ">
                                        <div class="d-flex shopping-profile">
                                           <img src="./img/prson/p4.jpeg" class="img-fluid col-lg-2 " alt="...">
                                           <p class="col-lg-4">By Santh7001</p>
                                        </div>
                                        <p class="para">
                                           Great mall in vadapalani, has all branded shops, fun city is amazing,Also multi flex is amazing ....
                                        </p>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-2"> </div>
                      </div>
                      <br>
                      <!-- mumbai -->
                      <div class="row mumbai city" id="mumbai1">
                         <div class="col-lg-2"></div>
                         <div class="col-lg-8">
                            <div class="row">
                               <div class="col-lg-6">
                                  <div id="carouselExample8" class="carousel slide">
                                     <div class="carousel-inner">
                                        <div class="carousel-item active"> <img src="./img/rcity.jpg" style="height:300px!important;width: 100%;" alt="..."> </div>
                                        <div class="carousel-item"> <img src="./img/rcity2.jpg" style="height: 300px!important;width: 100%;" alt="..."> </div>
                                        <div class="carousel-item"> <img src="./img/rcity3.jpg" style="height: 300px!important;width: 100%;" alt="..."> </div>
                                     </div>
                                     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample8" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button> <button class="carousel-control-next" type="button" data-bs-target="#carouselExample8" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
                                  </div>
                               </div>
                               <div class="col-lg-6">
                                  <div class="str">
                                     <h3>R City</h3>
                                     <div class="d-flex">
                                        <div class="rating">
                                           <span class="star text-success">&#9733;</span>
                                           <span class="star text-success">&#9733;</span> 
                                           <span class="star text-success">&#9733;</span> 
                                           <span class="star text-success">&#9733;</span>
                                           <span class="star text-success">&#9734;</span>
                                        </div>
                                        <p class="mnr"> 293</p>
                                     </div>
                                  </div>
                                  <div class="d-flex  ">
                                     <div class="col-lg-6 ml-1">
                                        <p>Shopping Mall</p>
                                        <p>Mumbai</p>
                                        <button type="button" class="btn btn-warning " style="border-radius: 45px;">See tours</button>
                                     </div>
                                     <!-- </div> -->
                                     <div class=" col-lg-6 comment p-0 ">
                                        <div class="d-flex shopping-profile">
                                           <img src="./img/prson/p3.jpeg" class="img-fluid col-lg-2 " alt="...">
                                           <p class="col-lg-4">By fivestarholidays</p>
                                        </div>
                                        <p class="para">
                                           I found it quaint and nice for a tea break. The tea was served hot and the ambience was nice. The scones were good...
                                        </p>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-2"> </div>
                      </div>
                      <br>
                      <div class="row mumbai city" id="mumbai2">
                         <div class="col-lg-2"></div>
                         <div class="col-lg-8">
                            <div class="row">
                               <div class="col-lg-6">
                                  <div id="carouselExample9" class="carousel slide">
                                     <div class="carousel-inner">
                                        <div class="carousel-item active"> <img src="./img/viviana.jpg" style="height:300px!important ;width: 100%;" alt="..."> </div>
                                        <div class="carousel-item"> <img src="./img/vivian2.jpg" style="height: 300px!important ;width: 100%;" alt="..."> </div>
                                        <div class="carousel-item"> <img src="./img/vivian3.jpg" style="height: 300px!important ;width: 100%;" alt="..."> </div>
                                     </div>
                                     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample9" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button> <button class="carousel-control-next" type="button" data-bs-target="#carouselExample9" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
                                  </div>
                               </div>
                               <div class="col-lg-6">
                                  <div class="str">
                                     <h3>Viviana</h3>
                                     <div class="d-flex">
                                        <div class="rating">
                                           <span class="star text-success">&#9733;</span> 
                                           <span class="star text-success">&#9733;</span> 
                                           <span class="star text-success">&#9733;</span> 
                                           <span class="star text-success">&#9733;</span>
                                           <span class="star text-success">&#9733;</span>
                                        </div>
                                        <p class="mnr"> 449</p>
                                     </div>
                                  </div>
                                  <div class="d-flex  ">
                                     <div class="col-lg-6 ml-1">
                                        <p>Mall</p>
                                        <p>Mumbai</p>
                                        <button type="button" class="btn btn-warning " style="border-radius: 45px;">See tours</button>
                                     </div>
                                     <div class=" col-lg-6 comment p-0 ">
                                        <div class="d-flex shopping-profile">
                                           <img src="./img/prson/p2.jpeg" class="img-fluid col-lg-2 " alt="...">
                                           <p class="col-lg-4">By SHIANGBAI</p>
                                        </div>
                                        <p class="para">
                                           4000000 lkh ,, if any one want ,, contact me 9362781989old coin silver 10grams 999 , ,, . have only
                                        </p>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-2"> </div>
                      </div>
                      <br>
                      <div class="row mumbai city" id="mumbai3">
                         <div class="col-lg-2"></div>
                         <div class="col-lg-8">
                            <div class="row">
                               <div class="col-lg-6">
                                  <div id="carouselExample10" class="carousel slide">
                                     <div class="carousel-inner">
                                        <div class="carousel-item active"> <img src="./img/oberai.jpg" style="height:300px!;width: 100%;" alt="..."> </div>
                                        <div class="carousel-item"> <img src="./img/oberai2.jpg" style="height: 300px!;width: 100%;" alt="..."> </div>
                                        <div class="carousel-item"> <img src="./img/oberai3.JPG" style="height: 300px!;width: 100%;" alt="..."> </div>
                                     </div>
                                     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample10" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button> <button class="carousel-control-next" type="button" data-bs-target="#carouselExample10" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
                                  </div>
                               </div>
                               <div class="col-lg-6">
                                  <div class="str">
                                     <h3>Oberoi</h3>
                                     <div class="d-flex">
                                        <div class="rating"> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9733;</span> <span class="star text-success">&#9734;</span> </div>
                                        <p class="mnr"> 203</p>
                                     </div>
                                  </div>
                                  <div class="d-flex  ">
                                     <div class="col-lg-6 ml-1">
                                        <p>Mall</p>
                                        <p>Mumbai</p>
                                        <button type="button" class="btn btn-warning " style="border-radius: 45px;">See tours</button>
                                     </div>
                                     <div class=" col-lg-6 comment p-0 ">
                                        <div class="d-flex shopping-profile">
                                           <img src="./img/prson/p1.jpeg" class="img-fluid col-lg-2 " alt="...">
                                           <p class="col-lg-4"> By fivestarholidays</p>
                                        </div>
                                        <p class="para">
                                           I found it quaint and nice for a tea break. The tea was served hot and the ambience was nice. The scones were good...
                                        </p>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-2"> </div>
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
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
       <script>
         let select = document.getElementById('Location')
         let city = document.querySelectorAll('.city')
         select.addEventListener('change',
         (e)=>{
             let cityName = e.target.value
             
             // let fitered = Array.from(city).filter((e,i)=> e.className.split(' ')[1] === cityName )
            //  for 
             let fitered = Array.from(city).filter((e,i)=>{
                 if(cityName===""){
                     return e
                 }
                 return e.className.split(' ')[1] === cityName 
             })
             let parent = document.getElementById('parent')
             parent.innerHTML= null
             fitered.forEach(e=>{
                 parent.append(e)
                //  console.log(unFiltered);
            })
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
         
             // console.log(e.target.value);
             // console.log(cityName);
             
             // city.forEach(e=>{
             //     console.log(e);
             //     console.log(e.className.split(' ')[1]);
             // })
             // console.log(fitered);
             // parent.append(fitered)
             // for(i=0;i<fitered.length;i++)
             // {
             //     console.log(fitered);
             // }
         })
         
         
      </script>
   </body>
</html>