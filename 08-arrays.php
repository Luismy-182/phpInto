<?php include 'includes/header.php';




include 'includes/footer.php';


class persona{

    public $nombre;
    public $edad;
    public function __construct( $nombre,  $edad)
    {
        $this->nombre=$nombre;
        $this->edad=$edad;
    }
    public function evelin (){
       echo "MI nombre es {$this->nombre} y tengo {$this->edad} años";
        }
}
    
$personas= new Persona('Eve',21);
    echo $personas->nombre;
    echo $personas->edad;