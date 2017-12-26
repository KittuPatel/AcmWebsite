<?php
session_start();
?>
<html>
<head>
<title>Home</title>
<script src="http://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
</head>
<body>
<a href="admin-home.php">See Messages</a>
<a href="admin-blog-post.php">Blog Posts</a><br>
<?php
	include 'db.php';
	if (!isset($_SESSION['user'])) {
		header("Location: admin.php");
	}
	if (isset($_POST['submit'])) {
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$date = date("d-m-y");
		if ($subject != null && $message != null) {
			$q = $db->query("INSERT INTO blog(subject, message, time) VALUES('$subject', '$message', '$date')");
		}else{
        			echo "<script>alert('All Feilds are mandatory');</script>";
		}
	}
?>
<h1>Write Blog Post</h1>
<form method="post">
	<input type="text" name="subject" placeholder="Subject"> <br>
	<textarea name="message" id="editor"></textarea> <br>
	<input type="submit" name="submit">
</form>
<script type="text/javascript">
	CKEDITOR.replace("editor");
</script>
</body>
</html>