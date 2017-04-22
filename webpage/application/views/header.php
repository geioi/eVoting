<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $title; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="/js/jquery.min.js">\x3C/script>')</script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>window.jQuery || document.write('<script src="/js/bootstrap.min.js">\x3C/script>')</script>
  <script type="text/javascript" src="/js/tooltip.js"></script>
  <script type="text/javascript" src="/eVoting/webpage/js/candidates.js"></script>

</head>
<body>

<nav class="navbar navbar-inherit">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/welcome"><?php echo lang("menu_name"); ?></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo base_url(); ?>index.php/welcome"><?php echo lang("menu_main"); ?></a></li>
      <li><a href="<?php echo base_url(); ?>index.php/kandidaadid"><?php echo lang("menu_candidates"); ?></a></li>
      <li><a href="<?php echo base_url(); ?>index.php/haaleta"><?php echo lang("menu_vote"); ?></a></li>
      <li><a href="<?php echo base_url(); ?>index.php/kandideeri"><?php echo lang("menu_candidacy"); ?></a></li>
	  <li><a href="<?php echo base_url(); ?>index.php/tulemused"><?php echo lang("menu_results"); ?></a></li>
    </ul>
        <ul class="nav navbar-nav navbar-right">
	  <li><a href="<?php echo base_url(); ?>index.php/langswitch/switchLanguage/estonian">Eesti</a></li>
	  <li><a href="<?php echo base_url(); ?>index.php/langswitch/switchLanguage/english">English</a></li>
      <li><a href="<?php echo base_url(); ?>index.php/signup" data-toggle="tooltip" data-placement="bottom" title="Registreeru, et hääletada ja kandideerida!"><span class="glyphicon glyphicon-user"></span> <?php echo lang("menu_signup"); ?></a></li>
      <li><a href="<?php echo base_url(); ?>index.php/login"><span class="glyphicon glyphicon-log-in"></span> <?php echo lang("menu_login"); ?></a></li>
    </ul>
  </div>
</nav>

