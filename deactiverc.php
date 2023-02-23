<?php
session_start();


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'care');

$username=$_SESSION['username'];
$id=$_GET['id'];
//change Status of Rc To Not Active
$query = "UPDATE rc_register SET status='Not Active' WHERE user_name='$username' ";
mysqli_query($db,$query);
//set refugee status left camp
$query2="UPDATE refugee_info SET status='left camp' WHERE rc_id='$id' ";
mysqli_query($db,$query2);
//Free the volunteers from Relief center
$query3="UPDATE volunteer_info SET rc_id='0',status='free' WHERE rc_id='$id' ";
mysqli_query($db,$query3);


header('location: rcuserhome.php');
?>