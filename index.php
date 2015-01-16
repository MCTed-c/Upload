<?php
include('core.php');

if(isset($_SESSION['username'])) {
	
	header('Location: redirect/');
} else {
	header('Location: login.php');
}
?>
