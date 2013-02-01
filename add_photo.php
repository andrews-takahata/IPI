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
    <form action="add_photo_process.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id_photo" value=<? echo $_GET['id']?>>
      Selecione as imagens:<br>
      <input name="userfile[]" type="file" multiple accept="image/*"/>&nbsp;
      <input type="submit" value="Send files" />
    </form>
  </div>
</div>