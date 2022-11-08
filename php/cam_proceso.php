<?php
    include ('conexion.php');
    $id_user = $_GET['id_user'];
    $proceso="ENTREGADO";
    //modificar
    $modificar = "UPDATE pedidos SET proceso='$proceso' WHERE id = '$id_user'";

    $resultado = mysqli_query($conexion, $modificar);

    if ($resultado) {
        echo "<script>
        alert('Se actualizo'); 
        window.location:'../admin.php';
        </script>";
    }else {
        echo "<script>
        alert('No se actualizo'); 
        window.history.go(-1);
        </script>";
    }
?>
