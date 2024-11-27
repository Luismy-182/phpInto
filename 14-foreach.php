<?php include 'includes/header.php';


$productos=[
    [
        'nombre'=>'Tablet',
        'precio'=>200,
        'disponible'=>true
    ],
    [
        'nombre'=>'tv',
        'precio'=>300,
        'disponible'=>true
    ],
    [
        'nombre'=>'PC',
        'precio'=>1200,
        'disponible'=>false
    ],
];


foreach($productos as $producto){
?>
<li>
    <p>Producto : <?php echo $producto['nombre']; ?></p>
    <p>Precio: <?php echo "$". $producto['precio']; ?></p>
    <p>Disponible: <?php echo  ($producto['disponible']) ? "Disponible" : "No disponible"; ?></p>
    <!-- <?php 
        // if($producto['disponible']){
        //     echo "<p>Disponible</p>";  
        // }else{
        //     echo "<p>No disponible</p>";
        // }    
    ?> -->
   
    </li>

    
    <?php 
 
}








include 'includes/footer.php';