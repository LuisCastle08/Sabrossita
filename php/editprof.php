<?php
    include("conexion.php");

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $celu = $_POST['celular'];
    $ubi = $_POST['ubicacion'];


    $editprof = "UPDATE usuarios SET usuario='$usuario',celular='$celu', direccion='$ubi', nombre='$nombre',apellido='$apellido' WHERE id ='$id' ";
    $resultado = mysqli_query($conexion, $editprof);

    if ($resultado) {
        echo "<script>
        alert('SE ACTUALIZO SU PERFIL'); 
        window.location='../profile.php';
        </script>";
    }else {
        echo "<script>
        alert('NO SE PUEDO ACTUALIZAR'); 
        window.history.go(-1);
        </script>";
    }
?>