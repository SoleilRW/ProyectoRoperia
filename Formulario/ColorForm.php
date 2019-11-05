<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Elvi Boutique</title>
    <meta name= "viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" mdeia="screen" href="css/bootstrap.css">
        <style>
    body {
        background: linear-gradient(90deg, #C9FAF8, #F3FFFF);

    }
    H1{
        text-align:center;
        font-family: edwardian script italic;
        color: black;
        font-size: 90px;
        text-shadow: -5px -5px 5px #aaa;
    }
    p{
        color:whitesmoke;
        font-family:cooper black;
        text-shadow: -5px -5px 5px #aaa;
    }
        </style>
<head>

<body>
<?php include_once ('includes/_navbar.php'); ?>

    <?php
            if(isset($_GET["idColor"])) {
                $idColor =  $_GET["idColor"];
                $mysqli = new mysqli('localhost', 'inesgc', 'secreto', 'boutique');
                if ($mysqli->connect_errno) {
                    echo "Lo sentimos, no se puede conectar con la base de datos";
                    exit;
                } else {
                    $sql = "SELECT * FROM color WHERE idColor = $idColor";
                    $result = $mysqli->query($sql);
                    $row = mysqli_fetch_assoc($result);
                //$codigo = $row['codigo'];
                    $NombreColor = $row['NombreColor'];
                
                }
            };
        ?>

    <div class="container">
    <form name="FormColor" action="GuardarColor.php" method="POST">
    <?php
                    if(isset($_GET["idColor"])) {
                        echo '<input type="hidden" class="form-control" name="idColor" value="'.$_GET["idColor"].'">';
                    }
                ?>
    
        <div class="form-group">
            <div class="row">
                <div class="col-4">
                    <label for="NombreColor"><p>Nombre del Color</p></label>
                    <?php
                                if(isset($_GET["idColor"]) and $NombreColor) {
                                    echo '<input type="text" class="form-control" name="NombreColor" value="' .$NombreColor. '">';
                                } else {
                                    echo '<input type="text" class="form-control" name="NombreColor">';
                                }
                            ?>
                </div>
            </div>
        </div>

    <button type="submit" class="btn btn-primary">GUARDAR</button>
    <button type="submit" class="btn btn-danger">CANCELAR</button>
    <button type="button" class="btn btn-success" onclick="window.location.href = './ListadoColor.php'">REGISTROS</button>
        </form>
        </div>
</body>

</html>
