<?php
$idColor = $_POST['idColor'];
if ($idColor) {
        $mysqli = new mysqli('localhost', 'inesgc','secreto', 'boutique');
        if ($mysqli->connect_errno){
            echo"lo sentimos, no se puede conectar con la base de datos";
            exit;
        }else {
            $sql = "DELETE FROM `color` WHERE `idColor`= $idColor;";
            if(!$resultado = $mysqli->query($sql)){
                echo "Error al guardar los datos\n";
                echo "Errno: " . $mysqli->errno . "\n";
                echo "Error: " . $mysqli->error . "\n";
            }else{
                echo " El color ha sido eliminado del sistema." ;
            }
            $mysqli->close();
        }
}