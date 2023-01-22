<?php
echo 'Hallo!<p/>';
echo phpversion();
echo '<p/>';
echo "Hallo Karsten!<p>";

require_once('lib/ftDatabase.php');
require_once('lib/ftPart.php');

$db = new ftDatabase();

printf("Success... %s\n", $db->host_info);

$parts = new ftPart($db);

xdebug_info();
?>