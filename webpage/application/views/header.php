<!DOCTYPE html>
<html lang="en">
<head>
  <title>e-Hääletamine</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inherit">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/welcome">e-Hääletamine</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo base_url(); ?>index.php/welcome">Avaleht</a></li>
      <li><a href="<?php echo base_url(); ?>index.php/kandidaadid">Kandidaadid</a></li>
      <li><a href="#">Hääleta</a></li>
      <li><a href="#">Kandideeri</a></li>
	  <li><a href="#">Tulemused</a></li>
    </ul>
        <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

