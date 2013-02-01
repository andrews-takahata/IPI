<?
  function imprime($texto) {
    $substituir = array(
      '/á/' => '&aacute;',
      '/é/' => '&eacute;',
      '/í/' => '&iacute;',
      '/ó/' => '&oacute;',
      '/ú/' => '&uacute;',
      '/ã/' => '&atilde;',
      '/õ/' => '&otilde;',
      '/â/' => '&acirc;',
      '/ê/' => '&ecirc;',
      '/î/' => '&icirc;',
      '/ô/' => '&ocirc;',
      '/û/' => '&ucirc;',
      '/ç/' => '&ccedil;',
      '/Á/' => '&Aacute;',
      '/É/' => '&Eacute;',
      '/Í/' => '&Iacute;',
      '/Ó/' => '&Oacute;',
      '/Ú/' => '&Uacute;',
      '/Ã/' => '&Atilde;',
      '/Õ/' => '&Otilde;',
      '/Â/' => '&Acirc;',
      '/Ê/' => '&Ecirc;',
      '/Î/' => '&Icirc;',
      '/Ô/' => '&Ocirc;',
      '/Û/' => '&Ucirc;',
      '/Ç/' => '&Ccedil;',
      '/à/' => '&agrave;',
      '/À/' => '&Agrave;'
    );
    
    $texto = preg_replace(array_keys($substituir), array_values($substituir), $texto);
    echo nl2br($texto);
  }
?>