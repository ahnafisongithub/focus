<?php
$name3= $_POST['name3'];
$pin= '2022';

//$pin= $_POST['pin'];

if($pin=='2022'){

//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$files = array_slice(scandir("uploads/$name3"), 2);?>
<!DOCTYPE html>
<html>
<head>
<title>Download Files</title>
</head>
<body>
  <?php
foreach($files as $file){?>
<p><a href="uploads/<?php echo $name3?>/<?php echo $file ?>">Download JPG file named: <?php echo $file ?> </a></p>

<?php } ?>

</body>
</html>


<?php
//echo $files[0];
}
else{ echo "WRONG PIN!";}
?>