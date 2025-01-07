<?php 
// composer require league/flysystem

use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Local;

$adapter = new Local(__DIR__.'/path/to/files');
$filesystem = new Filesystem($adapter);
$filesystem->write('archivo.txt', 'Contenido del archivo');


?>