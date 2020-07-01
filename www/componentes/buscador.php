
<form action="" name="busqueda" class="buscar" method = "GET">
        <input type="text" name ="nombre" placeholder ="Ca na Carmen">
        <input type="text" name ="localidad" placeholder ="Palma de Mallorca">
        
        <select name="precio">
                <option value="1">1€</option> 
                <option value="2">2€</option> 
                <option value="3">3€</option>
                <option value="4">4€</option> 
                <option value="5">5€</option>  
        </select>
        <select name="cocina">
                <option value="japonesa">Japonesa</option> 
                <option value="china">China</option> 
                <option value="italiana">Italiana</option>
                <option value="vegetariana">Vegetariana</option> 
                <option value="vegana">Vegana</option> 
                <option value="americana">Americana</option>
                <option value="thai">Thai</option>
        </select>
        <input type="submit" name="buscador">
        <?php
        require_once 'conexion.php';
                if($_SERVER['REQUEST_METHOD'] == 'GET'){
                $nombre = $_GET['nombre'];
                $localidad = $_GET['localidad'];
                $precio = $_GET['precio'];
                $cocina = $_GET['cocina'];

                $sql1 = "SELECT * FROM Restaurantes";
                //Buscar por nombre
                if(isset($nombre) && !empty($nombre) ){
                        $sql1 = $sql1. " WHERE nombre like '%".$nombre."%'";
                }
                
                $resultado = mysqli_query($conn,$sql1);
                $data = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

                mysqli_free_result($resultado);
                
                }

                echo $nombre;
                print_r($data) ;
        ?>
</form>

