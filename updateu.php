<?php
//session_start();

$db = mysqli_connect('localhost', 'root', '', 'care');
$id= $_GET['id'];

if(isset($_POST['change']))
 {
      $name=mysqli_real_escape_string($db,$_POST['name']);
      $email=mysqli_real_escape_string($db,$_POST['email']);
      $contact=mysqli_real_escape_string($db,$_POST['contact']);
      $address=mysqli_real_escape_string($db,$_POST['address']);

      $query="UPDATE user_info SET username='$name',email='$email',contact='$contact',address='$address' WHERE user_id='$id' ";
      mysqli_query($db,$query);

                            
  } 
  header('location:adminusers.php');
?>