<?php 

    include "./header.php";
    include "./menu.php";
    require_once "./clases/conexion.php";
    require_once "./clases/metodo.php";    
    // require "./procesos/insertar_vistas.php";
    // cada que recarga guarda una vista
    // el numero de vistas y la ip
    $ip = $_SERVER['REMOTE_ADDR']; //para conocer la ip
    $user = $_SERVER['HTTP_USER_AGENT'];//va en conocer el navegador
    $c=new metodos();
    $navegador=$c->getBrowser($user);
    $datos=array(
        $ip,
        $navegador
    );
    $c->insertarDatos($datos);
?>

<header>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active"
                style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
                <div class="carousel-caption">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item"
                style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
                <div class="carousel-caption">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item"
                style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
                <div class="carousel-caption">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</header>

<!-- Page Content -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- <table border="3" class="table table-bordered border-dark">
                    <thead>
                        <th># VISISTAS</th>
                        <th>IP</th>
                    </thead>
                    <tbody>
                        <?php //foreach(): ?>
                        <tr>
                            <td><?php ?></td>
                            <td><?php ?></td>
                        </tr>
                        <?php //endforeach; ?>
                    </tbody>
                </table> -->
            </div>
        </div>
    </div>
</section>

<?php 

    include "./footer.php";

?>