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
    <link rel="stylesheet" href="block/css/font-awesome.min.css">
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
    <link rel="stylesheet" href="css/style2.css">
</head>

<body>
    <!--::header part start::-->
    <style type="text/css">
        .intro_video_bg 
        {
        height: 400px;
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
                                    <a class="nav-link" href="index.php"><span class="ti-home"></span> &nbsp; Home</a>
                                </li>
                                
                                                              

                                <li class="nav-item">
                                    <a class="nav-link" href="rclogin.php"><span class="ti-share"></span> &nbsp;Login</a>
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
                        <h2> Relief Centers</h2>
                      <!-- <a href="rclogin.php" class="genric-btn primary radius">Login</a>&nbsp;&nbsp;<a href="rcreg.php" class="genric-btn primary radius">Register</a>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- intro_video_bg part start-->


    <!-- feature_part start-->
    <div class="section-top-border">
                <h3 class="mb-30"></h3>
                <div class="progress-table-wrap">
                    <div class="progress-table">
                        <div class="table-head">
                            <div class="serial" name="id">NO</div>
                            <div class="country" name="name">Relief Centers</div>
                            <div class="visit" name="ph">Contact No</div>
                            <div class="percentage" name="address">Address</div>
                            <div class="verify" name="district">District</div>                           
                            <div class="more"  name="more">View More</div>
                        </div>

                        
                                                
                       <?php 
                        $db = mysqli_connect('localhost', 'root', '', 'care');
                        $sql = "SELECT * FROM rc_register WHERE status='Active' ORDER BY district";
                        $results = mysqli_query($db,$sql);
                        while ($row = mysqli_fetch_array($results,MYSQLI_ASSOC)) 
                        {
                        echo "
                           <div class='table-row'>
                           <div class='serial'>{$row['rc_id']}</div>
                           <div class='country'><b>{$row['rcname']}</b></div>
                           <div class='visit'> {$row['contact']}</div>
                           <div class='percentage'> {$row['address']}</div> 
                           <div class='verify'> {$row['district']}</div>                           
                           <div class='more'><a href='rc_more.php?id={$row['rc_id']}'>Click Here</a></div>
                            </div> ";
                        }
                        mysqli_close($db);
                        ?>
                        
                                                                                                                                          
                    </div>
                </div>
            </div>
    <!-- feature_part start-->


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