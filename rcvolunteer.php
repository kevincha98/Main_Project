<?php 
  session_start(); 

  
 if (!isset($_SESSION['username'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: rclogin.php');
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: rclogin.php");
  }

  $db = mysqli_connect('localhost', 'root', '', 'care');
  $username=htmlspecialchars($_SESSION["username"]);

    $query="SELECT * FROM rc_register WHERE user_name='$username' and status = 'active'";
    $res= mysqli_query($db, $query);
    $num= mysqli_num_rows($res);
    $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
    $id=$row["rc_id"];
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
    <a name="top"></a>
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
                                
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="ti-settings"></span>&nbsp;&nbsp;Relief Center
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        

                                        <?php if($num==0){ ?>
                                        <a class="dropdown-item" href="rcusercreate.php">Create</a>
                                         <?php }
                                        if($num==1){ 
                                        ?>
                                        <a class="dropdown-item" href="updaterc.php?id=<?php echo "$id" ?>">Update Info</a>
                                        <a class="dropdown-item" href="deactiverc.php" onclick="return confirmation()">Deactive RC</a>
                                        <script type="text/javascript">
                                            function confirmation() {
                                                return confirm("Are You Sure ?");
                                            }
                                        </script>
                                        <?php } ?>
                                    </div>
                                </li>
                                
                                
                               <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         <font color="white"><span class="ti-user"></span> &nbsp;&nbsp; <?php echo htmlspecialchars($_SESSION["username"]); ?></font>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a href="rcvolunteer.php?logout='1'"  class="dropdown-item"> logout</a> 
                                        
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
              

            </header>
    </header>
    <!-- Header part end-->
<!-- intro_video_bg start-->
    <style type="text/css">
        .intro_video_bg 
        {
        height: 200px;
        }
    </style>
    <section class="intro_video_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="intro_video_iner text-center">
                       
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- intro_video_bg part start-->
    

    <!-- feature_part start-->
    <style type="text/css">
        .feature_part { padding: 0px 0 170px 100px;display: inline-flex;}
        .vertical-menu{width: 200px;}
        .vertical-menu a{background-color: #eee;color: black;display: block;padding: 12px;text-decoration: none;}
        .vertical-menu a:hover{background-color: #ccc;}
        .vertical-menu a.active{background-color: #00c424;color: white;}
        .container2{position: relative;left: 170px;top: 60px;}
       
    </style>
    <section class="feature_part">
        <div class="container1">
           <div class="vertical-menu">
            <a href="rcuserhome.php" >RC Information</a>
            <a href="rcuseritem.php">Supply Requirement</a>
            <a href="rcrefugee.php" >Refugee Register</a>
            <a href="rcrefugeelist.php">Refugee List</a>
            <a href="#" class="active">Volunteers</a>
            <a href="rcmessage.php">Messages from admin</a>
           
           </div>
        </div>
        <div class="container2">
           <div class="userpage">
                                                     
                            <?php
                           
                            if($num == 1){
                            
                            ?>
                            <style type="text/css">
                                .vv h4{color: brown;}
                                
                            </style>
                            <div class="vv" id="vv" >
                                <h4>ADD VOLUNTEER</h4>
                                <div class="block">
                                <form method="post">

                                <select name="district"><option>Select District</option>
                                <option value="Kasaragod">Kasaragod</option><option value="Kannur">Kannur</option>
                                <option value="Wayanad">Wayanad</option><option value="Kozhikode">Kozhikode</option>
                                <option value="Malappuram">Malappuram</option><option value="Palakkad">Palakkad</option>
                                <option value="Thrissur">Thrissur</option><option value="Eranakulam">Eranakulam</option>
                                <option value="Idukki">Idukki</option><option value="Kottayam">Kottayam</option>
                                <option value="Alappuzha">Alappuzha</option><option value="Pathanamthitta">Pathanamthitta</option>
                                <option value="Kollam">Kollam</option><option value="hiruvananthapuram">Thiruvananthapuram</option>
                                </select>&nbsp;&nbsp;
                                <input type="submit" name="submit" value="SUBMIT" style="background-color: #fff;border-radius: 4px;width: 100px;height: 40px;border:1px solid #00c424;">

                                </form>

                                   <br><br><br>Available Volunteers :<br><br>
                                   <table border style="width: 900px;text-align: center;">
                                        <thead style="background-color: #333332;color: #cecfc8;"><th>NAME</th><th>GENDER</th><th>AGE</th><th>CONTACT</th><th>DISTRICT</th><th><span class='ti-settings'></span></th></thead>
                                        <?php
                                        if(isset($_POST['submit']))
                                        {
                                        $district=$_POST['district'];
                                        $sql4="SELECT * FROM volunteer_info WHERE v_district='$district' and status='free' ";
                                        $res4=mysqli_query($db,$sql4);
                                            while($row4=mysqli_fetch_array($res4,MYSQLI_ASSOC))
                                            {
                                            echo "<tr><td>{$row4['v_name']}</td><td>{$row4['v_gender']}</td><td>{$row4['v_age']}</td><td>{$row4['v_contact']}</td><td>{$row4['v_district']}</td>
                                            <td><a href='vol_add_2_rc.php?vid={$row4['v_id']}&id=$id'><span class='ti-arrow-circle-down' title='Add to your Rc'></span> </a></td></tr>";
                                            }

                                        }
                                        ?>
                                    </table>
                                    <br><br><br><br>Volunteers In your RC :<br><br>
                                    <table border style="width: 900px;text-align: center;">
                                        <thead style="background-color: #333332;color: #cecfc8;"><th>NAME</th><th>GENDER</th><th>AGE</th><th>CONTACT</th><th>DISTRICT</th><th><span class='ti-settings'></span></th></thead>
                                        <?php
                                        $sql5="SELECT * FROM volunteer_info WHERE rc_id='$id' ";
                                        $res5=mysqli_query($db,$sql5);
                                            while($row5=mysqli_fetch_array($res5,MYSQLI_ASSOC))
                                            {
                                            echo "<tr><td>{$row5['v_name']}</td><td>{$row5['v_gender']}</td><td>{$row5['v_age']}</td><td>{$row5['v_contact']}</td><td>{$row5['v_district']}</td>
                                            <td><a href='vol_remove_f_rc.php?vid={$row5['v_id']}'><span class='ti-arrow-circle-up' title='Remove from your Rc'></span></a></td></tr>";
                                            }

                                        ?>
                                        
                                    </table>


                                
                                </div>

                            </div>

                            <?php
                            }

                            if($num == 0){
                                echo "No Active Relief Centers Available,<a href='rcusercreate.php'>Create</a> a new One";
                            }                            
                           ?>                                                                                                                         
                                
            </div>    
        </div>
    </section>
    <!-- feature_part start-->

    


    <!--::our client part start::-->
    <section class="client_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <p><a href="#top">TOP</a></p>
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