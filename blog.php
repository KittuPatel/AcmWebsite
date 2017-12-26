<!DOCTYPE html>
<html>
<title>Blog | ACM-JBIET</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">


<div class="w3-content" style="max-width:1400px">
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>BLOG</b></h1>
  <p>Welcome to the ACM-JBIET Blog.</p>
</header>

<!-- Grid -->
<div class="w3-row">
  <hr>
<?php
include 'db.php';
$q = $db->query("SELECT * FROM blog ORDER BY id DESC");
while ($row = $q->fetch_assoc()) {
?>
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    <div class="w3-container">
      <h3><b><?php echo $row['subject']; ?></b></h3>
      <h5><span class="w3-opacity"><?php echo $row['time']; ?></span></h5>
    </div>
    <div class="w3-container">
      <?php echo $row['message']; ?>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-badge"></span></span></p>
        </div>
      </div>
    </div>
  </div>
  <?php 
}
  ?>
<!-- END BLOG ENTRIES -->
</div>
<!-- END GRID -->
</div><br>

<!-- Footer -->
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
	<p></p>
  <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Previous</button>
  <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Next »</button>
  <p>Website developed by Krishna Sai Patel & Chandra Shekar Reddy.</p>
</footer>

</body>
</html>
