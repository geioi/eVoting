<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div class="container">
<?php
if(!empty($authUrl)) {
	echo '<a href="'.$authUrl.'"><img src="'.base_url().'images/flogin.png" alt="fblogin"/></a>';
}else{
	
?>
    <?php header('Location: '.$prev_loc); ?> 
</div>
<?php } ?>
</body>
</html>