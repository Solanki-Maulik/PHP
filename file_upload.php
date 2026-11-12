<html>
    <body>

    <form action="file_upload.php" method="post" enctype="multipart/form-data">
        upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload File" name="submit">
</form>


    <?php


     if (isset($_POST["submit"])) {
      $targetdir = "uploads/";
      $filename = basename($_FILES["fileToUpload"]["name"]);
      $targetfile = $targetdir . $filename;
      $temporaryfile = $_FILES["fileToUpload"]["tmp_name"];

      if ($_FILES["fileToUpload"]["size"] > 5000000) { 
    echo "Sorry, your file is too large. It must be less than 5 MB."; 
    $uploadOk = 0; 
}
     if($uploadOk == 1){
      if(move_uploaded_file($temporaryfile, $targetfile)) {
        echo "Success";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
  
      }
     }
 ?>
</body>
</html>