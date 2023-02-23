<?php

$db = mysqli_connect('localhost', 'root', '', 'care');

$vid=$_GET['vid'];

$sql="UPDATE volunteer_info SET rc_id='0' , status='free' WHERE v_id='$vid' ";
mysqli_query($db,$sql);

header('location: rcvolunteer.php');
?>