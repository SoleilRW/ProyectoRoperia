<head>
        <meta charset="utf-8">
        <meta http-equiv="x-UA-Compatible" content="IE=edge">
        <title>Guardado</title>
        <meta mane="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css">
            <style>
                body {
                    background: linear-gradient(90deg, #C9FAF8, #F3FFFF);
                    }
            
                p{
                text-align:center;
                color: black;
                }
            
            </style>
    </head>
<?php
/* Metodo Post - Se utiliza para guardar informacion*/
            $NombreColor = $_POST['NombreColor'];
            


// Esto es una constante
define("boton_atras","<input type='button' value='Volver Al Formulario' onclick='history.back()'>");
if($NombreColor){
    $mysqli = new mysqli('localhost','inesgc','secreto','boutique');
    if($mysqli->connect_errno){
        echo"LO SENTIMOS, NO SE PUEDE CONECTAR CON LA BASE DE DATOS";
        exit;
    }else{
        if (isset($_POST["idColor"]) && !empty($_POST["idColor"])){
            $idColor=$_POST["idColor"];
        $sql = "UPDATE `color` SET  `NombreColor` = '$NombreColor' WHERE `color`.`idColor`=$idColor";
        if (!$resultado = $mysqli->query($sql)){
            echo "Error al guardar los datos\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Errno: " . $mysqli->error . "\n"; 
        }else{
            echo "<z>Actualizado correctamente!</z>"; 
        }
    }else{
        $sql = "INSERT INTO `color` (`NombreColor`) VALUES ('$NombreColor');";
        if (!$resultado = $mysqli->query($sql)){
            echo "Error al guardar los datos\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Errno: " . $mysqli->error . "\n"; 
        }else{
            echo "<z>Guardado Correctamente!</z>";
        }
        }
        $mysqli->close();
    }

    print("<a href='http://localhost/proyecto/FormColor.php'>Volver</a>");

//Verificar si existe el valor de Color
}elseif(empty($NombreColor)) {
    print("<p> Debes ingresar el nombre del Color.</p>");
    print(boton_atras);
}