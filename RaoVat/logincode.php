<?php
session_start();
include 'includes/security.php';



if(isset($_POST['login_btn']))
 {

 	$username = $_POST['username'];
 	$password = $_POST['password'];
 	// $username = $_POST['username'];

 	$query = "SELECT * FROM users WHERE UserName = '$username' AND Password = '$password'";
 	$query_run= mysqli_query($connection,$query);
 	$usertypes = mysqli_fetch_array($query_run);
	if($username != $_SESSION['username'] || $password != $_SESSION['Password']){
		header('Location: login.php');
		echo '<script>alert("Tài Khoản và mật khẩu không chính xác. Kiểm tra lại thông tin.");</script>';
	}
	// else{
		if($usertypes['Type'] == 'admin')
		{
			$_SESSION['username'] = $username;
			header('Location: index1.php');
   
		}
		else if ($usertypes['Type'] == 'cus') 
		{
			$_SESSION['username'] = $username;
		   header('Location: index2.php');
		}
	// }


 }

 ?>