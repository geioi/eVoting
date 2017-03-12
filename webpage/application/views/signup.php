<title>Login</title>
<div class="container">

	<p>
		<?php 
			echo $message;
			unset($_SESSION['message']);
		?>
	</p>
</div>

<div align="center">
<form name="registreeri" method="POST" action="Register">
		<label for="email">Email:<br>
		<input type="email" name="email" id="email" required>
		</label><br><br>
		<label for="eesnimi">Eesnimi:<br>
		<input type="text" name="eesnimi" id="eesnimi" required>
		</label><br><br>
		<label for="perekonna_nimi">Perekonna nimi:<br>
		<input type="text" name="perekonna_nimi" id="perekonna_nimi" required>
		</label><br><br>
		<label for="isikukood">Isikukood:<br>
		<input type="text" name="isikukood" id="isikukood" required>
		</label><br><br>
		<label for="parool">Parool:<br>
		<input type="password" name="parool" id="parool" required>
		</label><br><br>
		<label for="parool_uuesti">Parool uuesti:<br>
		<input type="password" name="parool_uuesti" id="parool_uuesti" required>
		</label><br><br>
		<fieldset>
		<label for="synnikuupaev">Sünnikuupäev (DD/MM/YYYY):<br>
		<input type="text" name="date" id="synnikuupaev" size="3" required>
		<input type="text" name="month" id="synnikuupaev" size="3" required>
		<input type="text" name="year" id="synnikuupaev" size="6" required>
		</label></label></label>
		</fieldset><br><br>
		<fieldset>
		<label for="sugu">Sugu:<br>
		<input type="radio" name="sugu" id="sugu" value="Mees"> Mees
		<input type="radio" name="sugu" id="sugu" value="Naine"> Naine
		<input type="radio" name="sugu" id="sugu" value="Muu"> Muu: <input type="text" name="sugu_muu" id="sugu_muu" size="14">
	</label>
	</fieldset><br><br>
	<input type="submit" name="submit" value="Registreeri">
</form>
</div>

</body>
</html>