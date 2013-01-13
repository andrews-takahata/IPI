<? require('lib/comum.php'); ?>
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
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
    <p><input type="file" name="arquivo[]" /></p>
    <p><input type="file" name="arquivo[]" /></p>
    <p><input type="file" name="arquivo[]" /></p>
    <p><input type="file" name="arquivo[]" /></p>
    <p><input type="file" name="arquivo[]" /></p>
    <p><input type="submit" value="Enviar" /></p>
  </form
  </div>
</div>