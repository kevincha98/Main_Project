<?php
  $db = mysqli_connect('localhost', 'root', '', 'care');

  $did=$_GET['did'];
  $query="SELECT * FROM user_info WHERE user_id='$did' ";
  $res=mysqli_query($db,$query);
  $row1=mysqli_fetch_array($res,MYSQLI_ASSOC);
  

  if($did!='')
  {
  	if($row1['ac_status']=='Active')
  	{
  	$sql67="UPDATE user_info SET ac_status='Deactive' WHERE user_id=$did ";
  	mysqli_query($db,$sql67);
  	header('location:adminusers.php');
  	}
  	else
  	{
  		$sql44="UPDATE user_info SET ac_status='Active' WHERE user_id=$did ";
  		mysqli_query($db,$sql44);
  		header('location:adminusers.php');
  	}
  }
 
?>