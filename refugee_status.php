<?php
session_start();


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'care');

$username=$_SESSION['username'];
$id=$_GET['id'];
$query = "UPDATE refugee_info SET status='left Camp' WHERE rfg_id='$id' ";

mysqli_query($db,$query);


header('location: rcrefugeelist.php');
?>