<div class="container">

	<?php if($voted) {		?>
			<h3> Sa oled juba oma hääle andnud! </h3>
			<button type="button" class="btn btn-default" id="cancel" value="<?php echo $_SESSION['person_id']; ?>">Tühista hääl</button>
	<?php  } else {	?>
			<h3> Vali kandidaat </h3>
			<form id="target" action="#">
				<select class="form-control" name="kandidaadid" id="cand">				
					<?php foreach($kandidaadid as $kandidaat) : ?>		
						<option value="<?php echo  htmlspecialchars($kandidaat->id);?>"><?php echo htmlspecialchars($kandidaat->firstName) . " " . htmlspecialchars($kandidaat->lastName);?></option>
					<?php endforeach ?>
				</select>
				<div id="other">
					<button type="button" class="btn btn-default" id="vote" value="<?php echo $_SESSION['person_id']; ?>">Vote</button>
				</div>
			</form>

	<?php } ?>
	
</div>
</body>
</html>
