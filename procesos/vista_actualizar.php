<?php 
    include "../header.php";
    require_once "../clases/conexion.php";
    require_once "../clases/metodo.php";

    $c=new conexion();
    $conexion=$c->conectar();
    $id=$_GET['id'];
    $sql="SELECT ip,navegador FROM t_contadorvistas WHERE id='$id'";
    $resultado = mysqli_query($conexion,$sql);
    $ver = mysqli_fetch_row($resultado);

?>
<div class="container py-5 mt-5">
    <div class="row">
        <div class="col">
            <form action="actualizar.php" method="post">
                <input type="text" hidden value="<?=$id?>" name="id" >
                <div class="input-group">
                    <label class="input-group-text" for="">ip</label>
                    <input type="text" class="form-control" name="ip" placeholder="ip" value="<?=$ver[0]?>">
                    <label class="input-group-text" for="">navegador</label>
                    <input type="text" class="form-control" name="navegador" placeholder="Navegador" value="<?=$ver[1]?>">
                </div>
                <button class="btn btn-outline-dark container-fluid mt-4">Actualizar</button>
            </form>
        </div>
    </div>
</div>
<?php 

    include "../footer.php";

?>
