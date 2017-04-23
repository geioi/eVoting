<div class="container" id="container">
	<?php echo lang('results'); ?><br><br>
	
	<div class="btn-group-vertical" role="group" aria-label="Vertical button group" id="list">
		<button type="button" class="btn btn-default" id = "all" onClick='showCandidates(<?php echo $kõikKandidaadid ?> , 5)'><?php echo lang("allcand"); ?></button>
        <div class="btn-group" role="group"> 
            <button id="btnGroupVerticalDrop2" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo lang("chooseregion"); ?><span class="caret"></span> </button>
            <ul class="dropdown-menu" id="piirkonnad" aria-labelledby="btnGroupVerticalDrop2">
                <?php
					foreach($maakonnad as $k){
                        echo "<li><a id=".str_replace(' ', '',$k->maakond)." onclick='showCandidates(".${''.$k->maakond.''}.", 5)'>".$k->maakond."</a></li> ";
                    }
                ?>
            </ul> 
        </div> 
        <div class="btn-group" role="group"> 
            <button id="btnGroupVerticalDrop3" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo lang("chooseparty"); ?><span class="caret"></span> </button>
            <ul class="dropdown-menu" id = "erakonnad" aria-labelledby="btnGroupVerticalDrop3"> 
                <?php
					foreach($parteid as $k){
						$parteiStrip = str_replace(' ', '', $k->partei);
                        echo "<li><a id=".$parteiStrip." onclick='showCandidates(".${''.$parteiStrip.''}.", 5)'>".$k->partei."</a></li> ";
                    }
                ?> 
            </ul> 
        </div>
		<div class="btn-group" role="group"> 
            <button id="btnGroupVerticalDrop4" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo lang("choosegender"); ?><span class="caret"></span> </button>
            <ul class="dropdown-menu" id = "sood" aria-labelledby="btnGroupVerticalDrop4"> 
                <?php
					foreach($genderid as $k){
						$genderStrip = str_replace(' ', '', $k->gender);
                        echo "<li><a id=".$genderStrip." onclick='showCandidates(".${''.$genderStrip.''}.", 5)'>".$k->gender."</a></li> ";
                    }
                ?> 
            </ul> 
        </div>
    </div>
	<br><br>
	
  <div class="table-responsive" id="resp">
            <table class="table" id="tabel">
            </table>
		</div>	
	<button type="button" class="btn btn-primary btn-block" id = "nupp"><?php echo lang("loadmore"); ?></button>
</div>

</body>
</html>