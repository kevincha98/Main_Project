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
                                    <a class="nav-link" href="Donation/index.php"><span class="ti-share"></span> PAY</a>
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
        height: 200px;
        }
        .feature_part
        {
            padding: 90px 0px 100px;
        }
    </style>
    <section class="intro_video_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="intro_video_iner text-center">
                        <h2>DONATE </h2>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- intro_video_bg part start-->
    

    <!-- feature_part start-->
    <section class="feature_part"><center><h3>DONATE SOME OF YOUR THINGS THAT YOU DON'T USE OR NEED ANYMORE.</h3></center>
        <div class="note" style="position: relative;left: 390px;">
            <br><h5 style="color: red;font-family: arial;">* Only donate items that are new,unused,or 'gently used',which means items that are in good condition,clean,and presentable.
            <br>* You can also donate Medical Supplies,please don't donate expired stocks.<br>
            * Do not donate items in disrepair that don't work properly,are missing parts,or are ripped,torn,or stained.<br>*Details are not compulsory,But atleast the Name and Phone number Required For collecting the Details</h5>
        </div>
        <div class="container" style="background-color: #1f1f1f; position: relative;color: #fff;height: 460px;">
           
               <div class="donate" style="position: relative;left: 360px;top: 20px;">
                <form method="post" >
                    <label><b>ITEMS</b></label><br><textarea style="resize: none;height: 100px;width: 400px;" name="items" required placeholder="Please Enter Items & details...."></textarea>
                    <table>
                    <tr><td><label><b>Name</b></label></td><td>:<input type="text" name="name" required style="width: 336px;"></td><br> </tr>
                    <tr><td><label><b>Contact</b></label></td><td>:<input type="number" name="contact" required style="width: 336px;"></td><br></tr>
                    <tr><td><label><b>Address</b></label></td><td>:<input type="text" name="address" style="height: 50px;width: 336px;"  ></td></tr>
                    <tr><td><label><b>District</b></label></td><td>:<input type="text" name="district" style="width: 336px;"></td></tr>
                        
                    </table><br>
                    <input type="submit" name="donate" value="DONATE" style="position: relative;left: 325px;background-color: green;color: #fff" >
                   
                </form>

                <br><ceneter>
                    <?php  if(isset($_POST['donate']))
                            {
                                $items=mysqli_real_escape_string($db,$_POST['items']);
                                $name=mysqli_real_escape_string($db, $_POST['name']);
                                $contact=mysqli_real_escape_string($db, $_POST['contact']);
                                $address=mysqli_real_escape_string($db, $_POST['address']);
                                $district=mysqli_real_escape_string($db, $_POST['district']);
                            // Number checks for length 10
                             if(strlen((string)$contact)!=10)
                            {
                                    echo "Enter a valid number.";
                            }
                            else{
                             echo "Donation request has been successfully send.";
                             $date=date("Y-m-d");  
                             $query="INSERT INTO donate (items,name,contact,address,district,date) VALUES ('$items','$name','$contact','$address','$district','$date')";
                             mysqli_query($db,$query);
                            }
                        } 
                     ?>    
                    </ceneter>
               </div>
        </div>
        <br>
        <div style="position: relative;left: 310px;font-weight: bold;">>>Our people will contact you to confirm your donation <b>>></b> Collects items that you donated from your doorstep <b><br>>></b> Our people will check item quality from there .........!<b> >></b> Don't Hesitate to ask for receipt.  </div>
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