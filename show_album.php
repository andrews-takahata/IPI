<?
  require('lib/comum.php');
  require_once('lib/mysql-cfg.php');
?>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <title>IPI Quitaúna</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
</head>

<div id="contentnew">
  <div class="article">
    <table>
      <tr>
        <?
          $i=0;
          $sql="SELECT * FROM foto WHERE album = " . $_GET["id"];
          $resultado = $MySQLi->query($sql) OR trigger_error($MySQLi->error, E_USER_ERROR);
          while ($album = $resultado->fetch_object()) {
            ?>
              <td>
                  <img src="upload/image/mini/photo_<? imprime("$album->id"); ?>.jpg"><br>
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