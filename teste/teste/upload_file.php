<?

  if(count($_FILES['uploads']['filesToUpload'])) {
  foreach ($_FILES['uploads']['filesToUpload'] as $file) {
      
    //do your upload stuff here
    echo $file;
    
  }
}

  if(count($_FILES['file']['file'])) {
    foreach ($_FILES['file']['file'] as $file) {
      echo "Upload: " . $_FILES["file"]["name"] . "<br>";
      echo "Type: " . $_FILES["file"]["type"] . "<br>";
      echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
      echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
  
      if (file_exists("upload/" . $_FILES["file"]["name"])) {
        echo $_FILES["file"]["name"] . " already exists. ";
      }
      else
      {
        move_uploaded_file($_FILES["file"]["tmp_name"],
        "upload/" . $_FILES["file"]["name"]);
        echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }  
  }
}
?>