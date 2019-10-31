<?php
$idSubCategoria = $_POST['idSubCategoria'];
if ($idSubCategoria) {
        $mysqli = new mysqli('localhost', 'inesgc','secreto', 'boutique');
        if ($mysqli->connect_errno){
            echo"lo sentimos, no se puede conectar con la base de datos";
            exit;
        }else {
            $sql = "DELETE FROM `subcategoria` WHERE `idSubCategoria`= $idSubCategoria;";
            if(!$resultado = $mysqli->query($sql)){
                echo "Error al guardar los datos\n";
                echo "Errno: " . $mysqli->errno . "\n";
                echo "Error: " . $mysqli->error . "\n";
            }else{
                echo " Los datos de la SubCategoria han sido eliminados del sistema." ;
            }
            $mysqli->close();
        }
}