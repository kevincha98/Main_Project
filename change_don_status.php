<?php

$db = mysqli_connect('localhost', 'root', '', 'care');
$don_id=$_GET['did'];

$sql="SELECT transaction FROM donate WHERE d_id='$don_id' ";
$res=mysqli_query($db,$sql);
$row=mysqli_fetch_array($res);

if($row[0]=="pending")
{
   $sql2="UPDATE donate SET transaction='collected' WHERE d_id='$don_id' ";
   mysqli_query($db,$sql2);
}
else
{
	$sql3="UPDATE donate SET transaction='pending' WHERE d_id='$don_id' ";
   	mysqli_query($db,$sql3);
}

 header('location: admindonation.php');
?>