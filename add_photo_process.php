<?
  require_once('lib/mysql-cfg.php');
  
  $i = 0;
  $nomeArquivo;
  
  foreach ($_FILES['userfile']['name'] as &$value) {
    $sql="INSERT INTO foto (active, album) VALUES (1, " . $_POST['id_photo'] . ")";
    $MySQLi->query($sql) OR trigger_error($MySQLi->error, E_USER_ERROR);
    $nomeArquivo = $MySQLi->insert_id;
          
    move_uploaded_file($_FILES["userfile"]["tmp_name"][$i],
      "upload/image/original/photo_$nomeArquivo.jpg");
    $i++;
  }
  
  header("location: show_album.php?id=" . $_POST["id_photo"]);
?>