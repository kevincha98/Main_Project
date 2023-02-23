<!doctype html>
<html lang="en">

<?php
$db = mysqli_connect('localhost', 'root', '', 'care');

$id=$_GET['id'];

$q1="SELECT * FROM rc_register WHERE rc_id='$id' and status='Active'  ";
$q2="SELECT * FROM rc_stock WHERE rc_id='$id' " ;

$res1=mysqli_query($db,$q1);
$res2=mysqli_query($db,$q2);

$row1 = mysqli_fetch_array($res1,MYSQLI_ASSOC);
$name = $row1['rcname'];
$pcharge = $row1['pcharge'];
$contact = $row1['contact'];
$district = $row1['district'];
$address = $row1['address'];


?>

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
                            <ul class="navbar-nav align-items-center">
                                 <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="rclist.php">Relief Centers</a>
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
        .intro_video_bg{height: 200px;}
        
    </style>
    <section class="intro_video_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="intro_video_iner text-center">
                        <h2><?php  
                          echo "$name"; 
                        ?></h2>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- intro_video_bg part start-->  


    <!--::our client part start::-->
    <section class="client_part section_padding">
        <?php  
            $q3="SELECT * FROM rc_p_count WHERE rc_id='$id' ";
            $res3=mysqli_query($db,$q3);
            $row3=mysqli_fetch_array($res3,MYSQLI_ASSOC);

            

          ?>
        <div class="container">
            <label><b>Name Of Center:</b></label>&nbsp;&nbsp;<b style="color: #000"><?php echo "$name";  ?></b><br><br>
            <label><b>Person in Charge:</b></label>&nbsp;&nbsp;<b style="color: #000"><?php echo "$pcharge";  ?></b><br><br>
            <label><b>Contact No:</b></label>&nbsp;&nbsp;<b style="color: #000"><?php echo "$contact";  ?></b><br><br>
            <label><b>District:</b></label>&nbsp;&nbsp;<b style="color: #000"><?php echo "$district";  ?></b><br><br>
            <label><b>Address:</b></label>&nbsp;&nbsp;<b style="color: #000"><?php echo "$address";  ?></b><br><br>
            <label><b>Relief Center Capacity:</b></label>&nbsp;&nbsp;<b style="color: #000"> peoples</b><br><br>
             <label><b>No.of.Peoples :</b></label>&nbsp;&nbsp;<b style="color: #000"></b><br><br>
            <label><b>Required Volunteers:</b></label>&nbsp;&nbsp;<b style="color: #000"></b><br><br>
            
        </div>
        <!--   -->
        <div class="container2" style="position: absolute;right: 500px;top: 50%;">
            <b>SUPPLY REQUIREMENT</b>
            <table class="stock" border="2" style="background-color: #333332;color:#cecfc8 ; width: 200%;text-align: center;" cellpadding="5" >
                <thead>
                    <tr><th>ITEM</th><th>DESCRIPTION</th><th>QTY</th></tr>
                </thead>
                <tbody style="background-color: #f1e8ff;color: #000">
                    <?php 
                    while ($row = mysqli_fetch_array($res2,MYSQLI_ASSOC)) 
                    {
                    echo" <tr>
                    <td>{$row['item']}</td>
                    <td>{$row['description']}</td>
                    <td>{$row['qty']}</td>";

                    }
                    ?>
                                       
                </tbody> 
            </table>
            
        </div>
    </section>
    <!--::our client part end::-->

   <
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