<?php

$dbhost = 'db';
$dbuser = 'root';
$dbpass = 'password';
$dbname = 'restaurantes';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname,3306);


if(!$conn ){
    die('Could not connect: ' . mysqli_error());
}
    
mysqli_select_db($conn, 'restaurantes');
if (mysqli_select_db( $conn,'restaurantes' )) {
        
} else {
echo "Error: " . mysqli_error($conn);
}


?>