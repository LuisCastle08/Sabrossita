<?php
    
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor inicia sesión");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }
 
?>

<!DOCTYPE html>
<html lang="es" style="height:100%; min-height: 100% !important;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&family=Teko:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400&display=swap" rel="stylesheet">
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet" href="css/prod.css">
    <title>PERFIL</title>
</head>
<body style="height:100%; min-height: 100% !important;">
<!--BARRA DE NAVEGACION-->
        <nav class="navbar navbar-light bg-light   barra" style="background-color:#ffffff  !important; display:block !important;">
            <div class="container-fluid">
                <a class="navbar-brand h1" href="#" style="  font-family: Poppins-Medium; font-size:35px; color: #FF9700;!important " >  LA SABROSSITA <i class="fa fa-cutlery" aria-hidden="true"></i> </a>
            </div>
        </nav>
<!--FIN BARRA DE NAVEGACION-->


<!--MAIN PROFILE-->

            <?php
                $inc=include("php/conexion.php");
                $id =  $_SESSION['Nuser'];
                    if ($inc) {
                        $consulta = "SELECT * FROM usuarios WHERE id='$id'";
                        $resultado = mysqli_query($conexion,$consulta);
                        if ($resultado) {
                            while ($row = $resultado->fetch_array()) {
                                $user = $row['usuario'];
                                $num = $row['celular'];
                                $ubi = $row['direccion'];
                                $nombre = $row['nombre'];
                                $apellido = $row['apellido'];
                            }
                        }
                    }
                    
            ?>

<form action="php/editprof.php" method="post">
<div class="container rounded bg-white mt-5" style="border-radius:20px !important;">
    <div class="row">
        <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img style="border-radius:50px;" src="images/Imagen1.png" width="200px">
                <br>
                    <span class="font-weight-bold" style="text-transform: capitalize; font-family:Poppins-Medium; font-weight:bold; font-size:40px;"><?php echo $user?></span>
                </div>
        </div>

        <div class="col-md-7">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6  style="font-family:Poppins-Medium; font-weight:bold; font-size:20px; ">PERFIL</h6>
                </div>
                <label for="">Datos Personales:</label>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <input required type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php echo $nombre ?>">
                    </div>
                    <div class="col-md-6">
                        <input required type="text" name="apellido" placeholder="Apellido" class="form-control" value="<?php echo $apellido ?>">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <input required type="text" class="form-control" placeholder="Numero de Celular" name="celular" value="<?php echo $num?>">
                    </div>
                    <div class="col-md-6">
                        <input required type="text" class="form-control" placeholder="Usuario de Sesion" name="usuario" value="<?php echo $user?>" >
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <textarea required id="ubi" name="ubicacion" class="form-control" placeholder="Dirección de domicilio"><?php echo $ubi?></textarea>
                    </div>

                    <input type="hidden" value="<?php echo $id; ?>" name="id">
                </div>

                <div class="mt-3 " style="text-align:right;">
                    <button type="submit" name="edit" class="btn btn-primary profile-button mt-2">GUARDAR CAMBIOS</button>
                    <a href="bienvenida.php" class="btn btn-danger profile-button mt-2" >REGRESAR A PEDIDO</a>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

<?php require('rutas/footer.html'); ?>

    <script src="js/operaciones.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/605bde9116.js" crossorigin="anonymous"></script>
</body>
</html>