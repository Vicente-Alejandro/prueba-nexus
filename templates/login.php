<?php 

session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo $_POST['nombre'];
    $_SESSION['nombre'] = $_POST['nombre'];
    header("location: /inicio/");
}

?>