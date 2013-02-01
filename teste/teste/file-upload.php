<?
  $i = 0;
  foreach ($_FILES['userfile']['name'] as &$value) {
    echo "Upload: " . $_FILES["userfile"]["name"][$i] . "<br>";
    echo "Type: " . $_FILES["userfile"]["type"][$i] . "<br>";
    echo "Size: " . ($_FILES["userfile"]["size"][$i] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["userfile"]["tmp_name"][$i] . "<br>";
  
    if (file_exists("upload/" . $_FILES["userfile"]["name"][$i])) {
      echo $_FILES["userfile"]["name"][$i] . " already exists. ";
    }
    else {
      move_uploaded_file($_FILES["userfile"]["tmp_name"][$i],
      "upload/" . $_FILES["userfile"]["name"][$i] . "$i");
      echo "Stored in: " . "upload/" . $_FILES["userfile"]["name"][$i];
    }
    $i++;
  }
?>