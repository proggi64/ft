<?php
echo 'Hallo!<p/>';
echo phpversion();
echo '<p/>';
echo "Hallo Karsten!<p>";

require_once('lib/ftDatabase.php');
require_once('lib/ftPart.php');

$db = new ftDatabase();
$parts = new ftPart($db);
$parts->Test();

printf("Success... %s\n", $db->host_info);

$beimAnlegen = 'password';
$hashInDatenbank = password_hash($beimAnlegen, PASSWORD_DEFAULT);
$beimPruefen = 'passwordx';
$test = password_verify($beimPruefen, $hashInDatenbank);
if ($test)
    echo '<p>Passwort OK</p>';
else
    echo '<p>Falsches Passwort</p>';

?>