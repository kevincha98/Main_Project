 <?php

	session_start();

	$rcname="";
	$contact="";
	$district="";
	$address="";
	$errors = array(); 
	$usern= htmlspecialchars($_SESSION["username"]);

	
	/* 
CREATE DATABASE CONNECTION
-------------*/
$db = mysqli_connect('localhost', 'root', '', 'care');


if (isset($_POST['reg_user'])){
// receive all input values from the form

$rcname=mysqli_real_escape_string($db,$_REQUEST['rcname']);
$contact=mysqli_real_escape_string($db,$_REQUEST['contact']);
$district=mysqli_real_escape_string($db,$_REQUEST['district']);
$address=mysqli_real_escape_string($db,$_REQUEST['address']);


// Number checks for length 10
  if(strlen((string)$contact)!=10)
  {
    array_push($errors, "Number must have 10 digits");
  }
//check district
  if ($district == 'Select district') {
  		 array_push($errors, "Please select your place");	
  }


 if (count($errors) == 0) 
 {
/* Storing values*/
$sql="INSERT INTO rc_register (user_name, rcname, contact, district, address) VALUES ('$usern','$rcname','$contact','$district','$address')";
mysqli_query($db,$sql);

header('location:rcuserhome.php');	
}
}


//ADD ITEMS
if (isset($_POST['additem']))
{
	$item=mysqli_real_escape_string($db,$_REQUEST['item']);
	$desc=mysqli_real_escape_string($db,$_REQUEST['desc']);
	$qty=mysqli_real_escape_string($db,$_REQUEST['qty']);
	$id=$_GET['id'];
	echo "$id";
	$add = "INSERT INTO rc_stock (rc_id,user_name,item,description,qty) VALUES ('$id','$usern','$item','$desc','$qty')";
	mysqli_query($db,$add);
 	
	header('location:rcuseritem.php'); 
}

//DELETE ITEM
// if($_GET['itm_no']!='')
// {
	
//  $item_no= $_GET['itm_no'];
//  $itmdelete="DELETE FROM rc_stock WHERE item_no='$item_no'";
//  mysqli_query($db,$itmdelete);
//  header('location:rcuseritem.php');
// }
?>