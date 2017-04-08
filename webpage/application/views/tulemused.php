<div class="container" id="container">
	<?php echo lang('results'); ?><br><br>
	
	<div class="btn-group-vertical" role="group" aria-label="Vertical button group" id="list">
        <?php echo "<a class=\"btn btn-default\" id=\"koik\" onclick='showCandidates(".$kõikKandidaadid.")' > Kõik kandidaadid</a>"; ?>
        <div class="btn-group" role="group"> 
            <button id="btnGroupVerticalDrop2" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo "vali regioon"; ?><span class="caret"></span> </button>
            <ul class="dropdown-menu" id="piirkonnad" aria-labelledby="btnGroupVerticalDrop2">
                <?php
					foreach($maakonnad as $k){
                        echo "<li><a id=".str_replace(' ', '',$k->maakond)." onclick='showCandidates(".${''.$k->maakond.''}.")'>".$k->maakond."</a></li> ";
                    }
                ?> 
            </ul> 
        </div> 
        <div class="btn-group" role="group"> 
            <button id="btnGroupVerticalDrop3" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo "vali erakond"; ?><span class="caret"></span> </button>
            <ul class="dropdown-menu" id = "erakonnad" aria-labelledby="btnGroupVerticalDrop3"> 
                <?php
					foreach($parteid as $k){
						$parteiStrip = str_replace(' ', '', $k->partei);
                        echo "<li><a id=".$parteiStrip." onclick='showCandidates(".${''.$parteiStrip.''}.")'>".$k->partei."</a></li> ";
                    }
                ?> 
            </ul> 
        </div>
    </div>
	<br><br>
	
  <div class="table-responsive" id="resp">
            <table class="table" id="tabel">
			<?php echo "<script type='text/javascript'>showCandidates({$kõikKandidaadid});</script>";?>
            </table>
		</div>
</div>

</body>
</html>