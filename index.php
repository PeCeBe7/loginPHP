<?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    $usuario = ($_POST["usuario"]);
    $password = $_POST["password"];
    $usuariosCorrectos=array("admin@educem.com","donald@educem.com","gilete@educem.com","gon@educem.com");
    $passCorrectas= array("iloveu","m4k3Am3r1caGr3atAg41n!","ErF4ryS1empr3","Fatality!");
    
    for($i=0;$i<count($usuariosCorrectos);$i++)
    {
        if($usuariosCorrectos[$i]==$usuario && $passCorrectas[$i]==$password)
        {
            session_start();
            $_SESSION["usuario"] = $usuario;
            header("Location: https:\\www.educem.com");
        }
    }
 }
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>
<body>
        <div class="login">
            <div class="login-triangle"></div>
            <h2 class="login-header">Log in</h2>
            <form class="login-container" action="index.php" method="post">
                <p><input name="usuario" type="email" placeholder="Escriu el teu nom d'usuari"></p>
                <p><input name="password" type="password" placeholder="Password"></p>
                <a href="">RECUPERAR CONTRASENYA</a>
                <p><input type="submit" value="Iniciar sesió"></p>
                
            </form>
        </div>
</body>
</html>