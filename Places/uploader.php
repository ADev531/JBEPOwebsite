<html>
  <body>
    <?php
      $filename = $_FILES['file']['name'];
      $location = "PlaceUploads".$filename;
      
      if(move_uploaded_file($_FILES['file']['tmp_name'], $location)){
        echo '<p>Place Uploaded!</p>'
      }else{
        echo '<p>Place Upload Failed.</p>'
      }
    ?>
  </body>
</html>
