<?php 
	session_start();
 ?>
<?php 
		$con = mysqli_connect('127.0.0.1', 'root','','vk');
	$query = mysqli_query($con, "SELECT * FROM users WHERE phone='{$_GET['phone']}' AND password='{$_GET['password']}'");
	$result = $query->fetch_assoc();
	$_SESSION['id'] = $result['id'];
	if (mysqli_num_rows($query)>0) {
		header("Location: account.php");
	}else{
		header('Location: index.php');
	}
	
 ?>