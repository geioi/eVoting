<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
    <h2><?php echo $title; ?></h2>
    <hr>
    <div class="row">
        <div class="col-xs-12">

                <li><a href="<?php echo base_url(); ?>index.php/welcome"><?php echo lang("menu_main"); ?></a></li>
				<li><a href="<?php echo base_url(); ?>index.php/tulemused"><?php echo lang("menu_results"); ?></a></li>
				<li><a href="<?php echo base_url(); ?>index.php/kandidaadid"><?php echo lang("menu_candidates"); ?></a></li>
                <?php
                if (isset($_SESSION['login'])){	 ?>
					<li><a href="<?php echo base_url(); ?>index.php/haaleta"><?php echo lang("menu_vote"); ?></a></li>
					<li><a href="<?php echo base_url(); ?>index.php/kandideeri"><?php echo lang("menu_candidacy"); ?></a></li>
                <?php
                } else { ?>
                    <li><a href="<?php echo base_url(); ?>index.php/signup"><?php echo lang("menu_signup"); ?></a></li>
					<li><a href="<?php echo base_url(); ?>index.php/login"><?php echo lang("menu_login"); ?></a></li>
				<?php
                } ?>
		</div>
	</div>
</div>