<?
  require_once('lib/comum.php'); 
  require_once('lib/mysql-cfg.php');
?>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <title>IPI Quita�na</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
</head>

<div id="contentnew">
  <div class="article">
    <form action="create_album.php" method="post" enctype="multipart/form-data">
      <p>
        Criar &Aacute;lbum:&nbsp;
        <input type="text" name="novo_album" />&nbsp;&nbsp;
        <input type="submit" value="Enviar" /></p>
    </form><br>

    <table>
      <tr>
        <?
          $i=0;
          $sql="SELECT * FROM album ORDER BY publicied_date, id DESC";
          $resultado = $MySQLi->query($sql) OR trigger_error($MySQLi->error, E_USER_ERROR);
          while ($album = $resultado->fetch_object()) {
            ?>
              <td>
                <a href="show_album.php?id=<? imprime("$album->id"); ?>">
                  <img src="upload/image/mini/<? imprime("$album->url_capa"); ?>" alt="<? imprime("$album->title"); ?>"><br>
                  <center><? imprime("$album->title"); ?></center>
                  <span class="tab-l"></span>
                  <span class="tab-r"></span>
                </a>
                  <a href="edit_album.php?id=<? imprime("$album->id"); ?>">
                    Editar
                  </a>
                  &nbsp;
                  <a href="add_photo.php?id=<? imprime("$album->id"); ?>">
                    +Fotos
                  </a>
              </td>
            <?
            $i++;
            if ($i % 3 == 0) {
              echo "</tr>\n";
              echo "<tr>\n";
            }
          }
        ?>
      </tr>
    </table>
  </div>
</div>