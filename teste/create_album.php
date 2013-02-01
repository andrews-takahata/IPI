<?
  require_once('lib/mysql-cfg.php');
  
  $sql = "INSERT INTO album (title, publicied) values ('$_POST["novo_album"]', 0)";
  $MySQLi->query($sql) OR trigger_error($MySQLi->error, E_USER_ERROR);
  
  mysql_query($sql);

?>