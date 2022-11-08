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
<html lang="es">
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
<title>TUS PEDIDOS</title>
</head>
<body>
<!--FLOTADOR DE TOTAL DE COMPRA-->
<a href="bienvenida.php" class="btn-flotante">Volver al Pedido</a>
<?php require('rutas/navbar.php'); ?>

<!--MAIN PROFILE-->
<div class="container rounded bg-white  mt-5">
    <h3 style="text-align:center;"  class="h2">Historial de pedidos </h3>
        <div class="row">
            <div class="col-md-12  p-2" >
                <div class="table-responsive">
                    <table class="table table-fixed table-dark table-bordered">
                        <thead>
                            <tr>
                                <th>ID Pedido</th>
                                <th>Celular</th>
                                <th>Carne</th>
                                <th>Pollo</th>
                                <th>Cantidad</th>
                                <th>Elementos</th>
                                <th>Nota Pedido</th>
                                <th>Costo Total</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                            <tbody>
                                <?php
                                include('php/conexion.php');
                                $id_u =  $_SESSION['Nuser'];
                                $consulta_mysqli = "SELECT * FROM pedidos WHERE id_usuario='$id_u' ORDER BY `id` DESC";
                                $resultado_consulta_mysqli = mysqli_query($conexion, $consulta_mysqli);
        
                                while($dbpedido = mysqli_fetch_array($resultado_consulta_mysqli)){
                                            $id = $dbpedido["id"];
                                            $celular = $dbpedido["celular_u"];
                                            $carne = $dbpedido["carne"];
                                            $pollo =$dbpedido['pollo'];
                                            $cantidad =$dbpedido['cantidad'];
                                            $elementos = $dbpedido['elementos'];
                                            $nota = $dbpedido['notas'];
                                            $total = $dbpedido['total'];
                                            $proceso = $dbpedido['proceso'];
                                ?>
                                        <tr>
                                            <td><?php echo $id?></td>
                                            <td><?php echo $celular?></td>
                                            <td><?php echo $carne?></td>
                                            <td><?php echo $pollo?></td>
                                            <td><?php echo $cantidad?></td>
                                            <td><?php echo $elementos?></td>
                                            <td><?php echo substr($nota, 0, 20)."..."?></td>
                                            <td><?php echo $total."$ Mx"?></td>
                                            <td><?php echo $proceso?></td>
                                        </tr>
                                <?php } ?>
                                </tbody>
                        </table>
                    </div> 
            </div>
        </div>
    </div>    
<br><br>

<?php require('rutas/footer.html'); ?>

<script src="js/operaciones.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/605bde9116.js" crossorigin="anonymous"></script>
</body>
</html>