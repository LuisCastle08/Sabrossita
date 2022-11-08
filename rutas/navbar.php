
<!--BARRA DE NAVEGACION-->
    <nav class="navbar navbar-light bg-light  barra" style="background-color:#ffffff  !important; display:block !important;">
    <div class="container-fluid">
        <a class="navbar-brand h2 txtlogo" href="#">LA SABROSSITA <i class="fa fa-cutlery" aria-hidden="true"></i> </a>
        
        <button class="navbar-toggler boton" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">PERFIL</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="perfil m-0 vh-50 row justify-content-center align-items-center">
            <img class="imgperfil" src="images/Imagen1.png" alt="Foto_Perfil">
            </div>
        <br>
                <div class="m-0 vh-50 row justify-content-center align-items-center" >
                    <div class="datos">
                        <ul>
                        <?php
                        include('php/conexion.php');
                        $id =  $_SESSION['Nuser'];
                        $consulta_mysqli = "SELECT * FROM usuarios WHERE id='$id'";
                        $resultado_consulta_mysqli = mysqli_query($conexion, $consulta_mysqli);

                        while($registro = mysqli_fetch_array($resultado_consulta_mysqli)){
                            $celular = $registro["celular"];
                            $direccion = $registro["direccion"];
                            $usuario =$registro['usuario'];
                            $nombre = $registro['nombre'];
                            $apellido = $registro['apellido'];
                        }
                        $_SESSION['celular_u']=$celular;
                        ?>
                                <li><p>Nombre:<?php echo " ".$nombre?></p></li>
                                <li><p>Apellido:<?php echo " ".$apellido?></p></li>
                                <li><p>Número Celular:<?php echo " ".$celular?></p></li>
                                <li><p>Domicilio:<?php echo " ".$direccion?></p></li>
                        </ul>
                    </div>
                 </div>
        <br>
            <div class="m-0 vh-50 row justify-content-center align-items-center" >
            <a href="profile.php" class="boton-a btn btn-primary navboton" >
            EDITAR PERFIL
            </a>
            <a href="php/out.php" class="boton-a btn btn-danger navboton">
            CERRAR SESION
            </a>
         </div>
            <div class="m-0 vh-50 row justify-content-center align-items-center txtnavbot">
                <h1 class="h2 ">
                    <span style="color:#fff;">LA SABROSSITA</span>
                </h1> 
            </div>
        </div>
    </div>
    </nav>
<!--FIN BARRA DE NAVEGACION-->