<?php

$pin= $_POST['pin'];
$name= $_POST['name'];



if($pin='2022'){
if (!file_exists("uploads/$name")) {
    mkdir("uploads/$name", 0777, true);
    echo "Folder created successfully!";
    echo "<br>";
    echo "Redirecting...";
    echo '<meta http-equiv="refresh" content="3;URL=/focus/downloads.php">';
}else{echo"Folder already exists!";
    echo "<br>";
    echo "Redirecting...";
    echo '<meta http-equiv="refresh" content="3;URL=/focus/downloads.php">';
}
}
else{ "Creating folder failed";
echo '<meta http-equiv="refresh" content="3;URL=/focus/downloads.php">';
}


?>