<?php
include('Config.php')
?>
<html>
<head>
<title>Micetigri API</title>
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/bootstrap-theme.css">
<head>
<body>
<center>
<div class="page-header">
  <h1>Micetigri Api</h1>
</div>
<h3>Username</h3>
<?php
highlight_string('<?php echo $Stats->name; ?>');
?>
<h5>Results: <?php echo $Stats->name; ?></h5>
<hr>
<h3>Tribe<h3>
<?php
highlight_string('<?php echo $Stats->tribe; ?>');
?>
<h5>Results: <?php echo $Stats->tribe ?></h5>
<hr>
<h3>Registration Date<h3>
<?php
highlight_string('<?php echo $Stats->registration; ?>');
?>
<h5>Results: <?php echo $Stats->registration ?></h5>
<hr>
<h3>ID<h3>
<?php
highlight_string('<?php echo $Stats->id; ?>');
?>
<h5>Results: <?php echo $Stats->id ?></h5>
<hr>
<h3>Experience<h3>
<?php
highlight_string('<?php echo $Stats->experience; ?>');
?>
<h5>Results: <?php echo $Stats->experience ?></h5>
<hr>
<h3>Level<h3>
<?php
highlight_string('<?php echo $Stats->level; ?>');
?>
<h5>Results: <?php echo $Stats->level ?></h5>
<hr>
<h3>Titles<h3>
<?php
highlight_string('<?php echo $Stats->title; ?>');
?>
<h5>Results: <?php echo $Stats->title ?></h5>
<hr>
</center>
<nav class="navbar navbar-default navbar-fixed-bottom">
  <div class="container">
   <div class="navbar-header">
    <a class="navbar-brand" href="https://github.com/Cheesezwheel">Maybe by CheesezWheel</a>
	
  </div>
</div>
</div>
</div>
</nav>
<script src="../js/bootstrap.js">
</body>
</html>