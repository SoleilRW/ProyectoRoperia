<head>
        <meta charset="utf-8">
        <meta http-equiv="x-UA-Compatible" content="IE=edge">
        <title>prenda</title>
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
            $NombrePrenda = $_POST['NombrePrenda'];
            $CantidadStock = $_POST['CantidadStock'];
            $PrecioUnitario = $_POST['PrecioUnitario'];
            $SubCategoria = $_POST['SubCategoria'];
            $Categoria = $_POST['Categoria'];
            $Color = $_POST['Color'];
            $Marca = $_POST['Marca'];


// Esto es una constante
define("boton_atras","<input type='button' value='Volver Al Formulario' onclick='history.back()'>");
if($NombrePrenda and $CantidadStock and $PrecioUnitario and $SubCategoria and $Categoria and $Color and $Marca){
    $mysqli = new mysqli('localhost','inesgc','secreto','boutique');
    if($mysqli->connect_errno){
        echo"LO SENTIMOS, NO SE PUEDE CONECTAR CON LA BASE DE DATOS";
        exit;
    }else{
        if (isset($_POST["idPrenda"]) && !empty($_POST["idPrenda"])){
            $idPrenda=$_POST["idPrenda"];
        $sql = "UPDATE `prenda` SET  `NombrePrenda` = '$NombrePrenda', `CantidadStock`= '$CantidadStock', `Marca`='$Marca', `PrecioUnitario`='$PrecioUnitario', `Categoria`='$Categoria', `Color`='$Color', `SubCategoria`='$SubCategoria' WHERE `prenda`.`idPrenda`=$idPrenda";
        if (!$resultado = $mysqli->query($sql)){
            echo "Error al guardar los datos\n";
            echo "Errno: " . $mysqli->errno . "\n";
            echo "Errno: " . $mysqli->error . "\n"; 
        }else{
            echo "<z>Actualizado correctamente!</z>"; 
        }
    }else{
        $sql = "INSERT INTO `prenda` (`NombrePrenda`, `CantidadStock`, `PrecioUnitario`, `Categoria`, `Marca`, `Color`, `SubCategoria`)
        VALUES ('$NombrePrenda', '$CantidadStock','$PrecioUnitario','$Categoria',$Marca, $Color, '$SubCategoria');";
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

    print("<a href='http://localhost/proyecto/FormPrendas.php'>Volver</a>");

//Verificar si existe el valor de cedula

} elseif (empty($NombrePrenda) and empty($CantidadStock) and empty($PrecioUnitario) and empty($Categoria) and empty($SubCategoria) and empty($Marca) and empty($Color)) {
    print("<p>No se quien eres!</p>");
    print(boton_atras);
}elseif(empty($NombrePrenda)) {
    print("<p> Debes ingresar el nombre de la prenda.</p>");
    print(boton_atras);
}elseif(empty($CantidadStock)) {
    print("<p> Debes ingresar la Cantidad disponible.</p>");
    print(boton_atras);
}elseif(empty($PrecioUnitario)) {
    print("<p> Debes ingresar el Precio por unidad.</p>");
    print(boton_atras);  
}elseif(empty($Categoria)) { 
    print("<p> Debes ingresar la Categoria.</P>");
    print(boton_atras);
}elseif(empty($SubCategoria)) { 
    print("<p> Debes ingresar la Sub Categoria.</P>");
    print(boton_atras);
}elseif(empty($Marca)) { 
    print("<p> Debes ingresar la Marca.</P>");
    print(boton_atras);
}elseif(empty($Color)) { 
    print("<p> Debes ingresar el Color.</P>");
    print(boton_atras);
}