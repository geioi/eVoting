 <?php

// THIS IS AUTO GENERATED SCRIPT
// (c) 2011-2017 Kreata OÜ www.pangalink.net

// File encoding: UTF-8
// Check that your editor is set to use UTF-8 before using any non-ascii characters

// STEP 1. Setup private key
// =========================

$private_key = openssl_pkey_get_private(
"-----BEGIN RSA PRIVATE KEY-----
MIIEowIBAAKCAQEAtXqRz4TxalbQVx5cF2c5zbijxUG7y6XfLBEDiEW27+0XvKxF
mApDFje7CMfkCNEJzeoRrFs5M2rO1SM6tMDuj0WGMEw90v/UTdT37Cgy5csut10C
D9RvI2KCz7hsMKmgLZm4ctxjDBA5JE/ryrKNqwMsW3UeE+48TqeSwLZpE7qwA9ZK
eZ759kAO3j2x1CTmqZouUvKqxl+fZm5rnaoIp8SiqhNd+E5ECFSgbsOMCy8Aumkj
RzabVukxNpd33q4dghIdUDxfrRir8sXGZiEUNrrC4V6S33zWkB5kLX1akNpSTJ0g
yvPHuDxRqgysUU8wpJVIyIxn/HpcqlxV9rX0GwIDAQABAoIBADVdvdMQfQ2QSePU
gbBAIrdkPISdN+RC+sWymx9PoOQdDIXnAvAa1G+MI+wJG/2buw5abqgIi2GbXwc+
PN06fuySvUsmoGeT45Kfteg0SgNZJHu3VgvhpGz7YwxCZ05IE1pVgfAE7vt1KdiL
yALrTs2jOUALyLSDsihPDtCs02mBVY9rCY+HD39UPHwyKWJ3fySjSzi2zIY3snPw
e9h+/OPW3Ihl+aTW+yRuMFSTTFPw7kbwr9oED2TjIg/OYa9VhUle/RtoMdKAuIMa
kZm5i25iy8mDgrxjekVi9OcPepkD+Td+NEBXmXQRZJZje95E2Og2v1spm/e4RSjF
9J0Yo0ECgYEA5TL+R6mJQsm0j/YZqZzq8rFpCrt6FGTsSaPoee+G7KaS2OnMQoq4
FloL+o/uuzqdOF3Ax4xck7x73lDX/Mevs3O5QdOTftelzdryCVVcc1MLzHPI7wy5
0jK7KzHqpmLPPPVyRrVDRl1DPS93rYgdfhwBRwH2UFoiYBpK2KXLYfcCgYEAyrMU
rVbTGSy1NV0Nv3eBxNZ4+mmkg0rCY70ruan0fg14xTD+th37xWLsBm51KY8J1hJ/
CTraVGwqtSgNrKQg49qk2/yJP0U1gsIHHB5UINZRNImmDhfA6NRx23CfU+TzJLQN
r0coxumMCketuctqj9Km0nYFr3lElLmT6k6CNf0CgYAibi+eqkwxWUWjnq+qOCVf
QeFquFEVgTextEq3DpFxOXCz3yNNF7Ohv/Mut7KAM8Tsc8EC+QXrN5RQCEr58TFm
vsqkpdjxZAnHS82yMz2JIX+TPg2AQ6QifHZ7fasnRY6mNKTvFEm/50Czj07mJZ1w
lVpnxVawKWoij7CQrQ9JbwKBgQCcfdfX37GIvRiFw3rKuJQqiL7L7eXCK2SapkDs
zYbiDrqP2zy7E7j+clnwuTShSjp42LzVPmezR/NM+0hbYje2UmZ3JKg9fcxLUEs2
7T9cPrphCmh2duZLm0Dv/yozFg6V5qCuEw0rTMH+acp5J8/0i9iZod7P05scC45k
Fgq3bQKBgBZVLZRhvOw7zHQ2RwoY0UezHHBGZySsia+3XMY2eOykPHUUfW62Ca7E
x6BO+r9NytvqlKkrRq8ZuXQPp8rnBlaXcmS8cNur/OC7JyxmCyscqFBkvrZqfzS4
TwKTiREj7Q4xo50YlsoigC/C/+iPXKMUs/Gy+bwZR5sKTuXeRJuP
-----END RSA PRIVATE KEY-----");

// STEP 2. Define payment information
// ==================================

$fields = array(
        "VK_SERVICE"     => "1011",
        "VK_VERSION"     => "008",
        "VK_SND_ID"      => "uid100010",
        "VK_STAMP"       => "12345",
        "VK_AMOUNT"      => "10",
        "VK_CURR"        => "EUR",
        "VK_ACC"         => "EE152200221234567897",
        "VK_NAME"        => "eVoting",
		"VK_REF" => "1234561",
        "VK_CANCEL" => 'http://www.evoting.cs.ut.ee',
        "VK_MSG"         => "annetus",
        "VK_DATETIME"    => "2017-03-30T18:50:14+0300",
        "VK_RETURN"      => "http://www.evoting.cs.ut.ee",
        "VK_CHARSET"     => "UTF-8",
		"PANGALINK_NAME" => "Sisesta nimi",
		"PANGALINK_ACCOUNT" => "Sisesta kontonumber"
);

// STEP 3. Generate data to be signed
// ==================================

// Data to be signed is in the form of XXXYYYYY where XXX is 3 char
// zero padded length of the value and YYY the value itself
// NB! Swedbank expects symbol count, not byte count with UTF-8,
// so use `mb_strlen` instead of `strlen` to detect the length of a string

$data = str_pad (mb_strlen($fields["VK_SERVICE"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_SERVICE"] .    /* 1011 */
        str_pad (mb_strlen($fields["VK_VERSION"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_VERSION"] .    /* 008 */
        str_pad (mb_strlen($fields["VK_SND_ID"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_SND_ID"] .     /* uid100010 */
        str_pad (mb_strlen($fields["VK_STAMP"], "UTF-8"),   3, "0", STR_PAD_LEFT) . $fields["VK_STAMP"] .      /* 12345 */
        str_pad (mb_strlen($fields["VK_AMOUNT"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_AMOUNT"] .     /* 0.05 */
        str_pad (mb_strlen($fields["VK_CURR"], "UTF-8"),    3, "0", STR_PAD_LEFT) . $fields["VK_CURR"] .       /* EUR */
        str_pad (mb_strlen($fields["VK_ACC"], "UTF-8"),     3, "0", STR_PAD_LEFT) . $fields["VK_ACC"] .        /* EE152200221234567897 */
        str_pad (mb_strlen($fields["VK_NAME"], "UTF-8"),    3, "0", STR_PAD_LEFT) . $fields["VK_NAME"] .       /* makse_saaja */
        str_pad (mb_strlen($fields["VK_REF"], "UTF-8"),     3, "0", STR_PAD_LEFT) . $fields["VK_REF"] .        /*  */
        str_pad (mb_strlen($fields["VK_MSG"], "UTF-8"),     3, "0", STR_PAD_LEFT) . $fields["VK_MSG"] .        /* Torso Tiger */
        str_pad (mb_strlen($fields["VK_RETURN"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_RETURN"] .     /* http://localhost/banklink2/notify.php */
        str_pad (mb_strlen($fields["VK_CANCEL"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_CANCEL"] .     /*  */
        str_pad (mb_strlen($fields["VK_DATETIME"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_DATETIME"];    /* 2017-03-30T16:37:07+0300 */

/* $data = "0041011003008009uid100010005123450040.05003EUR020EE152200221234567897011makse_saaja000011Torso Tiger037http://localhost/banklink2/notify.php0000242017-03-30T16:37:07+0300"; */

// STEP 4. Sign the data with RSA-SHA1 to generate MAC code
// ========================================================

openssl_sign ($data, $signature, $private_key, OPENSSL_ALGO_SHA1);

/* OaG55n5T67/NIfdwgnUFYvIY2MptjpRcnjZnbG1zqzgG009GIBKbmLiSNzcnvdxYIjlySNRDe+pFHgn8wn5ulEtvyC9yw77lcjGL/5+xR+4w0c0B9JdQBF9+vTiP9WJpjn0E69+vyo1Y6CoiJPaBUCPynNkpsXHmSf6yJIWd/YjlyFN1SC3UbARVralvlo32UCkxyRfo97FnBDGFkvtqaNkCpfovxHDowUSftsGt5vVITVQyNDO9UbHd7DVxP272oDnHKSjwmnkMr9cyLrN/gG9+B0BzzzL+DFdW9TFKGnaZKcOMl6kfOpq09+aUnGQJ3dQ1inXMXTmGY4xAxNcNEw== */
$fields["VK_MAC"] = base64_encode($signature);

// STEP 5. Generate POST form with payment data that will be sent to the bank
// ==========================================================================
?>
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

        <form method="post" action="http://localhost:8080/banklink/swedbank-common">
            <!-- include all values as hidden form fields -->
<?php foreach($fields as $key => $val):?>
            <input type="hidden" name="<?php echo $key; ?>" value="<?php echo htmlspecialchars($val); ?>" />
<?php endforeach; ?>

  

                <!-- when the user clicks "Edasi panga lehele" form data is sent to the bank -->
                <tr><td colspan="2"><input type="submit" value="Edasi panga lehele" /></td></tr>
            </table>
        </form>
  
  </div>
</body>
</html>


