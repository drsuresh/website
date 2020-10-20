<?php
      $dir = "upload";

      if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $errorinfo = $_FILES["myfile"]["error"];
        $filename = $_FILES["myfile"]["name"];
        $tmpfile = $_FILES["myfile"]["tmp_name"];
        $filesize = $_FILES["myfile"]["size"];
        $filetype = $_FILES["myfile"]["type"];

        if ($filetype == "image/jpeg" && $filesize < 524288) {
          move_uploaded_file($tmpfile, "$dir/" . $filename);
          chmod("$dir/" . $filename, 0644);
        } else 
          echo "Only jpegs under 0.5MB.";
      }

      $jpgs = glob("$dir/*.*");
      sort($jpgs);

      echo "<table>";
      foreach($jpgs as $jpg) {
        echo "<tr><td><img style='max-height:400px;max-width:225px' src='$dir/" . rawurlencode(substr($jpg, strlen($dir)+1)) . "' target='n'>
       <a href='$dir/" . rawurlencode(substr($jpg, strlen($dir)+1)) . "' target='n'>" .
       htmlspecialchars(substr($jpg, strlen($dir)+1)) . "</a></td></tr>";
      }
      echo "</table>";
?>