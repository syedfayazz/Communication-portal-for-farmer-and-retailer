<?php
session_start();
?>
<html>
<head>
<style>
body {background-image:url("webimage.jpg"),url("bird.jpg");
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-position : bottom right,top right;
 

font-family: Arial, Helvetica, sans-serif;}
     
form {border: 3px solid #f1f1f1;}

input[type=text],
input[type=password] {
    width: 25%;
    padding: 12px 30px;
    margin: 25px  0;
    display: inline-block;
    border: 2px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 10%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 25px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>

<body>

<h2>Login Form</h2>
 <form method="post">

  <div class="imgcontainer">
    <img src="3_trading_up.png" alt="Avatar" class="avatar">
  </div>

  <input type="radio" name="type" value="farmer"> Farmer
  <input type="radio" name="type" value="retailer">Retailer
  <input type="radio" name="type" value="admin"> Admin

</script>
  <div class="container">
    <label for="userid"><b>Userid</b></label></br>
    <input type="text" placeholder="Enter mail id" size="10" name="userid" required>
	</br>
    <label for="password"><b>Password</b></label></br>
    <input type="password" placeholder="Enter Password" size="10" name="password" required>
        </br>
    <button type="submit" size="10" name="submit">Login</button></br>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
	
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
<input type="Reset" value="Reset"/>
  </div>
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
	$userid=$_POST['userid'];
	$password=$_POST['password'];
	$msg="";

	if($userid=="admin")	
			header("location:admin.php");
	else
		echo"<script>alert ('wrong password or userid or type')</script>";
	}
 		
?>