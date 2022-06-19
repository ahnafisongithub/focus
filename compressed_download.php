<?php
$name3= $_POST['name3'];
$pin= $_POST['pin'];

//$pin= $_POST['pin'];

if($pin=='2022'){

//array for returning names of files only
if(scandir("uploads/$name3")==false){
  echo "<h1>FOLDER DOES NOT EXIST!</h1>";
  echo "<h2>Redirecting...</h2>";
  echo '<meta http-equiv="refresh" content="3;URL=/dl_compression.php">';
  die();

}
$files = array_slice(scandir("uploads/$name3"), 2);

?>
<!DOCTYPE html>
<html>
<head>
<title>Download Files</title>
</head>
<body>
  <?php
foreach($files as $file){?>
<h3><a href="uploads/<?php echo $name3?>/<?php echo $file ?>">Download file named: <?php echo $file ?> </a></h3>

<?php } ?>
<br><br>
<h2><a href="dl_compression.php"> RETURN TO PREVIOUS PAGE </a></h2>
</body>
</html>


<?php

//echo $files[0];
}
else{ echo "<h1>WRONG PIN!</h1>";}
?>