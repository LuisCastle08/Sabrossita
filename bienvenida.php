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
<title>BIENVENIDA</title>
</head>
<body>

<!--FLOTADOR DE TOTAL DE COMPRA-->
<a href="pedidosC.php" class="btn-flotante">Ver tus pedidos</a>
<?php require('rutas/navbar.php'); ?>
<!--MAIN -->

            
    <div class="container rounded bg-white mt-5">
    <h3 style="text-align:center;"  class="h2">¡Bienvenido! <span style="text-transform: capitalize;"><?php echo $usuario?></span> ¿Cuantas enchiladas va pedir hoy? </h3>
        <div class="row">
            <div class="col-md-3 border-right p-2" style="background-color: #E87B31;">
                <div class="d-flex flex-column align-items-center  text-center p-1 py-3 hidden">
                    <img src="images/Imagen1.png" alt="Logo Tienda" width="200px" style="border-radius: 70px;">
                </div>
                <div class="hidden">
                    <h3 class="h2" style="text-align:center; color:#fff;">CONTACTO:</h3>
                    <ul class="contacto mt-3">
                        <li>
                            Numero Celular: 9934253847
                        </li>
                        <li>
                            Dirrección: <br>
                            Morelos, Esq. Rosales, #327
                        </li>
                    </ul>
                </div>  
                <br>
                    <div>
                        <h3 style="text-align:center; color:white;">PRECIO UNIDAD:</h3>
                        <p class="contacto2">$18 Mx</p>
                    </div>  
            </div>
    
            <div class="col-md-9  p-2" >
                <form action="php/pedido.php" method="POST">
                    <div class=" row">
                    <p class="txt align-izq ">ELIGE TU PEDIDO</p>
                            <div class="div-center col-5 my-auto mx-auto" style="text-align: center;">
                                    <p class="txt">CARNE</p>
                                    <button type="button" class="btn btn-danger btn-agre-eli" onclick="disminuir()">ELIMINAR - 1</button>
                                    <input type='text' id="carne" name="cantidadC" value="0" class="inputs "  style="border:none;">
                                    <button type="button" class="btn btn-success btn-agre-eli"  onclick="aumentar()">AGREGAR + 1</button>
                            </div>        
                            <div class="col-5 my-auto mx-auto" style="text-align: center;">        
                                    <p class="txt">POLLO</p>
                                    <button type="button" class="btn btn-danger btn-agre-eli" onclick="disminuirp()">ELIMINAR - 1</button>
                                    <input type='text' id="pollo" name="cantidadP" value="0" class="inputs "  style="border:none;">
                                    <button type="button" class="btn btn-success btn-agre-eli"  onclick="aumentarp()">AGREGAR + 1</button>
                            </div>  
                    </div>
                    <br>  
                    <div class=" row">    
                        <p class="txt align-izq ">Que deseas agregar a sus enchiladas:</p>
                        <div class="div-center" style="text-align: center;">
                            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group" >
                                <input type="checkbox" class="btn-check" name="agre[]" value="QUESO" id="btncheck1" autocomplete="off" >
                                <label class="btn btn-outline-primary inputc" for="btncheck1">QUESO</label>

                                <input type="checkbox" class="btn-check" name="agre[]" value="ARROZ" id="btncheck2" autocomplete="off" >
                                <label class="btn btn-outline-primary inputc" for="btncheck2">ARROZ</label>

                                <input type="checkbox" class="btn-check" name="agre[]" value="CEBOLLA" id="btncheck3" autocomplete="off" >
                                <label class="btn btn-outline-primary inputc" for="btncheck3">CEBOLLA</label>
                            </div>
                        </div>
                    </div>    
                        <br>
                    <div class=" row">    
                        <p class="txt align-izq ">Notas del pedido:</p>
                            <div class="col-11 my-auto mx-auto">
                            <textarea name="nota" required style="height:100px; border-color:#E87B31 !important; width:100%;  resize: none; padding:10px;" placeholder="Ejemplo: Quiero que mi pedido se divida en 3 contenedores de 4."></textarea>
                            </div>
                    </div>
                    <div>
                        <button type="submit" name="enviar" onclick="confirmar()" class="btn btn-primary  mt-2" style="background-color:#E87B31;border-color:#E87B31;   margin-left: 50%;
                        transform: translateX(-50%);">Hacer pedido</button>
                    </div>
                    </form>
            </div>
        </div>
    </div>    

    <?php require('rutas/footer.html'); ?>

    <script src="js/operaciones.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/605bde9116.js" crossorigin="anonymous"></script>
</body>
</html>
