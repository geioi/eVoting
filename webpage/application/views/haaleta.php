<div class="container">
  

  <br>
	<label for="kandidaadi_id"><?php echo lang('enter_voteID'); ?><input type="text" id="kandidaadi_id" name="kandidaadi_id" value=""></label><br>
	<br>
<input type="submit" value="<?php echo lang('vote_btn'); ?>" onclick="vote()">
<input type="hidden" name="mail" id="mail" value="<?php echo $_SESSION['email']; ?>" />

<br><br>
<p id="tekst"></p>


</div>
</body>
</html>
