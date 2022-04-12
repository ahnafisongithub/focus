<?php


$name2= $_POST['name2'];
$pin= $_POST['pin'];

// if($pin=='2022'){
// $target_dir = "/uploads";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }

// // Check if file already exists
// if (file_exists($target_file)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }

// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 1000000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//   echo '<br>';
//   $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//   echo " Sorry, your file was not uploaded.";
//   echo '<br>';
//   echo 'Redirecting...';
//   echo '<meta http-equiv="refresh" content="3;URL=/focus/downloads.php">';
// // if everything is ok, try to upload file
// } else {
//   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//     echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
//     echo '<br>';
//     echo 'Redirecting...';
//     echo '<meta http-equiv="refresh" content="3;URL=/focus/downloads.php">';
//   } else {
//     echo " Sorry, there was an error uploading your file.";
//     echo '<br>';
//     echo 'Redirecting...';
//     echo '<meta http-equiv="refresh" content="3;URL=/focus/downloads.php">';
//   }
// }
// }
// else{
//     echo "WRONG PIN!";
// }


$target_dir = "uploads/$name2/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if($pin=="2022"){
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
    echo '<br>';
    echo 'Redirecting...';
    echo '<meta http-equiv="refresh" content="3;URL=/focus/downloads.php">';
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
  echo '<br>';
  echo 'Redirecting...';
  echo '<meta http-equiv="refresh" content="3;URL=/focus/downloads.php">';
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
  echo '<br>';
  echo 'Redirecting...';
  echo '<meta http-equiv="refresh" content="3;URL=/focus/downloads.php">';
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
  echo '<br>';
  echo 'Redirecting...';
  echo '<meta http-equiv="refresh" content="3;URL=/focus/downloads.php">';
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    echo '<br>';
    echo 'Redirecting...';
    echo '<meta http-equiv="refresh" content="3;URL=/focus/downloads.php">';
  } else {
    echo "Sorry, there was an error uploading your file.";
        echo '<br>';
    echo 'Redirecting...';
    echo '<meta http-equiv="refresh" content="3;URL=/focus/downloads.php">';
  }
}
}
else{
    echo "WRONG PIN!";
    echo '<br>';
echo 'Redirecting...';
echo '<meta http-equiv="refresh" content="3;URL=/focus/downloads.php">';
}

?>