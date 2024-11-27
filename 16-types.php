<?php 
declare(strict_types=1);

include 'includes/header.php';





function usuarioAutetificado( bool $autentificado) : ? string{
    if($autentificado){
        return "Usuario autentificado papi";

    }else{
        return null;
    }
}


$usuario = usuarioAutetificado(true);
echo $usuario;



include 'includes/footer.php';