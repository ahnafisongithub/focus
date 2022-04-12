<?php

$pin= '2022';
//$pin= $_POST['pin'];

if($pin=='2022'){

//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$files = array_slice(scandir('uploads'), 2);?>
<!DOCTYPE html>
<html>
<head>
<title>Download Files</title>
</head>
<body>

<p><a href="uploads/<?php echo $files[0] ?>">Download JPG file</a></p>
</body>
</html>
<?php
//echo $files[0];
}
else{ echo "WRONG PIN!";}
?>