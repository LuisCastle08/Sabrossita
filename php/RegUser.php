<?php
    include 'conexion.php';

    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $usuario=$_POST['usuario'];
    $celular=$_POST['celular'];
    $contrasena=$_POST['contrasena'];
    $nivelU=2;

    $query = "INSERT INTO usuarios (usuario, celular, contrasena,nivelU,nombre,apellido) VALUES ('$usuario', '$celular', '$contrasena', '$nivelU', '$nombre', '$apellido')";

    //verificar que el numero no se repita
$v_celular = mysqli_query($conexion, "SELECT * FROM usuarios WHERE celular='$celular' ");

if(mysqli_num_rows($v_celular) > 0){
    echo '
        <script>
            alert("Este numero ya existe, intente con otro");
            window.location="../index.php";
        </script>
 ';
 exit();
}

//verificar que el usuario no se repita
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

if(mysqli_num_rows($verificar_usuario) > 0){
    echo '
        <script>
            alert("Este usuario ya existe, intente con otro");
            window.location="../index.php";
        </script>
 ';
 exit();
}

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
        alert("usuario almacedado correctamente");
        window.location="../index.php";
    </script>        
    ';
}else{
    echo '
    <script>
        alert("intentalo de nuevo");
        
    </script>        
    ';
}
mysqli_close($conexion);

/* 
 if (isset($_POST['registro'])) {
    if (empty($_POST ['nombre']) or empty($_POST ['apellido']) or empty($_POST ['usuario']) or empty($_POST ['celular']) or empty($_POST ['contrasena'])) {
        echo "Uno de los campos esta vacio";
    } else {
        $nombre = $_POST ['nombre'];
        $apellido = $_POST ['apellido'];
        $usuario = $_POST ['usuario'];
        $celular = $_POST ['celular'];
        $contrasena = $_POST ['contrasena'];
        $nivelU = 2;

        $sql=$conexion->query("INSERT INTO usuarios (usuario,celular,contrasena,nombre,apellido,nivelU) VALUES ('$usuario','$celular','$contrasena','$nombre','$apellido','$nivelU')");
        if ($sql == 1) {
            echo "USUARIO REGISTRADO";
        } else {
            echo "NO REGISTRADO";
        }
    }
 } */
?>