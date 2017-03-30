 
<div class="container">
  <p><?php echo lang('main_txt'); ?></p>
  <?php echo $map['js']; ?>
  <?php echo $map['html']; ?>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfopMg31GEOWmiqbWs-lqa-Bu_aCf4XFE&callback=initMap" type="text/javascript"></script>
<br><br><?php
$xml=simplexml_load_file("http://localhost/eVoting/webpage/xml/file.xml");

foreach ($xml->children() as $erakond) {
    echo 'Erakond: ' . $erakond['nimi']."\n<br />"; 

    foreach ($erakond->children() as $arve) {
        echo 'Arve: ' . $arve['pangaarve']."\n<br />\n<br />";
    }
}
?>
  
  </div>
</body>
</html>


