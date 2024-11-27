<?php include 'includes/header.php';

$chica=[
    'nombre'=>'Evelin',
    'edad'=>21,
        //  'intereses'=>[
        //      'bebida1'=>'Cerveza',
        //      'bebida2'=>'Tequila',
        //      'musica'=>'banda',
        //      'arte'=>'bailes',
        //  ],
    'Estado'=> 'EDOMEX',
    'defecto1'=>'Mentirosa',
    'defecto2'=>'se aprovecha de los hombres',
    'defecto3'=>'Muy alcoholica',
    'defecto4'=>'traicionera',
    'defecto5'=>'No controla sus emociones',
    'defecto6'=>'Se acuesta con cualquier hombre',
    'defecto7'=>'Arruina tu reputación',
    'defecto8'=>'le gusta manipular',
    'defecto9'=>'le gusta mucho el desmadre',
    'defecto10'=>'Es muy altanera',
    'defecto11'=>'No sabe hacer nada',
    'soltera'=>true
    ];
    

foreach($chica as $chica ){
//    echo "<pre>";
//    var_dump($llave,  $valor);
//    echo "</pre>";
?>

<li>
    <p><?php echo $chica; ?></p>

    
</li>

<?php 


}













// $persona=[
//     'nombre'=>'Mike',
//     'edad'=>28,
//         'informacion'=>[
//             'bebida1'=>'Cerveza',
//             'bebida2'=>'Tequila',
//             'musica'=>'rock',
//             'deporte'=>'futboll',
//         ],
//     'Estado'=> 'EDOMEX',
//     'instrumento'=>'guitarra',
//     ];


 


//     foreach ($persona as $key => $valor){
//         echo $key." - ". $valor."</br>";
//     }


include 'includes/footer.php';