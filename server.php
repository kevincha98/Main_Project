<?php
session_start();
// initializing variables
$userid="";
$username = "";
$email    = "";
$contact = "";
$address ="";
$aadhar_no = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'care');

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  $query = "SELECT * FROM user_info WHERE username='$username' AND password='$password'";
  $results = mysqli_query($db, $query);
  if(mysqli_num_rows($results)<1)
  {
    echo "<script> alert('Invalid username/password'); </script>";
  }
  else
  {
  $row = mysqli_fetch_array($results);

  if($row['ac_status']=='Deactive')
  {
    array_push($errors, "Account Deactivated  -  Contact Admin for activation ");
  }

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
   // $password = md5($password);
    
    $test=$row['category'];


    if (mysqli_num_rows($results) == 1)
    {
      $_SESSION['username'] = $username;
     // $_SESSION['success'] = "You are now logged in";
       if($test=='admin')
       {
       
        header('location: admin.php');
       }
      else
       {
      header('location: rcuserhome.php');
       }
    }
    
  }
}
}



/*
// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);

  $contact = mysqli_real_escape_string($db, $_POST['contact']);
  $address = mysqli_real_escape_string($db, $_POST['address']);

  $aadhar_no = mysqli_real_escape_string($db, $_POST['aadhar']);
  
  //IMAGE QUERY

  $imagename = $_FILES["aadharpic"]["name"];
  $file_path = $_FILES["aadharpic"]["tmp_name"];

  $imagetmp = addslashes(file_get_contents($_FILES["aadharpic"]["tmp_name"]));

  move_uploaded_file($file_path, 'pics/'.$imagename);

  //IMAGE QUERY END 

  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array

   if ($password_1 != $password_2) {array_push($errors, "The two passwords do not match");}

  // check db for existing user with same username
  $user_check_query="SELECT * FROM user_info WHERE username='$username' or email='$email' LIMIT 1";

  $results = mysqli_query($db,$user_check_query);
  $user = mysqli_fetch_assoc($results);

  if($user){

    if($user['username'] === $username){ array_push($errors, "username already exists");}
    if($user['email'] === $email){ array_push($errors, "This email id already taken ");}
  }
  // Number checks for length 10
  if(strlen((string)$contact)!=10)
  {
    array_push($errors, "Enter a Valid number");
  }
    
     //Aadhar number length 12
  if (strlen((string)$aadhar_no)!=12)
  {
     array_push($errors, "Aadhar  Number must be 12 digits");
  }


  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database

  $sql="INSERT INTO user_info (username,email,contact,address,aadhar_no,aadhar_img,img_name,password)
               VALUES('$username','$email','$contact','$address','$aadhar_no','$imagetmp','$imagename  ','$password')";

               

    mysqli_query($db,$sql);

    $_SESSION['username'] = $username;
    $_SESSION['success'] = ""; 
    header('location: rcuserhome.php');
  }
}

// ... // ... 

*/

?>