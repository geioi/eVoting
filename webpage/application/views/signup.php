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
		<label for="kuupaev"><label for="kuupaev1"><label for="kuupaev2">Sünnikuupäev (DD/MM/YYYY):<br>
		<input type="text" name="date" id="kuupaev" size="3" required></label>
		<input type="text" name="month" id="kuupaev1" size="3" required></label>
		<input type="text" name="year" id="kuupaev2" size="6" required>
		</label>
		</fieldset><br><br>
		<fieldset>
		<label for="sugu_muu"><label for="sugu"><label for="sugu1"><label for="sugu2">Sugu:<br>
		<input type="radio" name="sugu" id="sugu" value="Mees"> Mees</label>
		<input type="radio" name="sugu" id="sugu1" value="Naine"> Naine</label>
		<input type="radio" name="sugu" id="sugu2" value="Muu"> Muu</label>: 
		<input type="text" name="sugu_muu" id="sugu_muu" size="14">
	</label>
	</fieldset><br><br>
	<input type="submit" name="submit" value="Registreeri">
</form>
</div>

</body>
</html>