<?php $prueba = "Prueba" ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Prueba con enruting"; ?></title>
</head>
<body>
    Prueba
    <p>Hola, <?php echo "aaaaaaaaaaaaaaaaaaaa"; ?>!</p>
    <?php echo $nombre; ?>

    <h2>Lista de prueba para probar (Valga la redundacia) PHP, que por cierto es la versión: <?php echo phpversion(); ?></h2>
    <?php for($i = 1; $i <= 10; $i++) { ?>
        <li>Lista n°: <?php echo $i; ?></li>
    <?php } ?>

    <?php session_start(); ?>

    <form method="POST" action="/templates/login.php">
        <div>
            <label for="nombre">Tu nombre:</label>
            <input type="text" name="nombre" id="nombre">
        </div>
        <input type="submit" value="Acceder">
    </form>

    <?php if (isset($_SESSION['nombre'])) {?>
        <h1><?php echo "Bienvenido ".$_SESSION['nombre']; ?></h1>
    <?php } ?>

    <a href="/inicio/dashboard/">Ir al dashboard</a>

</body>
</html>