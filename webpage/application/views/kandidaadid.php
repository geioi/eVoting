
<div class="container">
        <br>
        <h3 id='kandidaadid'><?php echo lang('candidates'); ?></h3>
        <div class="table-responsive">
            <table id="myTable" class="table">
                <tr>
                    <th><?php echo lang('firstName'); ?></th>
                    <th><?php echo lang('lastName'); ?></th>
                    <th><?php echo lang('candidates_county'); ?></th>
                    <th><?php echo lang('candidates_party'); ?></th>
					<th><?php echo lang('candidates_nr'); ?></th>
                </tr>
                <?php foreach($complete as $kandidaat) : ?>
                    <tr>
                        <td><?php echo  htmlspecialchars($kandidaat->firstName);?></td>
                        <td><?php echo  htmlspecialchars($kandidaat->lastName);?></td>
                        <td><?php echo  htmlspecialchars($kandidaat->maakond);?></td>
                        <td><?php echo  htmlspecialchars($kandidaat->partei);?></td>
						<td><?php echo  htmlspecialchars($kandidaat->id);?></td>
                    </tr>
                <?php endforeach ?>

            </table>
        </div>
</div>
<!-- /.container -->