<?php
session_start();
if(!isset($_SESSION['id']) || $_SESSION['id']==""){
  header('location: index.php');
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin home</title>
<link rel="stylesheet" href="admin_styles.css" />
<script type="text/javascript" src="../js/jquery-1.10.2.js"></script>
</head>

<body>
<div class="home">
	<div class="welcome_admin">
		Welcome Admin
		<a href="log_out.php" style="float:right; color:red">Logout</a>
	</div>
	<div class="list">
		<ul>
			<li>
				<a href="add_edit_articles.php">Add / Edit Articles</a>
			</li>
			<li>
				<a href="ca_user_list.php">CA Users</a>
			</li>
			<li>
				<a href="consultant_user_list.php">Consultant users</a>
			</li>
			<li>
				<a href="#">Add / Edit Services</a>
			</li>
		</ul>
	</div>
</div>

</body>
</html>

