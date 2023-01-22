<?php
echo 'Hallo!<p/>';
echo phpversion();
echo '<p/>';
echo "Hallo Karsten!<p>";

require_once('lib/ftDatabase.php');

$db = new ftDatabase();

printf("Success... %s\n", $db->host_info);

xdebug_info();
?>