<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Bucket</title>
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!--Owl Carousel-->
    <link rel="stylesheet" href="assets/css/owl.css">
    <!--Bootstrap-->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- Styles  -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <!--Navbar-->
    <nav class="navbar-nav w-100 border-bottom position-fixed">
        <div class="container-fluid d-grid grid-custom h-100">
            <div class="d-flex">
               <div class="menu-key d-flex justify-content-between align-items-center h-100 color-gr pr-3">
                   <ion-icon name="menu-outline" class="fs-22 "></ion-icon>
               </div>
               <div class="logo d-flex justify-content-center align-items-center h-100">
                   <img src="../assets/images/system/logo.white.png"/>
               </div>
            </div>
            <?php 
              if(empty(session::get('name'))) {
                  ?>
                   <div class="sign d-flex justify-content-end align-items-center pr-3">
                        <p class="fs-14 fw-500  mb-0 d-flex justify-content-end align-items-center color-gr mr-3"><ion-icon name="search-outline"></ion-icon></p>
                        <p class="fs-12 fw-500  mb-0 d-flex justify-content-end align-items-center color-gr"><ion-icon name="person-circle-outline" class="fs-20 pr-2"></ion-icon><span>Sign in / Register</span></p>
                    </div>
                  <?php
              } else {
                  ?>
                   <div class="sign d-flex justify-content-end align-items-center pr-3">
                   <p class="fs-12 fw-500  mb-0 d-flex justify-content-end align-items-center color-gr"><ion-icon name="person-circle-outline" class="fs-20 pr-2"></ion-icon><span><?=  session::get('name') ?></span></p>
                   </div>
                  <?php
              }
            ?>
        </div>
    </nav> 
    <nav></nav>
    <!--Container-->
    <div class="tb-container d-flex">
        <!-- sidebar -->
        <aside class="">
            <div class="position-fixed border-right pl-4 pt-4 content">
                 <p class="color-gr fs-12"><span>Browse</span></p>
                 <ul class="navbar-nav">
                     <li class="nav-item color-sv"><ion-icon name="logo-firefox"></ion-icon><span>Discover</span></li>
                     <li class="nav-item color-sv"><ion-icon name="radio-outline"></ion-icon><span>Profile</span></li>
                 </ul>
                
            </div>
        </aside>
        <Div class="tb-page d-flex flex-column contaier mt-3">
       
                    
            <footer class="pt-5 mb-4 pb-5 border-top">
                <p class="fs-12 color-sv">@ Copyright 2021 Waveme Theme. All Rights Reserved</p>
                <ul class="navbar-nav fs-12 color-wh flex-row">
                    <li class="nav-item pr-2">Service Terms</li>
                    <li class="nav-item pr-2">Music Policy</li>
                    <li class="nav-item pr-2">Cookie Warnings</li>
                    <li class="nav-item pr-2">Support</li>
                    <li class="nav-item pr-2">Feedback</li>
                </ul>
            </footer>
        </Div>
    </div>
    <!-- <div class="smallMusic position-fixed fixed-top w-100 h-100">
        
    </div> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</body>
</html>
