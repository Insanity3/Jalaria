<?php require 'back/buscadorb.php' ?>
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
                <option value="1">Japonesa</option> 
                <option value="2">China</option> 
                <option value="3">Italiana</option>
                <option value="10">Vegetariana</option> 
                <option value="11">Vegana</option> 
        </select>
        <button type="submit" class="icono fa fa-search" ></button>
</form>
