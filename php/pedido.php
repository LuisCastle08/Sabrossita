<?php
    include 'conexion.php';

    /*CANTIDAD*/
    $cantidadC = $_POST['cantidadC'];
    $cantidadP = $_POST['cantidadP'];    
    //echo ($cantidadC);
    //echo ($cantidadP);
    /*Especias*/

    if (isset($_POST['enviar'])) {
        if (isset($_POST['agre'])) {
            $arregloCHK = $_POST['agre'];
            $num = count($arregloCHK);
            $elementos = "";
            /*echo("Checkbox seleccionados: ".$num.'<br><br>');*/
            //echo("Valores: <br>");
            for ($i=0; $i <$num ; $i++) { 
                /*echo($arregloCHK[$i].'<br>');*/
                $elementos = $elementos.$arregloCHK[$i].",";
            }    
        }else {
            $elementos = "NADA";
        }
    }
    //echo($elementos);

    /*Nota*/
    $nota = $_POST['nota'];
    //echo($nota);
    
    /*OPERACIONES*/
    $enchilada = 18;
    /*CANTIDAD TOTAL*/
    $enchiladasT = $cantidadC + $cantidadP;
    $total = $enchiladasT * $enchilada;

    session_start();
    $_SESSION['carne'] = $cantidadC;
    $_SESSION['pollo'] = $cantidadP;
    $_SESSION['elementos'] = $elementos;
    $_SESSION['nota'] = $nota;
    $_SESSION['cantidad'] = $enchiladasT;
    $_SESSION['totalP'] = $total;

    /*PROCESO DE PEDIDO */
    $proceso =  "PROCESO";

    /*ID USUARIO*/
    $id_u =  $_SESSION['Nuser'];
    $celular_u = $_SESSION['celular_u'];

    $accion = "INSERT INTO pedidos(id_usuario, celular_u, cantidad,carne,pollo,elementos,notas,total,proceso) VALUES('$id_u', '$celular_u', '$enchiladasT', '$cantidadC', '$cantidadP', '$elementos', '$nota', '$total', '$proceso')";

    $execute = mysqli_query($conexion, $accion);

if($execute){
    echo '
    <script>
        alert("PEDIDO ALMACENADO CORRECTAMENTE");
        window.location="../bienvenida.php";
    </script>        
    ';
}else{
    echo '
    <script>
        alert("intentalo de nuevo");
        window.location="../bienvenidad.php";
    </script>        
    ';
}
mysqli_close($conexion);


?>

