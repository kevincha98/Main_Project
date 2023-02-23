<?php  
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
                                    <a class="nav-link" href="index.php"><span class="ti-home"></span> Home</a>
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
                        <h2>MEDICAL INFORMATION</h2>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- intro_video_bg part start-->
    

    <!-- feature_part start-->
    <style type="text/css">
        .nice-select{background-color: #0d101d24;color: #000;}
        .feature_part {
    padding: 80px 0 600px;
}
    </style>
    <section class="feature_part">
        <div class="container">
           <center><H4>HOSPITALS NEAR YOU</H4></center>
           <form method="post">
            <select name="district"><option>SELECT DISTRICT</option>
                                <option value="Kasaragod">Kasaragod</option><option value="Kannur">Kannur</option>
                                <option value="Wayanad">Wayanad</option><option value="Kozhikode">Kozhikode</option>
                                <option value="Malappuram">Malappuram</option><option value="Palakkad">Palakkad</option>
                                <option value="Thrissur">Thrissur</option><option value="Ernakulam">Eranakulam</option>
                                <option value="Idukki">Idukki</option><option value="Kottayam">Kottayam</option>
                                <option value="Alappuzha">Alappuzha</option><option value="Pathanamthitta">Pathanamthitta</option>
                                <option value="Kollam">Kollam</option><option value="Trivandrum">Thiruvananthapuram</option>

            </select>&nbsp;&nbsp;
            <input type="submit" name="submit" value="VIEW" style="background-color:#0d101d24;color: #000;border: none;border-radius: 4px;width: 100px;height: 40px; ">
            </form>
            <br><br><br>
            <center>
            <table border style="width: 100%;">
                <thead style="background-color: #00c424;color: #fff;text-align: center;"><th>HOSPITAL NAME</th><th>ADDRESS</th><th>DISTRICT</th><th>CONTACT NO</th></thead>
                <?php
                    if(isset($_POST['submit']))
                    {
                        $district=mysqli_real_escape_string($db, $_POST['district']);
                        echo "<h4 style='text-transform: uppercase;'>$district</h4>";
                        $sql="SELECT * FROM hospital WHERE DISTRICT='$district' ";
                        $res=mysqli_query($db,$sql);
                        while ($row=mysqli_fetch_array($res,MYSQLI_ASSOC)) 
                        {
                           echo "<tr>
                           <td>{$row['name']}</td>
                           <td>{$row['address']}</td>
                           <td>{$row['district']}</td>
                           <td>{$row['contact']}</td>
                           </tr>";
                        }
                    }
                ?>
            </table>
           </center> 
        </div>
    </section>
    <!-- feature_part start-->

    

    

   <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="index.php"> <img src="img/favicon.png" alt=""> </a><font color="#fff">CareHand</font>
                        <p>A webportal which helps the peoples to easily
                        find out where the relief centers  are placed,and donate requirements they needed.They can register as a volunteer.
                            </p>
                    </div>
                </div>
               
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <p>D3 BCA ,St Mary's College, Sulthan Bathery,Wayanad,Kerala</p>
                        <div class="contact_info">
                            <p><span class="ti-mobile"></span> +91 9567834429</p>
                            <p><span class="ti-email"></span>reliefproject@gmail.com </p>
                            <p><span class="ti-world"></span>reliefcell.com </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->
    
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