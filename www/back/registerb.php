<?php 
require 'conexion.php';

if(isset($_SESSION['usuario'])){
    header ("Location:index.php");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $user = filter_var(strtolower($_POST['register_user']), FILTER_SANITIZE_STRING);
    $pass = $_POST['register_password'];
    $pass2 = $_POST['register_password2'];

    $mensaje='';

    //comprobar que los campos no estan vacios
    if (empty($user) or empty($pass) or empty ($pass2)){
        $mensaje .= '<li>Por favor rellena todos los datos</li>';
    }else{
        $sql = "SELECT * FROM Usuarios WHERE user = '$user' LIMIT 1" ;
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        if (mysqli_num_rows($result) ==1){
            $mensaje .= "<li>El nombre de usuario ya existe, por favor elije otro</li>";

        }
        $pass = hash('sha512',$pass);
        $pass2 = hash('sha512',$pass2);
        
        if ($pass != $pass2){

        $mensaje.=  "<li>Las contraseñas deben ser iguales/li>";
        }
    

    }


    
    if(empty($mensaje)){
        $sql= "INSERT INTO Usuarios (id,user,pass) VALUES (NULL,'".$user."','".$pass."')"; 



                if (mysqli_query($conn, $sql)) {
                } else {
                die("ERROR: Unable to connect: " . mysqli_error($conn));
                }
                
                mysqli_close($conn);

                header('index.php');
                }


 
    
}
?>