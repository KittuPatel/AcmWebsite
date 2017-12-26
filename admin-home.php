<?php
session_start();
?>
<title>Home</title>
<a href="admin-home.php">See Messages</a>
<a href="admin-blog-post.php">Blog Posts</a><br>
<?php
	include 'db.php';
	if (!isset($_SESSION['user'])) {
		header("Location: admin.php");
	}
	$q = $db->query("SELECT * FROM messages ORDER BY id DESC");
	$i =mysqli_num_rows($q);
	while ($row = $q->fetch_assoc()) {
?>
<div class="post">
	<p><strong>Name: </strong><?php echo $i . ")". $row['name']; ?></p>
	<p><strong>Email: </strong><?php echo $row['email']; ?></p>
	<p><strong>Message: </strong><?php echo $row['message']; ?></p>
	<hr>
</div>
<?php
$i--;
	}
?>