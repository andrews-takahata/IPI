<?
  $MySQL = array(
    'servidor' => 'localhost',
    'usuario' => 'root',
    'senha' => '',
    'banco' => 'ipidb'
  );

  $MySQLi = new MySQLi($MySQL['servidor'], $MySQL['usuario'], $MySQL['senha'], $MySQL['banco']);
  
  if (mysqli_connect_errno()) {
    trigger_error(mysqli_connect_error(), E_USER_ERROR);
  }
?>