<?php
session_start();
$db_hostname = 'localhost';
$db_username = '';
$db_password = '';
$db_name = 'my_generat0r';

mysql_select_db($db_name, mysql_connect($db_hostname, $db_username, $db_password)) or die("Impossibile connettersi.".mysql_error());
function clear($var) {
	return addslashes(htmlspecialchars(trim($var)));
}
?>
