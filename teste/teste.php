<?php
  $link = mysql_connect('localhost', 'root', '');
  if (!$link) {
      die('Could not connect: ' . mysql_error());
  }
  mysql_select_db('ipidb');
  
  mysql_query("INSERT INTO album (title, publicied) values ('TESTE', 1)");
  printf("Last inserted record has id %d\n", mysql_insert_id());
?>