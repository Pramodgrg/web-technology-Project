<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name']) ) {

?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<h1>Hello, <?php echo $_SESSION['user_name']; ?></h1><br>
	<a href="logout.php">logout</a>
</body>
</html>
<?php
}else{
	header("location: index.php");
	exit();
} 

 ?>