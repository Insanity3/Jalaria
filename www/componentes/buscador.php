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
                <option value="japonesa">Japonesa</option> 
                <option value="china">China</option> 
                <option value="italiana">Italiana</option>
                <option value="vegetariana">Vegetariana</option> 
                <option value="vegana">Vegana</option> 
                <option value="americana">Americana</option>
                <option value="thai">Thai</option>
        </select>
        <button type="submit" class="icono fa fa-search" ></button>
</form>
