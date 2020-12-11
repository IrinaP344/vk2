<?php 
	session_start();
 ?>
<?php
	$folder = 'img/';
	$file_upload = $folder . basename($_FILES['photo']);
	move_Uploaded_file($_FILES['photo']['tmp_name'], $file_upload);
	$con = mysqli_connect('127.0.0.1', 'root','','vk');
	$query = mysqli_query($con, "INSERT INTO posts(photo,posts)  photo='{$file_upload}', post='{$_GET['post']}' WHERE id='{$_SESSION['id']}'");
	header("Location: account.php");
?>