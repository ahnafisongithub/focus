<?php

$pin= $_POST['pin'];
$name= $_POST['name'];



if($pin=="2022"){
    if (!file_exists("uploads/$name/")) {
        mkdir("uploads/$name/", 0777, true);
    echo "<h1>Folder created successfully!</h1>";
    echo "<br>";
    echo "<h2>Redirecting...</h2>";
    echo '<meta http-equiv="refresh" content="3;URL=/downloads.php">';}
    else{
        echo"<h1>Folder already exists!</h1>";
        echo "<br>";
        echo "<h2>Redirecting...</h2>";
        echo '<meta http-equiv="refresh" content="3;URL=/downloads.php">';
    }
}
else{ echo "<h1>WRONG PIN!</h1>";
    echo "<h2>Redirecting...</h2>";
echo '<meta http-equiv="refresh" content="3;URL=/downloads.php">';
}


?>