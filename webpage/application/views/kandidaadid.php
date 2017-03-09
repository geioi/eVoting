 <div class="container">
        <br>
        <h3>Kandidaadid: </h3>
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Perenimi</th>
                    <th>maakond</th>
                    <th>partei</th>
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
