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
?>