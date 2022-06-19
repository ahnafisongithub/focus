<?php

//defining the different sizes of bytes for cleaner code
define('KB', 1024);
define('MB', 1048576);
define('GB', 1073741824);
define('TB', 1099511627776);

$name2= $_POST['name2'];
$pin= $_POST['pin'];

if($pin=="2022"){
$files = array_filter($_FILES['upload']['name']); //Use something similar before processing files.
// Count the number of uploaded files in array
$total_count = count($_FILES['upload']['name']);
// Loop through every file
for( $i=0 ; $i < $total_count ; $i++ ) {
   //The temp file path is obtained
   $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

   if ($_FILES['upload']['size'][$i] > 100*MB){
     echo "<h1>ERROR: File size exceeds 10MB! </h1>";
     echo 'Redirecting...';
     echo '<meta http-equiv="refresh" content="3;URL=/downloads.php">';
     echo '<br>';
     die();     

   }

   //A file path needs to be present
   if ($tmpFilePath != ""){
      //Setup our new file path
      $newFilePath = "uploads/$name2/". $_FILES['upload']['name'][$i];
      //File is uploaded to temp dir
      if(move_uploaded_file($tmpFilePath, $newFilePath)) {
         //Other code goes here
             echo "<h1>The file ". htmlspecialchars(basename($_FILES['upload']['name'][$i])). " has been uploaded.</h1>";
             echo '<br>';

             if($i==$total_count-1){
              echo '<h2>Redirecting...</h2>';
              echo '<meta http-equiv="refresh" content="3;URL=/dl_compression.php">';
              echo '<br>';
             }



      }
      else{echo "upload failed";}
   }
}
}
else{              
  echo '<h1>WRONG PIN!</h1>';
  echo '<h2>Redirecting...</h2>';
  echo '<meta http-equiv="refresh" content="3;URL=/downloads.php">';
  echo '<br>'; };



?>