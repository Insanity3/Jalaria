<?php

$dbhost = 'db';
$dbuser = 'root';
$dbpass = 'password';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);


if(! $conn ){
    die('Could not connect: ' . mysqli_error());
    }
    
    mysqli_select_db($conn, 'restaurantes');
    if (mysqli_select_db( $conn,'restaurantes' )) {
        
        } else {
        echo "Error: " . mysqli_error($conn);
        }


?>