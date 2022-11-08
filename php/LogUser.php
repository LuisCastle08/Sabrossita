<?php
    session_Start();

    include 'conexion.php';

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios where usuario='$usuario' and contrasena='$contrasena'");

    $consulta_mysqli = "SELECT * FROM usuarios WHERE usuario='$usuario' and contrasena='$contrasena'";
    $resultado_consulta_mysqli = mysqli_query($conexion, $consulta_mysqli);

    while($registro = mysqli_fetch_array($resultado_consulta_mysqli)){
        $id= $registro['id'];
        $lvlU= $registro['nivelU'];
    }

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $usuario;
        $_SESSION['Nuser'] = $id;
        $_SESSION['levelU'] = $lvlU;
        if ($lvlU == 2) {
            header("location: ../bienvenida.php");
        }else {
            header("location: ../admin.php");
        }
        

        exit;
    }else{
        echo '
        <script> 
            alert("Usuario o Contraseña no son correctos, por favor verifique los datos");
            window.location = "../index.php";
        </script>
        ';
        exit;
    }
    
?>