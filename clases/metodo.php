<?php 

    class metodos{
        // insertar datos
        function insertarDatos($dato){
            $c=new conexion();
            $conexion=$c->conectar();
            $sql="INSERT INTO t_contadorvistas (ip,navegador) 
                  VALUES ('$dato[0]','$dato[1]')";
            return $resultado=mysqli_query($conexion,$sql);
        }
        // mostar datos
        function mostrarDatos($sql){
            $c=new conexion();
            $conexion=$c->conectar();
            $resultado = mysqli_query($conexion,$sql);
            return mysqli_fetch_all($resultado,MYSQLI_ASSOC);
        }
        // buscara o conocer el navegador que se esta usando
        function getBrowser($user){
            if(strpos($user, 'MSIE') !== FALSE)
                return 'Internet explorer';
            elseif(strpos($user, 'Edge') !== FALSE) //Microsoft Edge
                return 'Microsoft Edge';
            elseif(strpos($user, 'Trident') !== FALSE) //IE 11
                return 'Internet explorer';
            elseif(strpos($user, 'Opera Mini') !== FALSE)
                return "Opera Mini";
            elseif(strpos($user, 'Opera') || strpos($user, 'OPR') !== FALSE)
                return "Opera";
            elseif(strpos($user, 'Firefox') !== FALSE)
                return 'Mozilla Firefox';
            elseif(strpos($user, 'Chrome') !== FALSE)
                return 'Google Chrome';
            elseif(strpos($user, 'Safari') !== FALSE)
                return "Safari";
            else
                return 'No hemos podido detectar su navegador';

        }
        // eliminar datos
        function eliminarDatos($id){
            $c=new conexion();
            $conexion=$c->conectar();
            $sql="DELETE FROM t_contadorvistas WHERE id='$id'";
            return $resultado=mysqli_query($conexion,$sql);
        }
        // actualizar datos
        function actualizarDatos($datos){
            $c=new conexion();
            $conexion=$c->conectar();
            $sql="UPDATE t_contadorvistas SET ip='$datos[0]',
                                            navegador='$datos[1]'
                                            WHERE id='$datos[2]'";
            return $resultado=mysqli_query($conexion,$sql);
        }
    }

?>