<?php

include("con_db.php");

if(isset($_POST['register'])) {
    if(strlen($_POST['name']) >= 1 && strlen($_POST['contrasena']) >= 1 ) {
        $name = trim($_POST['name']);
        $contrasena = trim($_POST['contrasena']);
        $fechareg = date("d/m/y");
        $consulta = "INSERT INTO datos (nombre, contrasena, fecha_reg) VALUES('$usuario','$contrasena','$fechareg')";
        $resultado = mysqli_query($conex,$consulta);
        if($resultado) {
            ?>
            <h3 class="ok">te has inscrito correctamente </h3>
            <?php
        } else{
            ?>
            <h3 class="bad">ups ha ocurrido un error </h3>
            <?php
        }
    }   else{
            ?>
            <h3 class="bad">por favor complete los campos</h3>
            <?php
    }
}

?>