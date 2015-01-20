<?php

include('core.php');

if(isset($_SESSION['username'])) {
	header('Location: redirect/');
	exit;
} else {
	header('Location: login.php');
	exit;
}
?>
