<div class="container mt-5">
<form action="" name="busqueda" class="form mt-5" method = "GET">
        <div class="form-row justify-content-center">
        <input type="text" name ="nombre" placeholder ="Ca na Carmen" class="col-md-2 form-group">
        <input type="text" name ="localidad" placeholder ="Palma de Mallorca" class="col-md-2 form-group">
        
        <select name="precio" class="col-md-2 form-group">
                <option disabled selected>Precios</option>
                <option value="1">1€</option> 
                <option value="2">2€</option> 
                <option value="3">3€</option>
                <option value="4">4€</option> 
                <option value="5">5€</option>  
        </select>
        <select name="cocina" class="col-md-2 form-group">
                <option disabled selected>Cocina</option>
                <option value="japonesa">Japonesa</option> 
                <option value="china">China</option> 
                <option value="italiana">Italiana</option>
                <option value="vegetariana">Vegetariana</option> 
                <option value="vegana">Vegana</option> 
                <option value="americana">Americana</option>
                <option value="thai">Thailandesa</option>
                <option value="mallorquina">Mallorquina</option>
        </select>
        <!-- <select name="order" id="" class="col-md-2 form-group">
                <option value=""></option>
                <option value="A">Ascendente</option>
                <option value="D">Descendente</option>
        </select>  -->
        </div>
        <div class="text-center">
                <input type="submit" name="buscador">
        </div>
        
        </form>
</div>
        <?php
        require_once 'conexion.php';
                if($_SERVER['REQUEST_METHOD'] == 'GET'){
                $nombre = $_GET['nombre'];
                $localidad = $_GET['localidad'];
                $precio = $_GET['precio'];
                $cocina = $_GET['cocina'];
                $order=$$_GET['order'];
                        if(isset($_GET['buscador']))  {
                                $sql1 = "SELECT * FROM Restaurantes";
                //Buscar por nombre
                if(isset($nombre) && !empty($nombre)){
                        $sql1 = $sql1. " WHERE nombre like '%".$nombre."%'";
                }
                //Localidad
                if(isset($localidad) && !empty($localidad)) {
                        if(empty($nombre)){
                                $sql1 = $sql1. " WHERE localidad like '%".$localidad."%'";
                                
                        }else{
                                $sql1 = $sql1. " AND localidad like '%".$localidad."%'";
                        }   
                        
                }
                // Precio
                if(isset($precio) && !empty($precio)){
                        if(empty($nombre) && empty($localidad) ) {
                                $sql1 = $sql1. " WHERE precios like '%".$precio."%'";
                                
                        }else{
                                $sql1 = $sql1. " AND precios like '%".$precio."%'";
                        } 
                }
                //Cocina
                if(isset($cocina) && !empty($cocina)){
                        if(empty($nombre) && empty($localidad) && empty($precio) ) {
                                $sql1 = $sql1. " WHERE cocina like '%".$cocina."%'";
                                
                        }else{
                                $sql1 = $sql1. " AND cocina like '%".$cocina."%'";
                        } 
                }
                //Orden
                if(isset($order) && !empty($order) ){
                        if ($order=="D"){
                                $sql1 = $sql1. " ORDER BY nombre DESC";
                        }
                        if ($order=="A"){
                                $sql1 = $sql1. " ORDER BY nombre ASC";
                        }
                }
                

                $resultado = mysqli_query($conn,$sql1);
                $data = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

                mysqli_free_result($resultado);
                
                
        
                        }      
                
                }

        ?>


