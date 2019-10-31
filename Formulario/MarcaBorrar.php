<?php
$idMarca = $_POST['idMarca'];
if ($idMarca) {
        $mysqli = new mysqli('localhost', 'inesgc','secreto', 'boutique');
        if ($mysqli->connect_errno){
            echo"lo sentimos, no se puede conectar con la base de datos";
            exit;
        }else {
            $sql = "DELETE FROM `marca` WHERE `idMarca`= $idMarca;";
            if(!$resultado = $mysqli->query($sql)){
                echo "Error al guardar los datos\n";
                echo "Errno: " . $mysqli->errno . "\n";
                echo "Error: " . $mysqli->error . "\n";
            }else{
                echo " La marca ha sido eliminada del sistema." ;
            }
            $mysqli->close();
        }
}