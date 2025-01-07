<?php

require_once 'vendor/autoload.php';

$router = new AltoRouter();

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

if ($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php') {
    header('Location: /inicio/', true, 301);
    exit();
}

// Definir rutas
$router->map('GET', '/inicio', function() use ($twig) {
    $nombre = "V";
    include 'templates/inicio.php';
});

// Definir rutas
$router->map('GET', '/inicio/', function() use ($twig) {
    $nombre = "V";
    include 'templates/inicio.php';
});

$router->map('GET', '/inicio/dashboard', function() use ($twig) {
    $nombre = "V";
    include 'templates/dashboard.php';
});

$router->map('GET', '/inicio/dashboard/', function() use ($twig) {
    $nombre = "V";
    include 'templates/dashboard.php';
});

$router->map('GET', '/inicio/prueba/[i:id]', function($id) use ($twig) {
    if ($id >= 0 && $id <= 10) {
        $nombre = "V";
        $id_cont = $id;
        echo $twig->render('prueba.html', [
            'id' => $id  // Pasa el ID como variable a la plantilla
        ]);
    } else {
        $error = 'Id no valido';
        echo $twig->render('404.html');
    }
});

$router->map('GET', '/inicio/prueba/', function() use ($twig) {
    // Renderiza la plantilla sin pasar un ID
    echo $twig->render('prueba.html');
});

// Definir ruta con ID dinámico
$router->map('GET', '/inicio/dashboard/[i:id]', function(int $id) use ($twig) {
    if ($id >= 0 && $id <= 10) {
        $nombre = "V";
        $id_cont = $id;
        include 'templates/dashboard.php';
    } else {
        echo $twig->render('404.html');
    }
});

// Definir ruta con ID dinámico
$router->map('GET', '/inicio/dashboard/[i:id]/', function(int $id) use ($twig) {
    if ($id >= 0 && $id <= 10) {
        $nombre = "V";
        $id_cont = $id;
        include 'templates/dashboard.php';
    } else {
        echo $twig->render('404.html');
    }
});

// Rutas para dashboard con y sin trailing slashÑ
$router->map('GET', '/inicio/dashboard/[i:id]/[:seccion]', function(int $id, string $seccion) use ($twig) {
    validarIdYMostrarDashboard($id, $seccion, $twig);
});

$router->map('GET', '/inicio/dashboard/[i:id]/[:seccion]/', function(int $id, string $seccion) use ($twig) {
    validarIdYMostrarDashboard($id, $seccion, $twig);
});

// Función para validar el ID y renderizar el dashboard
function validarIdYMostrarDashboard(int $id, string $seccion, $twig) {
    if ($id >= 0 && $id <= 10) {

        include 'templates/dashboard.php';  // Incluye la plantilla de dashboard
    } else {

        echo $twig->render('404.html');
    }
}

// Hacer match con la ruta solicitada
$match = $router->match();

if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    // Si no se encuentra la ruta, mostrar 404
    $error = 'Error por defecto';
    echo $twig->render('404.html');
}
