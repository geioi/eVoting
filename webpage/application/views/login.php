<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap-social.css">

<div class="container">
<p>
	<?php 
	  echo $message; 
	  unset($_SESSION['message']); 
	  ?>
</p>
	<form action="Sisselogimine" method="POST">
		<label for="isikukood"> Isikukood:<br>
		<input type="text" id="isikukood" name="person_id" value="">
		</label>
		<br>
		<label for="parool">Parool:<br>
		<input type="password" id="parool" name="password" value="">
		</label>
		<br><br>
		<input type="submit" value="Logi sisse">
	</form>
	<hr>
	
	<div>
        <a <?php echo "href='$loginUrl'"; ?>
			class="btn btn-social btn-facebook">
			<em class="fa fa-facebook"></em> Sign in with Facebook
		</a>
        </div>
	
</div>
</html>