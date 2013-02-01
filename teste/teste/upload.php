<?PHP
if(count($_FILES['filesToUpload']['name'])) {
  foreach ($_FILES['filesToUpload']['name'] as $file){
      echo "Upload: " . $file["name"] . "<br>";
      echo "Type: " . $file["type"] . "<br>";
      echo "Size: " . ($_FILES["filesToUpload"]["size"] / 1024) . " kB<br>";
      echo "Temp file: " . $_FILES["filesToUpload"]["tmp_name"] . "<br>";
  
      if (file_exists("upload/" . $_FILES["filesToUpload"]["name"])) {
        echo $_FILES["filesToUpload"]["name"] . " already exists. ";
      }
      else
      {
        move_uploaded_file($_FILES["filesToUpload"]["tmp_name"],
        "upload/" . $_FILES["filesToUpload"]["name"]);
        echo "Stored in: " . "upload/" . $_FILES["filesToUpload"]["name"];
      } 
  }
}else{
echo "hmm";
}
?>