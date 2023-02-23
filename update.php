<?php
//session_start();

$db = mysqli_connect('localhost', 'root', '', 'care');
$id= $_GET['id'];

if(isset($_POST['update']))
{
	$name=mysqli_real_escape_string($db, $_POST['name']);
	$contact=mysqli_real_escape_string($db, $_POST['contact']);
	$district=mysqli_real_escape_string($db, $_POST['district']);
	$address=mysqli_real_escape_string($db, $_POST['address']);
	$pic=mysqli_real_escape_string($db, $_POST['pic']);

	$query1="UPDATE rc_register SET rcname='$name',pcharge='$pic',contact='$contact',district='$district',address='$address' WHERE rc_id='$id' ";
	$result1=mysqli_query($db,$query1);

	$capacity=mysqli_real_escape_string($db, $_POST['capacity']);
	$volunteer=mysqli_real_escape_string($db, $_POST['volunteer']);

	$query2="UPDATE rc_p_count SET capacity='$capacity',volunteer='$volunteer' WHERE rc_id='$id' ";
	$result2=mysqli_query($db,$query2);


}
header("location: rcuserhome.php");
?>