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
<h3>Your Username</h3>
<?php
highlight_string('<?php echo $Stats->name; ?>');
?>
<h5>Results: <?php echo $Stats->name; ?></h5>
<hr>
<h3>Your Tribe<h3>
<?php
highlight_string('<?php echo $Stats->tribe; ?>');
?>
<h5>Results: <?php echo $Stats->tribe ?></h5>
<hr>
<h3>Your Registration Date<h3>
<?php
highlight_string('<?php echo $Stats->registration; ?>');
?>
<h5>Results: <?php echo $Stats->registration ?></h5>
<hr>
<h3>Your Registration ID<h3>
<?php
highlight_string('<?php echo $Stats->id; ?>');
?>
<h5>Results: <?php echo $Stats->id ?></h5>
<hr>
<h3>Your Experience Points<h3>
<?php
highlight_string('<?php echo $Stats->experience; ?>');
?>
<h5>Results: <?php echo $Stats->experience ?></h5>
<hr>
<h3>Your Level<h3>
<?php
highlight_string('<?php echo $Stats->level; ?>');
?>
<h5>Results: <?php echo $Stats->level ?></h5>
<hr>
<h3>Your Title<h3>
<?php
highlight_string('<?php echo $Stats->title; ?>');
?>
<h5>Results: <?php echo $Stats->title ?></h5>
<hr>
<h3>Rounds that you've played<h3>
<?php
highlight_string('<?php echo $Stats->round_played; ?>');
?>
<h5>Results: <?php echo $Stats->round_played ?></h5>
<hr>
<h3>Cheese gathered as Shaman<h3>
<?php
highlight_string('<?php echo $Stats->shaman_cheese; ?>');
?>
<h5>Results: <?php echo $Stats->shaman_cheese ?></h5>
<hr>
<br>
<br>
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