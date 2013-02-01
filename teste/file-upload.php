<?
  require_once('lib/mysql-cfg.php');
  
  $i = 0;
  $nomeArquivo;
  
  foreach ($_FILES['userfile']['name'] as &$value) {
    $sql="INSERT INTO foto (active, album) VALUES (1, 1)";
    $resultado = $MySQLi->mysql_query($sql) OR trigger_error($MySQLi->error, E_USER_ERROR);
    $nomeArquivo = mysql_insert_id();
          
    move_uploaded_file($_FILES["userfile"]["tmp_name"][$i],
      "upload/image/original/" . "$nomeArquivo");
    $i++;
  }
?>