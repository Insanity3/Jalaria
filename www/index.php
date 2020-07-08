<?php Include 'componentes/header.php' ?>


<main>
<div class="d-flex justify-content-center">
<?php Include 'componentes/buscador.php' ?>

</div>
<section id="why-us" class="why-us">
<div class="container cards">
    <div class="row justify-content-center">

    
<?php
    if(isset($_GET['buscador'])){
        $res = $sql1;
    }else{
        $res = $sql;
    }
    if($result = mysqli_query($conn, $res)){
    if(mysqli_num_rows($result) != 0){
        
        while($row = mysqli_fetch_array($result)){
            $foto = "img/".$row['foto'];
            $valoracion ="img/".$row['valoracion'];
?>

        <div class="col-lg-4 mt-4 mt-lg-0 p-4">
            <div class="box text-center">
            <img class="card-img-top" src="<?php echo $foto ?>" alt="Card image cap">
            
            <h4><a class="hover" href="restaurant.php?id=<?php echo $row['Id']; ?>"><?php echo $row['nombre']?></a></h4>
            

                <p><i class="fas fa-star"></i> <?php echo $row['valoracion']?></p>
                <p><i class="fas fa-euro-sign"></i> <?php echo $row['precios']?></p>

                <p><i class="fas fa-map-marked-alt"></i> <?php echo $row['localidad']?></p>
                <p><i class="fas fa-phone"></i> <?php echo $row['telf']?></p>
                <a href="restaurant.php?id=<?php echo $row['Id']; ?>" class="btn btn-warning">Ir al restaurante</a>
            </div>
        </div>
        

<?php }}}?>
</div>
</div>
</section>
</main>


<?php Include 'componentes/footer.php' ?>
