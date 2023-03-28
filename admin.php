<?php  
     session_start(); 

  
 if (!isset($_SESSION['username'])) 
 {
    session_destroy();
    unset($_SESSION['username']);
    header('location: rclogin.php');
  }

  if (isset($_GET['logout'])) 
  {
    session_destroy();
    unset($_SESSION['username']);
    header("location: rclogin.php");
  }



    //Connecting to Database
     $db = mysqli_connect('localhost', 'root', '', 'care');


        //Total Managers Count
        $sql1="SELECT * FROM user_info WHERE category='camp' ";
        $res1=mysqli_query($db,$sql1);
        $count1=mysqli_num_rows($res1);
       
        //Total Donation Count
        $sql2="SELECT * FROM donate";
        $res2=mysqli_query($db,$sql2);
        $count2=mysqli_num_rows($res2);

        //Total Relief Center Count
        $sql3="SELECT * FROM rc_register";
        $res3=mysqli_query($db,$sql3);
        $count3=mysqli_num_rows($res3);

         //Total Refugee Count
         $sql4="SELECT * FROM refugee_info";
         $res4=mysqli_query($db,$sql4);
         $count4=mysqli_num_rows($res4);

        //Total Volunteers Count
        $sql5="SELECT * FROM volunteer_info";
        $res5=mysqli_query($db,$sql5);
        $count5=mysqli_num_rows($res5);

        //Donations Pending
        $sql6="SELECT * FROM donate WHERE transaction='pending' ";
        $res6=mysqli_query($db,$sql6);
        $count6=mysqli_num_rows($res6);

         //Volunteers on Work
        $sql7="SELECT * FROM volunteer_info WHERE status='on work' ";
        $res7=mysqli_query($db,$sql7);
        $count7=mysqli_num_rows($res7);

        //Active Relief Centers
        $sql8="SELECT * FROM rc_register WHERE status='active' ";
        $res8=mysqli_query($db,$sql8);
        $count8=mysqli_num_rows($res8);


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
                                        <a href="admin.php?logout='1'"  class="dropdown-item"> logout</a>                                         
                                    </div>
                            </li>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->



    <!-- Heading Part Start-->
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
    <!-- Heading Part End-->
    

    <!-- feature_part start-->
    <style type="text/css">
        .intro_video_bg{height: 230px;}
        .feature_part { padding: 0px 0 170px 0px;display: inline-flex;}
        .vertical-menu{width: 130px;}
        .vertical-menu a{background-color: #eee;color: black;display: block;padding: 12px;text-decoration: none;}
        .vertical-menu a:hover{background-color: #ccc;}
        .vertical-menu a.active{background-color: #00c424;color: white;}
        .home{display: inline-flex;position: relative;left:-300px;}
        .fbox,.sbox,.tbox,.fbox,.dbox{height: 200px;width: 250px;background-color: #eee;margin-left: 25px;margin-top: 50px;box-shadow: inset 0 -3em 3em rgba(0,0,0,0.1),0 0 0 2px rgba(255,255,255,255),0.3em 0.3em 1em rgba(0,0,0,0.3) ;}
        .home h3{text-transform: uppercase;font-family: courier;}
        .no{font-size: 60px;text-align: center;}
        .notification{position: relative;top: 300px;left: 90px;width: 300px;text-transform: uppercase;letter-spacing: 1px;}
        b{color: red;}
        .ti-arrow-circle-right{color: #00c424}
    </style>


    <section class="feature_part">

        <div class="container1">
           <div class="vertical-menu">
            <a href="#" class="active"><span class="ti-home"></span> Home </a>
            <a href="adminusers.php">RC Managers</a>
            <a href="admincenters.php">Relief Centers</a>
            <a href="admindonation.php">Donation Requests</a>
            <a href="adminvolunteer.php">Volunteers Info</a>                                                 <!--SELECTION BUTTONS -->
            <a href="adminmessage.php">Message to RC</a>
            <a href="adminfeedback.php">View Feedbacks</a>
            <a href="adminnewsfeed.php">News Feed</a>
           </div>
        </div>
            
            <div class="notification">
                <br>
                <span class="ti-arrow-circle-right"></span>&nbsp;&nbsp; <b><?php echo "$count6"; ?></b> Donations Pending.<br><br>
                <span class="ti-arrow-circle-right"></span>&nbsp;&nbsp; <b><?php echo "$count7"; ?></b> Volunteers are on Work.<br><br>
                <span class="ti-arrow-circle-right"></span>&nbsp;&nbsp; <b><?php echo "$count8"; ?></b> Relief Centers are Active.
        
            </div>


           <div class="home">
               <div class="fbox">
                   <h3><span class="ti-server"></span> Total Managers Right now</h3>
                   <div class="no"><?php echo "$count1"; ?></div>
               </div>&nbsp;
               <div class="sbox">
                  <h3><span class="ti-server"></span> Total Donation Count</h3>
                  <div class="no"> <?php echo "$count2"; ?></div>
               </div>
               <div class="tbox">
                  <h3><span class="ti-server"></span> Total Relief Centers</h3>
                  <div class="no"> <?php echo "$count3"; ?></div>
               </div>
               <div class="fbox">
                   <h3><span class="ti-server"></span> Total Refugee Registrations</h3>
                   <div class="no"><?php echo "$count4"; ?></div>
               </div>
               <div class="dbox">
                  <h3><span class="ti-server"></span> Total Volunteers</h3>
                  <div class="no"><?php echo "$count5"; ?></div>
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