 <title>Kandidaadid</title>
 <div class="container">
        <br>
        <h3>Kandidaadid</h3>
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>Eesnimi</th>
                    <th>Perenimi</th>
                    <th>Maakond</th>
                    <th>Partei</th>
                </tr>
                <?php foreach($complete as $kandidaat) : ?>
                    <tr>
                        <td><?php echo  htmlspecialchars($kandidaat->firstName);?></td>
                        <td><?php echo  htmlspecialchars($kandidaat->lastName);?></td>
                        <td><?php echo  htmlspecialchars($kandidaat->maakond);?></td>
                        <td><?php echo  htmlspecialchars($kandidaat->partei);?></td>
                    </tr>
                <?php endforeach ?>

            </table>
        </div>

<!-- /.container -->
