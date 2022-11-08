<?php
  include('php/conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/dash.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
  <?php require('rutas/adminnav.html'); ?>
    <main class="app-content">
        <!--CONTENIDOS-->
        <div class="row">
          <div class="col-md-12">
            <div class="tile">
              <div class="table-responsive" style="background-color:#fff ;">
                <table class="table">
                  <thead>
                    <h2>Tabla de Pedidos</h2>
                    <tr>
                      <th>N° Pedido</th>
                      <th>N° Cliente</th>
                      <th>Celular Cliente</th>
                      <th>Cantidad</th>
                      <th>Carne</th>
                      <th>Pollo</th>
                      <th>Total</th>
                      <th>Pedido</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                      $consulta_mysqli = "SELECT * FROM pedidos ORDER BY `id` DESC";
                      $resultado_consulta_mysqli = mysqli_query($conexion, $consulta_mysqli);

                      while($dbpedido = mysqli_fetch_array($resultado_consulta_mysqli)){
                        $id = $dbpedido["id"];
                        $id_u = $dbpedido["id_usuario"];
                        $celular = $dbpedido["celular_u"];
                        $cantidad =$dbpedido['cantidad'];
                        $carne = $dbpedido["carne"];
                        $pollo =$dbpedido['pollo'];
                        $elementos = $dbpedido['elementos'];
                        $nota = $dbpedido['notas'];
                        $total = $dbpedido['total'];
                        $proceso = $dbpedido['proceso'];
				?>
                    <tr>
                    
                      <td><?php echo $id?></td>
                      <td><?php echo $id_u?></td>
                      <td><?php echo $celular?></td>
                      <td><?php echo $cantidad?></td>
                      <td><?php echo $carne?></td>
                      <td><?php echo $pollo?></td>
                      <td><?php echo $total."$ Mx"?></td>
                      <td>
                          <a class="btn btn-info" href="php/varglob.php?id_user=<?php echo $id?>">Ver</a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <div class="tile-footer">
                <p>Cuando se <strong>Entrega</strong>  el pedido se Presiona <button class="btn btn-danger" type="button" disabled>E</button></p>
              </div>
            </div>
          </div>
        </div>  
    </main>  
        <!-- Essential javascripts for application to work-->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/admin.js"></script>
        <script src="https://kit.fontawesome.com/605bde9116.js" crossorigin="anonymous"></script>
  </body>
</html>