<?php 

echo "Este es el dashboard\n";

if (isset($id)) {
    echo "Este es el id otorgado: " . $id;
    ?>

    <ul>
        <li><a href="/inicio/dashboard/<?php echo $id ?>/uno">Ir a la sección uno</a></li>
        <li><a href="/inicio/dashboard/<?php echo $id ?>/dos">Ir a la sección dos</a></li>
        <li><a href="/inicio/dashboard/<?php echo $id ?>/tres">Ir a la sección tres</a></li>
        <li><a href="/inicio/dashboard/<?php echo $id ?>/cuatro">Ir a la sección cuatro</a></li>
        <li><a href="/inicio/dashboard/<?php echo $id ?>/cinco">Ir a la sección cinco</a></li>
        <li><a href="/inicio/dashboard/<?php echo $id ?>/seis">Ir a la sección seis</a></li>
        <li><a href="/inicio/dashboard/<?php echo $id ?>/siete">Ir a la sección siete</a></li>
        <li><a href="/inicio/dashboard/<?php echo $id ?>/ocho">Ir a la sección ocho</a></li>
        <li><a href="/inicio/dashboard/<?php echo $id ?>/nueve">Ir a la sección nueve</a></li>
        <li><a href="/inicio/dashboard/<?php echo $id ?>/diez">Ir a la sección diez</a></li>
    </ul>

    <?php
    // Muestra la sección seleccionada si está definida
    if (isset($seccion)) {
        echo "<p>Estás viendo la sección: " . htmlspecialchars($seccion, ENT_QUOTES, 'UTF-8') . "</p>";
    }
} else { ?>

    <p>Puedes escoger entre estos ID's rockero:</p>

    <ul>
        <li><a href="/inicio/dashboard/1">Id número 1</a></li>
        <li><a href="/inicio/dashboard/2">Id número 2</a></li>
        <li><a href="/inicio/dashboard/3">Id número 3</a></li>
        <li><a href="/inicio/dashboard/4">Id número 4</a></li>
        <li><a href="/inicio/dashboard/5">Id número 5</a></li>
        <li><a href="/inicio/dashboard/6">Id número 6</a></li>
        <li><a href="/inicio/dashboard/7">Id número 7</a></li>
        <li><a href="/inicio/dashboard/8">Id número 8</a></li>
        <li><a href="/inicio/dashboard/9">Id número 9</a></li>
        <li><a href="/inicio/dashboard/10">Id número 10</a></li>
    </ul>

<?php } ?>
