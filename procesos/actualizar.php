<?php 
    require_once "../clases/conexion.php";
    require_once "../clases/metodo.php";

    $ip=$_POST['ip'];
    $navegador=$_POST['navegador'];
    $id=$_POST['id'];
    $datos=array(
        $ip,
        $navegador,
        $id
    );

    $c=new metodos();

    if($c->actualizarDatos($datos)==1){
        header("location: ../vistas.php");
    }else{
        echo "losdatos no se han actualizadp";
    }
    

?>