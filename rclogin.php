<?php include('server.php') ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CareHand</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="block/css/main.css" />
    <link rel="stylesheet" href="block/css/main2.css" />
</head>

<body>
    <!--::header part start::-->
    <style type="text/css">
        .intro_video_bg 
        {
        height: 350px;
        }
    </style>
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php"> <img src="img/favicon.png" alt="logo"> </a><h3><font color="#fff">CareHand</font></h3>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="ti-menu"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php" style="text-decoration: none;"><span class="ti-home"></span>&nbsp; Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="rclist.php" style="text-decoration: none;"><span class="ti-layout-grid2"></span>&nbsp; Relief Centers</a>
                                </li>
                                

                                
                               
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->
    
    <!-- intro_video_bg start-->
    
    <section class="intro_video_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="intro_video_iner text-center">
                        <h2>LOGIN</h2>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- intro_video_bg part start -->
    

    <!-- login_part start-->
    <section id="two" class="wrapper style2">
                <div class="inner">
                        <div class="box">
                        <div class="content" >
                            <header class="align-center"></header>
                             <div class="header"><h2 align="center">Log in to your account</h2></div>
     
                

                            <form method="post" action="rclogin.php" onsubmit="return validation()">
                                
                            <?php include('errors.php'); ?>
                            
                             <div class="input-group">
                             <label >Username</label><input type="text" name="username" id="username" autofocus >
                             </div><br>
                            
                            <div class="input-group">
                            <label>Password</label><input type="password" name="password" id="password" >
                            </div><br>
                         
                            <div class="input-group">
                            <button type="submit" class="btn" name="login_user" style="background-color: #00c424">Login</button>
                            </div><br>
                            
                           
                            </form>
                        </div>
                        </div>
                </div>
    </section>
    <!-- login_part start-->
    
    <!-- validation form -->
    <script type="text/javascript">
        function validation()
        {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;


            if(username == "")
            {
                document.getElementById('username').placeholder="PLEASE INSERT VALUE";
                document.getElementById('username').style.border="1px solid red";
                return false;
            }
            if(password == "")
            {
                
                document.getElementById('password').style.border="1px solid red";
                document.getElementById('password').placeholder="PLEASE INSERT VALUE";
                return false;
            }
        }
    </script>
    <!-- validation form -->
    


    <!--::our client part start::-->
    <section class="client_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <p></p>
                        <h2></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::our client part end::-->

    
    <!-- jquery plugins here-->

    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.smooth-scroll.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <!-- contact js -->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>