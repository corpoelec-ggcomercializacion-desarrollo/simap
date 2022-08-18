<?php

/* Redirecciona a una pagina diferente cuando se hace un request en el directorio de principal  SIMAP*/

$host   = $_SERVER['HTTP_HOST'];
$uri    = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra  = 'web/index.php';

header("Location: http://$host$uri/$extra", TRUE, 307);

exit;
