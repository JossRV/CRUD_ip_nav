<?php 

    require_once "../clases/conexion.php";
    require_once "../clases/metodo.php";

    $id=$_GET['id'];
    $c=new metodos();
    if($c->eliminarDatos($id)==1){
        header("location: ../vistas.php");
    }else{
        echo "eliminacion fallida";
    }

?>