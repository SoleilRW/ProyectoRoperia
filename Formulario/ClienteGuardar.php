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
            $NombreCliente = $_POST['NombreCliente'];
            $ApellidoCliente = $_POST['ApellidoCliente'];
            $CIcliente = $_POST['CIcliente'];
            $TelCliente = $_POST['TelCliente'];



// Esto es una constante
define("boton_atras","<input type='button' value='Volver Al Formulario' onclick='history.back()'>");
if($NombreCliente and $ApellidoCliente and $CIcliente and $TelCliente){
    $mysqli = new mysqli('localhost','inesgc','secreto','boutique');
    if($mysqli->connect_errno){
        echo"LO SENTIMOS, NO SE PUEDE CONECTAR CON LA BASE DE DATOS";
        exit;
    }else{
        if (isset($_POST["idCliente"]) && !empty($_POST["idCliente"])){
            $idCliente=$_POST["idCliente"];
        $sql = "UPDATE `cliente` SET  `NombreCliente` = '$NombreCliente', `ApellidoCliente`= '$ApellidoCliente',`CIcliente`='$CIcliente', `TelCliente`='$TelCliente' WHERE `cliente`.`idCliente`=$idCliente";
        if (!$resultado = $mysqli->query($sql)){
            echo "Error al guardar los datos\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Errno: " . $mysqli->error . "\n"; 
        }else{
            echo "<z>Actualizado correctamente!</z>"; 
        }
    }else{
        $sql = "INSERT INTO `cliente` (`NombreCliente`, `ApellidoCliente`, `CIcliente`, `TelCliente`)
        VALUES ('$NombreCliente', '$ApellidoCliente',$CIcliente, $TelCliente);";
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

    print("<a href='http://localhost/proyecto/Formulario/ClienteForm.php'>Volver</a>");

//Verificar si existe el valor de cedula

} elseif (empty($NombreCliente) and empty($ApellidoCliente) and empty($CIcliente) and empty($TelCliente)) {
    print("<p>Debes ingresar los datos!</p>");
    print(boton_atras);
}elseif(empty($NombreCliente)) {
    print("<p> Debes ingresar el nombre del Cliente.</p>");
    print(boton_atras);
}elseif(empty($ApellidoCliente)) {
    print("<p> Debes ingresar el apellido del cliente.</p>");
    print(boton_atras);
}elseif(empty($CIcliente)) {
    print("<p> Debes ingresar el CI del cliente.</p>");
    print(boton_atras);  
}elseif(empty($TelCliente)) { 
    print("<p> Debes ingresar el numero contacto del cliente.</P>");
    print(boton_atras);
}
