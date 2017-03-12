 <title>Login</title>
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
</div>

</body>
</html>