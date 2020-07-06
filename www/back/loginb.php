<?php 
if(isset($_SESSION['usuario'])){
    header ("Location:index.php");
}

$mensaje= '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    require 'conexion.php';
    
    if(!empty($_POST['user'])&&!empty($_POST['pass'])){
        $user = filter_var(strtolower($_POST['user']),FILTER_SANITIZE_STRING);
        $pass = $_POST['pass'];

        $pass =hash('sha512',$pass);
       
        $sql = "SELECT * FROM Usuarios WHERE user = '$user' AND pass = '$pass'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        if (mysqli_num_rows($result) ==1){
        $_SESSION['usuario']=$user;
        header("Location:index.php");

        }else{
            $mensaje.= "<li>Tu nombre de usuario o contraseña no coinciden</li>";
        }
       
        mysqli_close($conn);
    }
}
?>