<?php include 'includes/header.php';
$args=[


"id"=>1,
"nombre"=> "mike",
"apellido"=>
 "Santos",
"email"=>
 "miki@gmail.com",
"password"=>
 "tacosalto",
"telefono"=>
"123123123",
"admin"=>
1,
"confirmado"=>
1,
"token"=> "",

];




class Usuario{
   
    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $password;
    public $telefono;
    public $admin;
    public $confirmado;
    public $token;
 
    public function __construct($args =[])
    {
        $this->id=$args['id'] ?? null;
        $this->nombre=$args['nombre'] ?? '';
        $this->apellido=$args['apellido'] ?? '';
        $this->telefono=$args['telefono'] ?? '';
        $this->email=$args['email'] ?? '';
        $this->password=$args['password'] ?? '';
        $this->admin=$args['admin'] ?? null;
        $this->confirmado=$args['confirmado'] ?? null;
        $this->token=$args['token'] ?? '';
    }

   


      // Sincroniza BD con Objetos en memoria
      public function sincronizar($args=[]) { 
        foreach($args as $key => $value) {
          if(property_exists($this, $key) && !is_null($value)) {
            $this->$key = $value;

          
          }
        }
    }

}

$usuario=new Usuario();

$usuario->sincronizar($args);
echo $usuario->nombre;
echo "<pre>";
var_dump($usuario);
echo "</pre>";
?>

