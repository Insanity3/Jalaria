
<?php 
require 'conexion.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql = "SELECT * FROM Restaurantes WHERE Id = '".$id."'";

    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            $foto = "img/".$row['foto'];
        }
    }
    
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user = $_SESSION['usuario'];
    $opinion = $_POST['mensaje'];
    $valoracion = $_POST['valoracion'];
    $id = $_GET['id'];
    if (empty($valoracion) or empty($opinion)){
        $mensaje .= '<li>Por favor rellena todos los datos</li>';
    }
    if(empty($mensaje)){
        $sql= "INSERT INTO Opiniones (id,user,opinion,valoracion,restaurante) VALUES (NULL,'".$user."','".$opinion."','".$valoracion."','".$id."')";
        if (mysqli_query($conn, $sql)) {
        } else {
        die("ERROR: Unable to connect: " . mysqli_error($conn));
        }
        
        mysqli_close($conn);

        }
    }
?>