<?php
$idPrenda = $_POST['idPrenda'];
if ($idPrenda) {
        $mysqli = new mysqli('localhost', 'inesgc','secreto', 'boutique');
        if ($mysqli->connect_errno){
            echo"lo sentimos, no se puede conectar con la base de datos";
            exit;
        }else {
            $sql = "DELETE FROM `prenda` WHERE `idPrenda`= $idPrenda;";
            if(!$resultado = $mysqli->query($sql)){
                echo "Error al guardar los datos\n";
                echo "Errno: " . $mysqli->errno . "\n";
                echo "Error: " . $mysqli->error . "\n";
            }else{
                echo " La Prenda ha sido eliminada del sistema." ;
            }
            $mysqli->close();
        }
}