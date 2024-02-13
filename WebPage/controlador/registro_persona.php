<?php

include("modelo/conexion.php");

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"])) {

        $nombre = $_POST["nombre"];
        $sql = $conexion->query(" INSERT INTO `pruebas` (`userId`, `username`) VALUES (NULL, '$nombre'); ");
 
        if ($sql == 1) {
            echo '<div class="alert alert-success>Usuario Registrado</div>';
        } else {
            echo '<div class="alert alert-danger>Error al Registrar</div>';
        }

    } else {
        echo '<div class="alert alert-danger>Campo vacío</div>';
    }
}