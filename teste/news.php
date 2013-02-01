<?
  require_once('lib/comum.php'); 
  require_once('lib/mysql-cfg.php');
?>
<html>
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
<body>
<?
  $sql="SELECT * FROM aviso ORDER BY publicied_date DESC";
  $resultado = $MySQLi->query($sql) OR trigger_error($MySQLi->error, E_USER_ERROR);
  while ($aviso = $resultado->fetch_object()) {
?>
    <div id="contentnew">
      <div class="article">
        <h2>
          <span>
            <a href="#">
              <? imprime($aviso->title); ?>
            </a>
          </span>
        </h2>
        <p class="info noprint">
          <span class="date"><? imprime($aviso->publicied_date); ?></span><span class="noscreen">,</span>
          <span class="user"><a href="#">My name</a></span><span class="noscreen">,</span>
          <span class="comments"><a href="#">Comments</a></span>
        </p>
        <p>
          <? imprime($aviso->description); ?>
        </p>
      </div>
      <hr class="noscreen" />
    </div>
<?
  }
?>
<script language=\"Javascript\" type=\"text/javascript\">
  var tamanho = document.getElementById("contentnew").scrollHeight;
  parent.document.getElementById("mainframe").height = tamanho + 40;
<\/script>

</body>
</html>