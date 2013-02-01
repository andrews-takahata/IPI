<?
  require_once('lib/mysql-cfg.php');
  
  $sql = "INSERT INTO album (title, url_capa, publicied) values ('" . $_POST["novo_album"] . "', 'default.jpg', 0)";
  $MySQLi->query($sql) OR trigger_error($MySQLi->error, E_USER_ERROR);

  header("location: photo.php");

?>