<html>
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
    <link rel="stylesheet" type="text/css" href="<?= '../assets/css/bootstrap.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?= '../assets/css/styles.css' ?>">
</head>
    <body>

          <!--Navbar-->
          <nav class="navbar-nav w-100 border-bottom position-fixed">
            <div class="container-fluid d-grid grid-custom h-100">
                <div class="d-flex">
                <div class="menu-key d-flex justify-content-center align-items-center h-100 color-gr pr-3">
                    <ion-icon name="menu-outline" class="fs-22 "></ion-icon>
                </div>
                <div class="logo d-flex justify-content-center align-items-center h-100">
                    <img src="../../images/logo.white.png"/>
                </div>
                </div>
               
                <div class="sign d-flex justify-content-end align-items-center pr-3">
                    <p class="fs-12 fw-500  mb-0 d-flex justify-content-end align-items-center color-gr"><ion-icon name="person-circle-outline" class="fs-20 pr-2"></ion-icon>Sign in / Register</p>
                </div>
            </div>
        </nav> 
        <nav></nav>
        <div class="tb-container d-flex">
            <!-- sidebar -->
            <aside>
                <div class="position-fixed border-right pl-4 pt-4 content">
                     <p class="color-gr fs-12 fw-600">Browse</p>
                     <ul class="navbar-nav">
                         <li class="nav-item color-sv"><ion-icon name="logo-firefox"></ion-icon>Discover</li>
                         <li class="nav-item color-sv"><ion-icon name="radio-outline"></ion-icon>Browse</li>
                         <li class="nav-item color-sv"><ion-icon name="apps-outline"></ion-icon>New Release</li>
                         <li class="nav-item color-sv"><ion-icon name="bonfire-outline"></ion-icon>Popular</li>
                         <li class="nav-item color-sv"><ion-icon name="analytics-outline"></ion-icon>Charts</li>
                     </ul>
                     <p class="color-gr fs-12 fw-600 mt-4">Users</p>
                     <ul class="navbar-nav">
                         <li class="nav-item color-sv"><ion-icon name="grid-outline"></ion-icon>Playlists</li>
                         <li class="nav-item color-sv"><ion-icon name="people-outline"></ion-icon>Profile</li>
                         <li class="nav-item color-sv"><ion-icon name="log-in-outline"></ion-icon>Login</li>
                         <li class="nav-item d-flex justify-content-start align-item-center">
                             <label class="switch">
                                 <input type="checkbox" class="d-none" checked>
                                 <span class="slider round d-flex justify-content-center align-items-center"></span>
                             </label>
                             <p>Dark Mode</p>
                         </li>
                     </ul>        
            </aside>

            <Div class="tb-page d-flex flex-column contaier justify-content-start align-item-center">
                <div class="container pt-4">

                        <div class="row">
                            <div class="col-md-3"></div>
                <div class="col-md-6 f1">
                    <form action="/update" method="post">
                    <div class="input-group">
                        <ion-icon name="person"class="fs-16 color-wh pt-2 pl-2"></ion-icon>
                        <input type="text" name="name"  class="form-control" value="<?= $arr[0][1] ?>">
                    </div>

                    <div class="input-group">
                        <ion-icon name="lock-closed-outline" class="fs-16 color-wh pt-2 pl-2"></ion-icon>
                        <input type="password" name="pass"  class="form-control" value="<?= $arr[0][2] ?>">
                    </div>  
                    <div class="row text-center pt-3">
                        <div class="col-md-12">
                        <input type="submit" class="btnlog color-wh mt-5" name="submit" value="update">
                        </div>
                    </div>
                </form>

                </div>
            </div>
            <div class="col-md-3"></div>
        </div>  
            </Div>

        <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
      
</body>
</html>