<!DOCTYPE html>
<html>
<head>
	<title>Log In | Employee Management System</title>
	<link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>
<body>
	<header>
		<nav>
			<h1>Employee Management System</h1>
			<ul id="navli">
				<li><a class="homeblack" href="index.html">HOME</a></li>
				<!--<li><a class="homeblack" href="elogin.html">Employee Login</a></li>
				<li><a class="homered" href="alogin.php">Admin Login</a></li>-->
				
			</ul>
		</nav>
	</header>
	<div class="divider"></div>

	<div class="loginbox">
    <img src="assets/admin.png" class="avatar">
        <h1>Login Here</h1>
        <form action="" method="POST">
            <p>Email</p>
            <input type="text" name="mailuid" placeholder="Enter Email Address" required="required" autocomplete="off">
            <p>Password</p>
            <input type="password" name="pwd" placeholder="Enter Password" required="required" autocomplete="off">
            <input type="submit" name="login-submit" value="Login">
           
        </form>
    </div>
</body>
</html>
<?php
$servername="localhost";
$username="root";
$password="admin@1234";
$dbname="ems";
$conn=mysqli_connect($servername,$username,$password,$dbname) or die('Connection error');
if($conn)
{
	if(isset($_POST['login-submit']))
	{
		$email=$_POST['mailuid'];
		$password=$_POST['pwd'];

		$sql = "select * from alogin where email = '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);   
        if($count == 1){   
            echo "<script>alert('Login successful');</script>";
			mysqli_close($conn);
			header("Location: ./viewemp.php");
        }  
        else{  
            echo "<script>alert('Login failed. Invalid username or password.');</script>";
			mysqli_close($conn);  
        }     
	}	
}
?>