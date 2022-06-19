<?php

$name4=$_POST['name4'];
$pin=$_POST['pin'];


// Enter the name of directory
$pathdir = 'uploads/'.$name4.'/'; 
  
// Enter the name to creating zipped directory
$zipcreated ='uploads/'.$name4.'/'.$name4.'.zip';
  
// Create new zip class
$zip = new ZipArchive;
   
if($zip -> open($zipcreated, ZipArchive::CREATE ) === TRUE) {
      
    // Store the path into the variable
    $dir = opendir($pathdir);
       
    while($file = readdir($dir)) {
        if(is_file($pathdir.$file)) {
            $zip -> addFile($pathdir.$file, $file);
        }
    }
    $zip ->close();
}

function deletefiles($name4)
{
    $path = 'uploads/'.$name4.'/';

    $filesToKeep = array(
        $path . "WowBoss.zip",
        

    );

    $extensionsToKeep = array(
        "zip"
    );

    $dirList = glob($path . '*');

    foreach ($dirList as $file) {

        if (!in_array($file, $filesToKeep)) {
            if (is_dir($file)) {
                rmdir($file);
            } else {
                $fileExtArr = explode('.', $file);
                $fileExt = $fileExtArr[count($fileExtArr)-1];
                if(!in_array($fileExt, $extensionsToKeep)){
                    unlink($file);
                }
            }//END IF
        }//END IF
    }
}

deletefiles($name4);


// $file = $name4.'.zip';
// $newfile = 'uploads/'.$name4.'/'.$name4.'.zip';

// if (!copy($file, $newfile)) {
//     echo "failed to copy $file...\n";
// }


             
echo 'File has been successfully added to zip...';
echo '<br>';
echo '<h2>Redirecting...</h2>';
echo '<meta http-equiv="refresh" content="3;URL=./dl_compression.php">';
echo '<br>';

?>