<?php  
     session_start(); 

  
 if (!isset($_SESSION['username'])) {
    session_destroy();
    unset($_SESSION['username']);
    $_SESSION['msg'] = "You must log in first";
    header('location: rclogin.php');
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: rclogin.php");
  }


     $db = mysqli_connect('localhost', 'root', '', 'care');

     

 ?>
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
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="#"> <img src="img/favicon.png" alt="logo"> </a><h3><font color="#fff">CareHand</font></h3>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="ti-menu"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            
                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         <font color="white"><span class="ti-drupal"></span>&nbsp;&nbsp; <?php echo htmlspecialchars($_SESSION["username"]); ?></font>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a href="adminfeedback.php?logout='1'"  class="dropdown-item"> logout</a> 
                                        
                                    </div>
                            </li>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->


    
<!-- intro_video_bg start-->
    <style type="text/css">
        .intro_video_bg 
        {
        height: 230px;
        }
    </style>
    <section class="intro_video_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="intro_video_iner text-center">
                        <h2>ADMIN PANEL</h2>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- intro_video_bg part start-->
    

    <!-- feature_part start-->
    <style type="text/css">
        .feature_part { padding: 0px 0 170px 30px;display: inline-flex;}
        .vertical-menu{width: 200px;}
        .vertical-menu a{background-color: #eee;color: black;display: block;padding: 12px;text-decoration: none;}
        .vertical-menu a:hover{background-color: #ccc;}
        .vertical-menu a.active{background-color: #00c424;color: white;}
        .home{display: inline-flex;}
        .heading{background-color: #333332;color:#cecfc8 ;}
        .home h3{text-transform: uppercase;font-family: courier;}
        .no{font-size: 60px;text-align: center;}
        .report{position: relative;left: 160px;top: 80px;}
        
    </style>
    <section class="feature_part">
        <div class="container1">
           <div class="vertical-menu">
            <a href="admin.php"><span class="ti-home"></span> Home</a>
            <a href="adminusers.php" >RC Managers</a>
            <a href="admincenters.php">Relief Centers</a>
            <a href="admindonation.php">Donation Requests</a>
            <a href="adminvolunteer.php">Volunteers Info</a>
            <a href="adminmessage.php">Message to RC</a>
            <a href="#"  class="active">View Feedbacks</a>
            <a href="adminnewsfeed.php">News Feed</a>
           </div>
        </div>

           <div class="home">
               <div class="report"><b>FEEDBACKS FROM USERS</b>
                   <table border style="width: 150%;">
                       <thead class="heading"><th>NO</th><th>SUBJECT</th><th>MESSAGE</th><th>NAME</th><th>EMAIL</th><th>DATE</th></thead>
                               <?php

                                $sql1="SELECT * FROM feedback ";
                                $res1=mysqli_query($db,$sql1);
                                while($row=mysqli_fetch_array($res1,MYSQLI_ASSOC))
                                {
                                    echo  "<tr>
                                    <td>{$row['Sno']}</td>
                                    <td>{$row['subject']}</td>
                                    <td>{$row['message']}</td>
                                    <td>{$row['name']}</td>
                                    <td>{$row['email']}</td>
                                    <td>{$row['date']}</td>
                                    </tr>";
                                }

                                ?>

                   </table>
               </div>
           </div>
    </section>
    <!-- feature_part start-->

    
   
    
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