<?php include 'includes/header.php';



$chica=[
    'nombre'=>'Evelin',
    'edad'=>21,
        'intereses'=>[
            'bebida1'=>'Cerveza',
            'bebida2'=>'Tequila',
            'musica'=>'banda',
            'arte'=>'bailes',
            'crush'=>'Miguel Peñaloza'
        ],
    'Estado'=> 'EDOMEX',
    'defecto1'=>'Mentirosa',
    'defecto2'=>'Odio a los hombres',
    'defecto3'=>'Muy alcoholica',
    'defecto4'=>'traicionera',
    'defecto5'=>'No controla sus emociones',
    'defecto6'=>'Se acuesta con cualquier hombre',
    'defecto7'=>'Arruina tu reputación',
    'defecto8'=>'le gusta manipular',
    'defecto9'=>'le gusta mucho el desmadre',
    'defecto10'=>'Es muy altanera',
    'defecto11'=>'No sabe hacer nada'
    ];


    var_dump(isset($chica['intereses']['crush']));
    var_dump(($chica['nombre']));
    var_dump(($chica['intereses']['crush']));
include 'includes/footer.php';