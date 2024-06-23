<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $user=$_POST['user'];
    $password=$_POST['password'];
    $edad=$_POST['edad'];
    $errores = [];

    if(empty($user)) {
        $errores[] = "El campo de usuario es obligatorio.";
    }
    if (empty($password)) {
        $errores[] = "El campo de contraseña es obligatorio.";
    }
    if (empty($edad)) {
        $errores[] = "El campo de edad es obligatorio.";
    } elseif (!is_numeric($edad)) {
        $errores[] = "La edad debe ser un número.";
    } elseif ($edad < 18) {
        $errores[] = "Debes ser mayor de edad (18 años o más).";
    }

    if(count($errores) == 0) {
        if ($user == "luis" && $password == "mendoza")
        {
            echo "Login exitoso. ¡Bienvenido, $user!";
        }
        else 
        {
            $errores[] = "Usuario o contraseña incorrectos.";
        }
    }

    if (count($errores) > 0) 
    {
        foreach ($errores as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
        echo "<p><a href='./formulario.html'>Volver al formulario</a></p>";
    }
}
?>
