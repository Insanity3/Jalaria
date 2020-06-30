<?php 
require 'conexion.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql = "SELECT * FROM Restaurantes WHERE Id = '".$id."'";

    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
        }
    }

}
?>