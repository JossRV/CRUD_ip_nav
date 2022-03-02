<?php 

class conexion{
    function conectar(){
        $servidor="localhost";
        $usuario="root";
        $password="";
        // $port="3307";
        $bd="contador_vistas";
        $conexion=new mysqli(
            $servidor,
            $usuario,
            $password,
            $bd,
            // $port
        );
        return $conexion;
    }
}

$c=new conexion();
// if($c->conectar()){
//     echo "conectado";
// }else{
//     echo "falló";
// }

?>