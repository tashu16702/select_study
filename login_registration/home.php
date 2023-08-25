<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <h2>
     <a href="logout.php">Logout</a></h2>
     <h2>
     <a href="http://127.0.0.1:5500/main/index.html">Home</a>
</h2>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>