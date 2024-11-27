<?php include 'includes/header.php';





$chica=[
'nombre'=>'Evelin',
'edad'=>21,
    'defectos'=>[
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
    ],
'Estado'=> 'EDOMEX',
'bebida1'=>'Cerveza',
'bebida2'=>'Tequila',
'musica'=>'banda',
'arte'=>'bailes',
];



//para decifrar el enigma que esconde esta mujer, necesito apoyarme en una funcion recursiva para saber
//que mas me oculta esta mujer, ver sus defectos y con suerte saber a que me estoy emtiendo, porque algo no cuadra
//dice que me ama y mi amor por ella me tiene tan ciego que no puedo ver con quien realmente me relaciono
//algo no me cuadra.....

//usamos una funcion recursova, (inteligencia y sentido comun para saber que me esconde esa cara bonita)



function inteligencia($chica){
    foreach ($chica as $key => $valor) {
        if(is_array($valor)){
            echo $key. "<br>";
            inteligencia($valor); //llama ala misma funcion si el valor es arreglo, ahora la $chica es $valor

        }else{
            echo $key. " - ". $valor. "</br>";
        }

    }
}

inteligencia($chica);
















include 'includes/footer.php';