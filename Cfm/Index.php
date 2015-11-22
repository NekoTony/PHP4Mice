<?php
include('Config.php')
?>
<html>
<head>
<title>Cfm API</title>
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/bootstrap-theme.css">
<head>
<body>
<center>
<div class="page-header">
  <h1>CheeseForMice API</h1>
<h3>Your Username<h3>
<?php
highlight_string('<?php echo $Stats->name; ?>');
?>
<h5>Results: <?php echo $Stats->name ?></h5>
<hr><h3>Your Tribe<h3>
<?php
highlight_string('<?php echo $Stats->tribe; ?>');
?>
<h5>Results: <?php echo $Stats->tribe ?></h5>
<hr><h3>Your Title<h3>
<?php
highlight_string('<?php echo $Stats->title; ?>');
?>
<h5>Results: <?php echo $Stats->title ?></h5>
<hr><h3>Rounds that you've played<h3>
<?php
highlight_string('<?php echo $Stats->rounds; ?>');
?>
<h5>Results: <?php echo $Stats->rounds ?></h5>
<hr>
<h3>Gathered Cheese<h3>
<?php
highlight_string('<?php echo $Stats->cheese; ?>');
?>
<h5>Results: <?php echo $Stats->cheese ?></h5>
<hr>
<h3>Cheese gathered as Shaman<h3>
<?php
highlight_string('<?php echo $Stats->sham_cheese; ?>');
?>
<h5>Results: <?php echo $Stats->sham_cheese ?></h5>
<hr>
</div>
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