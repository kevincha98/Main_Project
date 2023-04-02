<?php
include("../connect.php");
if(isset($_POST['payment_id'])&& isset($_POST['amt'])&& isset($_POST['name']))
{
    $payment_id=$_POST['payment_id'];
    $amt=$_POST['amt'];
    $name=$_POST['name'];
    $payment_status="1";
    $AD_id = "1";
    mysqli_query($conn,"INSERT INTO `tbl_payment`(`name`,`amounT`,`payment_status`,`payment_id`,`Ad_Id`)
    VALUES('$name','$amt','$payment_status','$payment_id','$AD_id')");
}
?>