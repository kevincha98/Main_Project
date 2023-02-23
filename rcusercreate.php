<?php 

//echo "Haii";


  include('createrc.php');
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
    <link rel="stylesheet" href="css/nice-select2.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="block/css/main.css" />
    <link rel="stylesheet" href="block/css/main2.css" />
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
                            <ul class="navbar-nav align-items-center">
                                
                                   <li class="nav-item">
                                    <a class="nav-link" href="rcuserhome.php">Home</a>
                                </li>
                                
                                
                               <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         <font color="white"><?php echo htmlspecialchars($_SESSION["username"]); ?></font>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a href="rclogin.php?logout='1'"  class="dropdown-item"> logout</a> 
                                        
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header -->
            <header id="header" class="alt">
               <a href="#"></a>
                
            </header>
    </header>
    <!-- Header part end-->

<!-- intro_video_bg start-->
    <section class="intro_video_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="intro_video_iner text-center">
                        <h2></h2>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- intro_video_bg part start-->


    <!-- reg_part start-->
    <section id="two" class="wrapper style2">
                <div class="inner">
                    <div class="box">
                        <div class="content">
                            <header class="align-center">
                                <p>Here You Can</p>
                                <h2>Register Your Releif Center</h2>
                            </header>
                            <div class="header">
                            <h2>Register</h2>
                            </div>
  
                                 <form name="createrc" method="post" action="rcusercreate.php" enctype="multipart/form-data">
                                             <?php include('errors.php'); ?>
                                          
                                            <div class="input-group">
                                            <label>Name Of Center</label>      <input type="text" name="rcname" id="rcname"  required value="<?php echo $rcname; ?>"><br>
                                            </div>

                                            


                                            <div class="input-group">
                                            <label>Contact No</label> <input type="number" name="contact" id="ph" required style="background-color: #ececec; border:1px solid #c9c9c9" value="<?php echo $contact; ?>"><br><br>
                                            </div>

                                            <div class="input-group">
                                            <label>State</label>&nbsp;&nbsp;

                                            <div class="form-select" id="default-select_1">
                                             <select name="states" id="state" size="1" onchange="select()" >
                                                <option value="" selected="selected">Select State</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Tamilnadu">Tamilnadu</option>
                                                <option value="Karnatka">Karnatka</option>
                                                <option value="Goa">Goa</option>
                                             </select><br><br>
                                            </div>

                                            </div>
                                            <div class="input-group">
                                            <label>District</label>&nbsp;&nbsp;
                                            <div class="form-select" id="district">
                                                                                                                                                        
                                            </div>
                                            
                                            </div>
                                            <div><br></div>
                                            <div class="input-group">
                                            <label>Address</label>                <input type="text" name="address" id="address"   required value="<?php echo $address; ?>"><br><br><br><br>
                                            </div>
                                            <div class="input-group"><button type="submit" class="btn" name="reg_user" style="background-color: #00c424">Register</button><br></div>
                                           
                                 </form>
                        </div>
                        </div>
                        </div>
                    </section>
    <!-- reg_part start-->
    
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
    <script src="js/selectstate.js"></script>
</body>

</html>