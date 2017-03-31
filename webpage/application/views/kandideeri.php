<div class="container">
	<p>
		<?php 
			echo $message;
			unset($_SESSION['message']); 
		?>
	</p>
  <form name="kandideerimine" method="POST" action="Kandideerimine">
		<label for="partei"><?php echo lang('candidacy_partyName'); ?><br>
		<input type="text" name="partei" id="partei" required>
		</label><br><br>
		<label for="maakond"><?php echo lang('candidates_county'); ?>:<br>
		<input type="text" name="maakond" id="maakond" required>
		</label><br><br>
	<input type="submit" name="submit" value="<?php echo lang('candidacy_btn'); ?>">
</form>
</div>


</body>
</html>