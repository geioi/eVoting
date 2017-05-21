<div class="container">
	<?php if($voted) {		?>
			<h3><?php echo lang("voted"); ?></h3>
			<button type="button" class="btn btn-default" id="cancel"><?php echo lang("cancelvote"); ?></button>
	<?php  } else {	?>
			<form id="target" action="#">
				<label for="cand"><?php echo lang("voting"); ?></label>
				<select class="form-control" name="kandidaadid" id="cand" style="height:34px;width:200px">	
					<option selected disabled><?php echo lang("choosecand"); ?></option>
					<?php foreach($kandidaadid as $kandidaat) : ?>		
						<option value="<?php echo  htmlspecialchars($kandidaat->id);?>"><?php echo htmlspecialchars($kandidaat->firstName) . " " . htmlspecialchars($kandidaat->lastName);?></option>
					<?php endforeach ?>
				</select>
				<br>
				<button type="button" class="btn btn-default" id="vote"><?php echo lang("vote_btn"); ?></button>
			</form>

	<?php } ?>
	
</div>
