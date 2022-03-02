<?php 

    include "./header.php";
    include "./menu.php";
    require_once "./clases/conexion.php";
    require_once "./clases/metodo.php";    
    // require "./procesos/insertar_vistas.php";
    // cada que recarga guarda una vista
    // el numero de vistas y la ip
    // $ip = $_SERVER['REMOTE_ADDR']; //para conocer la ip
    // $c=new metodos();
    // $c->insertarDatos($ip);

    $c=new metodos();
    $sql="SELECT id,ip,navegador FROM t_contadorvistas";
    $datos=$c->mostrarDatos($sql);


?>
<section class="py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <table border="3" class="table table-bordered border-dark">
                    <thead>
                        <th># VISISTAS</th>
                        <th>IP</th>
                        <th>NAVEGADOR</th>
                        <th>EDITAR</th>
                        <th>ELIMINAR</th>
                    </thead>
                    <tbody>
                        <?php foreach($datos as $key): ?>
                        <tr>
                            <td><?=$key['id'] ?></td>
                            <td><?=$key['ip'] ?></td>
                            <td><?=$key['navegador']?></td>
                            <td>
                                <a href="procesos/vista_actualizar.php?id=<?php echo $key['id']; ?>">Editar</a>
                            </td>
                            <td>
                            <a href="procesos/eliminar.php?id=<?php echo $key['id']; ?>">Eliminar</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php 

    include "./footer.php";

?>