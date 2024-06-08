<?php
session_start();

// Comprobar si se han enviado los datos del formulario
if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Datos de usuario y contraseña para la demostración
    $usuario_correcto = "jansel";
    $contrasena_correcta = "jansel1";
    
    // Verificar si el usuario y la contraseña son correctos
    if($username === $usuario_correcto && $password === $contrasena_correcta) {
        // Redirigir a la página de bienvenida o dashboard
        header("Location: welcome.php");
        exit();
    } else {
        $_SESSION['error'] = "Error: usuario o contraseña incorrectos";
        header("Location: login.html");
        exit();
    }
} else {
    $_SESSION['error'] = "Error: debes completar ambos campos";
    header("Location: login.html");
    exit();
}
?>
