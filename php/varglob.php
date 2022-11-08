<?php
  include('../php/conexion.php');
  $id_user = $_GET['id_user'];
  $consulta_mysqli = "SELECT * FROM pedidos WHERE id='$id_user'";
  $resultado_consulta_mysqli = mysqli_query($conexion, $consulta_mysqli);

  while($dbpedido = mysqli_fetch_array($resultado_consulta_mysqli)){
	$id = $dbpedido["id"];
	$id_u = $dbpedido["id_usuario"];
	$cantidad =$dbpedido['cantidad'];
	$carne = $dbpedido["carne"];
	$pollo =$dbpedido['pollo'];
	$elementos = $dbpedido['elementos'];
	$nota = $dbpedido['notas'];
	$total = $dbpedido['total'];
	$proceso = $dbpedido['proceso'];
  }

  $consulta = "SELECT * FROM usuarios WHERE id='$id_u'";
  $resultado_consulta = mysqli_query($conexion, $consulta);

  while($dbusuarios = mysqli_fetch_array($resultado_consulta)){
	$nombre = $dbusuarios['nombre'];
	$apellido = $dbusuarios['apellido'];
  $celular = $dbusuarios['celular'];
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles Pedido</title>
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="../css/dash.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="#">La Sabrossita <i class="fa fa-cutlery" aria-hidden="true"></i></a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="out.php" ><i class="fa fa-sign-out fa-lg"></i></a></li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
    <ul class="app-menu">
        <li><a class="app-menu__item active" href="../admin.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Consulta Pedidos</span></a></li>

        <li><a class="app-menu__item" href="../entregados.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Todos los Pedidos</span></a></li>
      </ul>
    </aside>
    <main class="app-content">

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <section class="invoice">
              <div class="row mb-4">
                  <div class="col-6">
                    <img src="../images/Imagen1.png" alt="logo" style="max-width:110px;">
                  </div>
                <div class="col-6">
                  <h5 class="text-right">Fecha: 01/01/2016</h5>
                </div>
              </div>

              <div class="container-fluid">
                <div class="row justify-content-md-center">
                  <div class="col-sm-1 col-md-2 col-lg-3">
                  <h4><strong>Datos Clientes:</strong></h4>
                  <p style="font-size:17px;"><?php echo $nombre." ".$apellido ?></p>
                  <p style="font-size:17px;"><?php echo $celular?></p>
                  </div>
                  <div class="col-sm-1 col-md-2 col-lg-3">
                  <h4><strong>Datos Pedido:</strong></h4>
                  <p style="font-size:17px;"><?php echo "Cantidad Carne: ".$carne ?></p>
                  <p style="font-size:17px;"><?php echo "Cantidad Pollo: ".$pollo ?></p>
                  <p style="font-size:17px;"><?php echo "Cantidad Elementos: ".$elementos ?></p>
                  </div>
                  <div class="col-sm-1 col-md-2 col-lg-3">
                  <h4><strong>Costo Total:</strong></h4>
                  <p style="font-size:25px;"><?php echo "$ ".$total." Mx"?></p>
                  </div>
                </div>
              </div>
                <div class="col-12">
                  <h4><strong>Notas del pedido:</strong></h4>
                  <p style="text-align:justify; font-size:17px;"><?php echo $nota?></p>
                </div>
              
              <div class="row col-12 container">
              <a  style="margin:0px 10px;" class="btn btn-danger col-2" href="cam_proceso.php?id_user=<?php echo $id?>">Entregado</a>
              <a  style="margin:0px 10px;" class="btn btn-primary col-2" href="tel:<?php echo $celular?>">Llamar</a>
              <a  style="margin:0px 10px;" class="btn btn-success col-2" href="https://wa.me/+529933438192" target="_blank">Whatsapp</a>
              </div>

            </section>
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