<?php
require_once 'config.php';

if ($conn) {
    echo "Conexión exitosa a la base de datos.";
} else {
    echo "Error: No se pudo conectar.";
}
?>
