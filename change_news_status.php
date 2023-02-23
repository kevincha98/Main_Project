<?php

$db = mysqli_connect('localhost', 'root', '', 'care');
$nid=$_GET['nid'];

$sql="SELECT status FROM newsfeed WHERE id='$nid' ";
$res=mysqli_query($db,$sql);
$row=mysqli_fetch_array($res);

if($row[0]=="show")
{
   $sql2="UPDATE newsfeed SET status='hide' WHERE id='$nid' ";
   mysqli_query($db,$sql2);
}
else
{
	$sql3="UPDATE newsfeed SET status='show' WHERE id='$nid' ";
   	mysqli_query($db,$sql3);
}

 header('location: adminnewsfeed.php');

?>