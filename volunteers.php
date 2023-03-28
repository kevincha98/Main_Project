<!doctype html>
<html lang="en">
<?php
    $db = mysqli_connect('localhost', 'root', '', 'care');
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

    <section class="intro_video_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="intro_video_iner text-center">
                        <h2>Be a Good Volunteer</h2>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- intro_video_bg part start-->

    <style type="text/css">
    .intro_video_bg{height: 200px;}
    .feature_part{padding: 40px 0 30px;}
    .section_padding{padding: 60px 0 100px;}
    .reg {margin-left: 150px;}
    .body input[type='text'],.body input[type='number'],.body textarea{ width: 300px;resize: none;border-radius: 4px;border:1px solid #ccc;padding: 6px 20px; }
    .reg input[type='submit']{background-color: #00c424;color: #fff;border-radius: 4px;padding: 6px 20px;border: none;}
    td{height: 50px;}
    </style>
    

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <p>You can register as volunteer from here</p>
                        <h2>Volunteer Registeration</h2>
                    </div>
                    <div class="reg">
                        <form method="post">
                            <table class="tbl">
                            <tbody class="body">
                            <tr><td><labe>NAME</labe></td><td>:&nbsp;<input type="text" name="name" required></td></tr>
                            <tr><td><labe>GENDER</labe></td><td>:&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="Male" required> Male&nbsp;&nbsp; 
                            <input type="radio" name="gender" value="Female" required> Female</td></tr>
                            <tr><td><labe>AGE</labe></td><td>:&nbsp;<input type="number" name="age" required></td></tr>
                            <tr><td><labe>MOBILE NO</labe></td><td>:&nbsp;<input type="number" name="ph" required></td></tr>
                            <tr><td><labe>AADHAR NO</labe></td><td>:&nbsp;<input type="number" name="aadhar" required></td></tr>
                            <tr><td><labe>ADDRESS</labe></td><td>:&nbsp;<textarea required name="address"></textarea ></td></tr>
                            <tr><td><labe>DISTRICT</labe></td><td>&nbsp;&nbsp;
                               
                                <select name="district"><option>Select District</option>
                                <option value="Kasaragod">Kasaragod</option><option value="Kannur">Kannur</option>
                                <option value="Wayanad">Wayanad</option><option value="Kozhikode">Kozhikode</option>
                                <option value="Malappuram">Malappuram</option><option value="Palakkad">Palakkad</option>
                                <option value="Thrissur">Thrissur</option><option value="Eranakulam">Eranakulam</option>
                                <option value="Idukki">Idukki</option><option value="Kottayam">Kottayam</option>
                                <option value="Alappuzha">Alappuzha</option><option value="Pathanamthitta">Pathanamthitta</option>
                                <option value="Kollam">Kollam</option><option value="Thiruvananthapuram">Thiruvananthapuram</option>
                               
                            </select></td></tr>
                            </tbody>
                            </table><br>

                            <input type="radio" name="check" required oninvalid="this.setCustomValidity('You have to aceept conditions')" oninput="this.setCustomValidity('')"> 
                            I here by accept all <a href="conditions.html" target="_blank">conditions</a> for registering as a volunteer<br><br>
                            <input type="submit" name="submit" value="REGISTER">
                        </form>
                        <?php
                            if(isset($_POST['submit']))
                            {
                                $name=mysqli_real_escape_string($db, $_POST['name']);
                                $sex=mysqli_real_escape_string($db, $_POST['gender']);
                                $age=mysqli_real_escape_string($db, $_POST['age']);
                                $ph=mysqli_real_escape_string($db, $_POST['ph']);
                                $aadhar=mysqli_real_escape_string($db, $_POST['aadhar']);
                                $address=mysqli_real_escape_string($db, $_POST['address']);
                                $district=mysqli_real_escape_string($db, $_POST['district']);


                                if($age<18)
                                {
                                    echo "<font color='red'>Age must be above 18.</font>";
                                }
                                elseif (strlen((string)$ph)!=10) 
                                {
                                    echo "<font color='red'>Enter a valid number.</font>";
                                }
                                elseif(strlen((string)$aadhar)!=12)
                                {
                                    echo "<font color='red'>Aadhar number must have 12 digits.</font>";
                                }
                                elseif($district=="Select District") 
                                {
                                    echo "<font color='red'>Please select your district.</font>";
                                }
                                else
                                {   
                                    if(strlen((string)$aadhar)==12)
                                    {
                                        $ad_check_query="SELECT * FROM volunteer_info WHERE v_aadhar='$aadhar'  LIMIT 1";
                                        $results = mysqli_query($db,$ad_check_query);
                                        $ad = mysqli_fetch_assoc($results);
                                        if($ad)
                                         {

                                            if($ad['v_aadhar'] === $aadhar)
                                            { echo "<font color='red'>Aadhar no already exists.</font>";}
                                            
                                         }
                                         else
                                         {
                                         $sql8="INSERT INTO volunteer_info (v_name,v_gender,v_age,v_contact,v_aadhar,v_address,v_district) VALUES ('$name','$sex','$age','$ph','$aadhar','$address','$district')";
                                         mysqli_query($db,$sql8);
                                         echo "<font color='red'>Registeration Success</font>";
                                         }
                                    }
                                    
                                    
                                    
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
    <!-- feature_part start-->

    <!-- top_service part start-->
    
    <!-- top_service part end-->


    <!--::our client part start::-->
    <section class="client_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <p>Thanks for registering</p>
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