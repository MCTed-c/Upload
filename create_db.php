<?php
require_once("core.php");
if($_GET['action']==1) {
  $q = mysql_query("CREATE TABLE IF NOT EXISTS users (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, username VARCHAR(16) NOT NULL, password VARCHAR(32) NOT NULL, email VARCHAR(60) NOT NULL, reg_ip VARCHAR(20), last_ip VARCHAR(20), reg_date INT NOT NULL, last_login INT)");
  if(!$q) 
    die("Impossibile creare le tabelle nel database.");
    
  die('Tabelle create con successo. Per ragioni di sicurezza si consiglia di cancellare questo file.<br>
    L'operazione può essere eseguita cliccando <a href="create_db.php?action=2">qui</a>');
} else if($_GET['action']==2) {
    if(!unlink("create_db.php")) 
      die("Impossibile cancellare il file.<br>Si prega di rimuovere il file create_db.php dalla directory di root del sito manualmente.";
    die("File rimosso con successo.");
}
