<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "wb");

// Check connection
if($link === false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$surname = mysqli_real_escape_string($link, $_REQUEST['surname']);
$dob= mysqli_real_escape_string($link, $_REQUEST['dob']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$postcode= mysqli_real_escape_string($link, $_REQUEST['postcode']);


// attempt insert query execution
$sql = "INSERT INTO register(username,password,surname,dob,email,phone,address,postcode) VALUES ('$username','$password','$surname','$dob','$email','$phone','$address','$postcode')";
if(mysqli_query($link, $sql)){
   echo "Records added successfully.";
} else{
   echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>