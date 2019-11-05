<?php
$idCategoria = $_POST['idCategoria'];
if ($idCategoria) {
        $mysqli = new mysqli('localhost', 'inesgc','secreto', 'boutique');
        if ($mysqli->connect_errno){
            echo"lo sentimos, no se puede conectar con la base de datos";
            exit;
        }else {
            $sql = "DELETE FROM `categoria` WHERE `idCategoria`= $idCategoria;";
            if(!$resultado = $mysqli->query($sql)){
                echo "Error al guardar los datos\n";
                echo "Errno: " . $mysqli->errno . "\n";
                echo "Error: " . $mysqli->error . "\n";
            }else{
                echo " Los datos del categoria han sido eliminados del sistema." ;
            }
            $mysqli->close();
        }
}