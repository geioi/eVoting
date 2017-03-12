<title>Login</title> 
<div class="container">
  
<p>
	<?php 
	  echo $message; 
	  unset($_SESSION['message']); 
	  ?>
</p>
	<form action="Sisselogimine" method="POST">
		Kasutaja:<br>
		<input type="text" id="username" name="username">
		<br>
		Parool:<br>
		<input type="password" id="password" name="password">
		<br><br>
		<input type="submit" value="Logi sisse">
	</form>
</div>

</body>
</html>