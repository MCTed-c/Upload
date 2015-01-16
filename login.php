<?php
include('core.php');
$myquery = "mysql_query('$stringa')";

if(isset($_POST['login'])) {
	$username = isset($_POST['username']) ? clear($_POST['username']) : false;
	$password = isset($_POST['password']) ? clear($_POST['password']) : false;
	if(empty($username) || empty($password)) {
		echo 'Riempi tutti i campi.<br /><br /><a href="javascript:history.back();">Indietro</a>';
	} elseif(mysql_num_rows(mysql_query("SELECT * FROM users WHERE username LIKE '$username'")) == 0) {
		echo 'Username non trovato.<br /><br /><a href="javascript:history.back();">Indietro</a>';
	} else {
		$password = md5($password);
		$ip = $_SERVER['REMOTE_ADDR'];
		if(mysql_num_rows(mysql_query("SELECT * FROM users WHERE username LIKE '$username' AND password='$password'")) > 0) {
			if(mysql_num_rows($myquery) == 1){
				echo "Cambiare password";
			}else{
			$username = mysql_result(mysql_query("SELECT username FROM users WHERE username LIKE '$username'"), 0);
			$userid = mysql_result(mysql_query("SELECT id FROM users WHERE username LIKE '$username'"), 0);
			mysql_query("UPDATE users SET last_login='".time()."', last_ip='$ip' WHERE id='$userid'") or die(mysql_error());
			$_SESSION['username'] = $username;
			$_SESSION['userid'] = $userid;
			header('Location: index.php');
			}
		}
	}
} else {
	?>
<head><link rel="stylesheet" type="text/css" href="theme.css"></head>
<body>
	<form name="login" method="post">
		<fieldset>
    	<legend>Personal Info</legend>
        <dl>
        	<dt><label for="email">Username:</label></dt>
            <dd><input type="text" name="username" id="email" size="32" maxlength="128" /></dd>
        </dl>
        <dl>
        	<dt><label for="password">Password:</label></dt>
            <dd><input type="password" name="password" id="password" size="32" maxlength="32" /><input type="submit" name="login" id="submit" value="Submit" /></dd> 
        </dl>
        </fieldset>
           
     </form>
</body>

	<?php
}
?>
