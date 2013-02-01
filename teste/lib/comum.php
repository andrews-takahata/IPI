<?
  function imprime($texto) {
    $substituir = array(
      '/�/' => '&aacute;',
      '/�/' => '&eacute;',
      '/�/' => '&iacute;',
      '/�/' => '&oacute;',
      '/�/' => '&uacute;',
      '/�/' => '&atilde;',
      '/�/' => '&otilde;',
      '/�/' => '&acirc;',
      '/�/' => '&ecirc;',
      '/�/' => '&icirc;',
      '/�/' => '&ocirc;',
      '/�/' => '&ucirc;',
      '/�/' => '&ccedil;',
      '/�/' => '&Aacute;',
      '/�/' => '&Eacute;',
      '/�/' => '&Iacute;',
      '/�/' => '&Oacute;',
      '/�/' => '&Uacute;',
      '/�/' => '&Atilde;',
      '/�/' => '&Otilde;',
      '/�/' => '&Acirc;',
      '/�/' => '&Ecirc;',
      '/�/' => '&Icirc;',
      '/�/' => '&Ocirc;',
      '/�/' => '&Ucirc;',
      '/�/' => '&Ccedil;',
      '/�/' => '&agrave;',
      '/�/' => '&Agrave;'
    );
    
    $texto = preg_replace(array_keys($substituir), array_values($substituir), $texto);
    echo nl2br($texto);
  }
?>