<div class="container">

	<p>
		<?php 
			echo $message;
			unset($_SESSION['message']);
		?>
	</p>

<form name="registreeri" method="POST" action="Register">
		<label for="email">Email:<br>
		<input type="email" name="email" id="email" required>
		</label><br><br>
		<label for="eesnimi"><?php echo lang('firstName'); ?>:<br>
		<input type="text" name="eesnimi" id="eesnimi" required>
		</label><br><br>
		<label for="perekonna_nimi"><?php echo lang('lastName'); ?>:<br>
		<input type="text" name="perekonna_nimi" id="perekonna_nimi" required>
		</label><br><br>
		<label for="isikukood"><?php echo lang('personalID'); ?>:<br>
		<input type="text" name="isikukood" id="isikukood" required>
		</label><br><br>
		<label for="parool"><?php echo lang('password'); ?>:<br>
		<input type="password" name="parool" id="parool" required>
		</label><br><br>
		<label for="parool_uuesti"><?php echo lang('passwordAgain'); ?>:<br>
		<input type="password" name="parool_uuesti" id="parool_uuesti" required>
		</label><br><br>
		<fieldset>
		<label for="synnikuupaev"><?php echo lang('dob'); ?> (DD /</label>
		<label for="sünnikuupaev">MM /</label>
		<label for="sünnikuupäev">YYYY)</label><br>
		<input type="text" name="date" id="synnikuupaev" size="3" required>
		<input type="text" name="month" id="sünnikuupaev" size="3" required>
		<input type="text" name="year" id="sünnikuupäev" size="6" required>
		</fieldset><br>
		<fieldset>
		<label><?php echo lang('gender'); ?>:</label><br>
		<input type="radio" name="sugu" id="sugu_mees" value="Mees"> <label for="sugu_mees"><?php echo lang('gender_male'); ?></label>
		<input type="radio" name="sugu" id="sugu_naine" value="Naine"> <label for="sugu_naine"><?php echo lang('gender_female'); ?></label>
		<input type="radio" name="sugu" id="sugu" value="Muu"> <label for="sugu"><?php echo lang('gender_other'); ?></label>
		<label for="sugu_muu">:</label><input type="text" name="sugu_muu" id="sugu_muu" size="14">
	</fieldset><br><br>
	<input type="submit" name="submit" value="<?php echo lang('reg_btn'); ?>">
</form>
</div>

</body>
</html>