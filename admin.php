<?php
	session_start();
	include 'db.php';
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		if ($username = "acm-jbiet" && $password == "Jbiet@ACM") {
			$_SESSION['user'] = $username;
			header("Location: admin-home.php");
		}
	}
?>
<style>
	body{
		background-color: azure;
	}
	.box{
		margin: auto;
		padding: 10px;
	}
	.inputBtn{
		padding: 14px 28px;
		margin-bottom: 20px;
	}
	.subBtn{
		padding: 14px 28px;
	}
	
</style>

<div class="box">
<form method="post">
	<input class="inputBtn" type="text" name="username" placeholder="Username"><br>
	<input class="inputBtn" type="password" name="password" placeholder="Password"><br>
	<input class="subBtn" type="submit" name="submit" value="Submit">
</form>
</div>