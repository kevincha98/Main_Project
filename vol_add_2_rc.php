<?php
 $db = mysqli_connect('localhost', 'root', '', 'care');

 $vid=$_GET['vid'];
 $rcid=$_GET['id'];
 $sql6="UPDATE volunteer_info SET rc_id='$rcid',status='on work' WHERE v_id='$vid' ";
 mysqli_query($db,$sql6);

 header('location: rcvolunteer.php');

?>