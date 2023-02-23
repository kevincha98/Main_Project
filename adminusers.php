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
    <!-- style popup CSS -->
    <link rel="stylesheet" href="css/popup.css">
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
                                        <a href="adminusers.php?logout='1'"  class="dropdown-item"> logout</a> 
                                        
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
        .home h3{text-transform: uppercase;font-family: courier;}
        .no{font-size: 60px;text-align: center;}
        .report{position: relative;left: 100px;top: 60px;} 
        #newid input[type='text'],#newid input[type='email'],#newid input[type='number'],#newid input[type='password'],#newid textarea{width: 500px;resize: none;border-radius: 4px;border:1px solid #ccc;padding: 6px 20px;}
        #newid td{height: 50px;}
        .report p {color: red;}
        .ti-panel{color: #00c424;}
        .heading{background-color: #333332;color:#cecfc8 ;}



        
    </style>
    <section class="feature_part">
        <div class="container1">
           <div class="vertical-menu">
            <a href="admin.php"><span class="ti-home"></span> Home</a>
            <a href="#" class="active" >RC Managers</a>
            <a href="admincenters.php">Relief Centers</a>
            <a href="admindonation.php">Donation Requests</a>
            <a href="">Volunteers Info</a>
            <a href="">Message to RC</a>
            <a href="adminfeedback.php">View Feedbacks</a>
            <a href="">News Feed</a>
            <a href="#" onclick=" document.getElementById('modal-wrapper').style.display='block' ">Change Password</a>
           </div>
        </div>

           <div class="home">
               <div class="report">
                <?php 
                        if(isset($_POST['submit']))
                        {
                            $uname='';
                            $email='';
                            $contact='';
                            $address='';
                            $uname=mysqli_real_escape_string($db,$_POST['name']);
                            $email=mysqli_real_escape_string($db,$_POST['email']);
                            $contact=mysqli_real_escape_string($db,$_POST['contact']);
                            $address=mysqli_real_escape_string($db,$_POST['address']);
                            $password=mysqli_real_escape_string($db,$_POST['password']);

                            $user_check_query="SELECT * FROM user_info WHERE username='$uname' or email='$email' LIMIT 1";
                            $results = mysqli_query($db,$user_check_query);
                            $user = mysqli_fetch_assoc($results);
                            if($user)   // Checks username & email Already Exits.
                            {
                                    if($user['username'] === $uname){ echo "<p>username already exists</p>";}
                                    elseif($user['email'] === $email){  echo "<p>This email id already taken</p> ";}
                            }
                            elseif(strlen((string)$contact)!=10)
                            {
                                echo "<p>Enter a valid number</p>";
                            }
                            elseif(strlen((string)$password)<6 )
                            {
                                echo "<p>Password needs Minimum 6 characters</p>";
                            }
                            else
                            {
                            $sql12="INSERT INTO user_info (username,email,contact,address,password) VALUES ('$uname','$email','$contact','$address','$password')";
                            mysqli_query($db,$sql12);
                            echo "<p>User Added Successfully..</p>";
                            }
                        }

                ?>

                    <div id="newid"><b>ADD NEW MANAGERS</b>
                        <form method="post">
                             
                            <table >
                            <tbody>
                            <tr><td>User name</td><td>:&nbsp;<input type="text" name="name" required value="<?php $uname; ?>"></td></tr>
                            <tr><td>Email</td><td>:&nbsp;<input type="text" name="email" required value="<?php  $email; ?>"></td></tr>
                            <tr><td>Contact</td><td>:&nbsp;<input type="number" name="contact" required value="<?php echo $contact; ?>"></td></tr>
                            <tr><td>Address</td><td>:&nbsp;<textarea name="address" required value="<?php echo $address; ?>"></textarea></td></tr>
                            <tr><td>Password</td><td>:&nbsp;<input type="password" name="password" required></td></tr>
                            </tbody>
                            </table><br>
                            <input type="submit" name="submit" value="Add Manager" style="border: none;background-color: #00c424;color: #fff;border-radius: 4px;width: 100px;" >
                        </form>
                        
                        
                    </div>
                         
                    <br><br>
                   <table border style="width: 150%;text-align: center;">
                       <thea d class="heading"><th>USER NAME</th><th>EMAIL ID</th><th>CONTACT NO</th><th>ADDRESS</th><th>STATUS</th><th><span class='ti-settings'></span></th><th>Info</th></thead>
                               <?php

                                $sql1="SELECT * FROM user_info WHERE category='camp' ORDER BY ac_status";
                                $res1=mysqli_query($db,$sql1);
                                while($row=mysqli_fetch_array($res1,MYSQLI_ASSOC))
                                {
                                    echo "<tr><td>{$row['username']}</td>
                                    <td>{$row['email']}</td>
                                    <td>{$row['contact']}</td>
                                    <td>{$row['address']}</td>
                                    <td>{$row['ac_status']}</td>
                                    <td><a href='adminuser_change_delete.php?did={$row['user_id']}'><span class='ti-reload' title='Change status'></span></a></td><td><a href='updateuser.php?id={$row['user_id']}'>Update</a></td></tr>";
                                }

                                ?>

                   </table>
               </div>
           </div>

           <!-- div for change Password -->
            <div id="modal-wrapper" class="modal">
                <form class="modal-content animate" action="#" method="post" name="change">
                    
                    <div class="headcontainer">
                        <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close">&times;</span>
                        <h1 style="text-align:center;font-family: arial;">Change Password</h1>
                    </div>

                    <center>
                    <div class="form123">
                        <div class="select" style="position: relative;left: 330px;">
                        <select id="ids" name="ids">
                            <option value="0">Select Id</option>
                            <?php 
                             $sql56="SELECT * FROM user_info WHERE category='camp' ";
                             $res56=mysqli_query($db,$sql56);
                             while ($row56=mysqli_fetch_array($res56)) 
                               {
                                   echo "<option value='{$row56[0]}'>{$row56[0]}-{$row56[1]}</option>";
                               }  
                             ?>
                        </select>
                        </div><br><br><br>
                        New &nbsp;<input type="text" placeholder="Password" name="psw"  required><br><br> 
                        <button type="submit" style="border: none;background-color: #00c424;color: #fff;border-radius: 4px;width: 100px;" name="change" onclick="return check();">Change
                        </button><br>
                        <script type="text/javascript">
                            function check() {
                                var len=document.change.psw.value.length;
                                var str=document.change.ids.value;
                                if(str=="0")
                                {
                                    alert('Select User id');
                                    return false;
                                }
                                else if(len<6)
                                {
                                    alert("Minimum Password length is 6 ");
                                    return false;
                                }
                                else
                                {
                                    return true;
                                }
                            }
                        </script>
                    </div>
                    <?php  
                    if(isset($_POST['change']))
                    {
                        $ids=$_POST['ids'];
                        $pasw=$_POST['psw'];
                        $sql32=" UPDATE user_info SET password='$pasw' WHERE user_id='$ids' ";
                        mysqli_query($db,$sql32);
                        

                    }
                    ?>
                    </center>

                </form>
            </div>
            <script>

                
            // If user clicks anywhere outside of the modal, Modal will close
            var modal = document.getElementById('modal-wrapper');
            window.onclick = function(event) 
            {
                if (event.target == modal) 
                {
                modal.style.display = "none";
                }
            }
            </script>
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