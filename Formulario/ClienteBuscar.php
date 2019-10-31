<?php

/* METODO GET - se utiliza para obtener un dato */

$idCliente = $_GET['idCliente'];
$mysqli = new mysqli('localhost', 'inesgc','secreto', 'boutique');
// Esto es para que nos avise si se pudo o no conectar con la base de datos
if ($mysqli->connect_errno) {
    echo "Lo sentimos, no se puede conectar con la base de datos";
    exit;
} else {
    //Para seleccionar por idCliente en la busqueda
    $sql = "SELECT * FROM cliente WHERE idCliente = $idCliente";
    if ($idCliente == 0) {
        $sql = "SELECT * FROM cliente;";
    }
    $result = $mysqli->query($sql);
//Aqui aparecen los resultados en un json cutre'i 
    $resultados['data'] = array();
    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
            array_push($resultados['data'], $row);
        }
        header('Content-type: application/json');
        echo json_encode( $resultados);
    } else {
        $rows = [];
        header('Content-type: application/json');
        echo json_encode( $resultados );
    }
    $mysqli->close();
}