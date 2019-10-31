<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Elvi Boutique</title>
    <meta name= "viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
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
            color: black;
            font-family:cooper black;
            text-shadow: -5px -5px 5px #aaa;
        }
    </style>
<head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
        
        <!-- Inicio -->
        <li class="nav-item active">
            <a class="nav-link" href="#">Inicio</a>
        </li>

        <!-- Categoria -->
        <li class="nav-item active">
            <a class="nav-link" href="CategoriaForm.php">Categorias</a>
        </li>

        <!-- Marca -->
        <li class="nav-item">
            <a class="nav-link" href="MarcaForm.php">Marcas</a>
        </li>

        <!-- Prenda -->
        <li class="nav-item">
            <a class="nav-link" href="PrendaForm.php">Prendas</a>
        </li>

        <!-- Prenda -->
        <!-- <li class="nav-item dropdown show">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">Prendas</a>
                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                    <a class="dropdown-item" href="./vestidos.php">Vestidos</a>
                    <a class="dropdown-item" href="./blusas.php">Blusas</a>
                    <a class="dropdown-item" href="./remeras.php">Remeras</a>
                    <a class="dropdown-item" href="./pantalones.php">Pantalones/Shorts</a>
                    <a class="dropdown-item" href="./abrigos.php">Sudaderas/Abrigos</a>
                    <a class="dropdown-item" href="./conjuntos.php">Conjuntos</a>
                    <a class="dropdown-item" href="./accesorios.php">Accesorios</a>

                     
                    <a class="dropdown-item" href="./.php"></a>    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Primavera-Verano</a>
                </div>
        </li> -->
 
        <!-- Talle -->
        <li class="nav-item">
            <a class="nav-link" href="TalleForm.php">Talles</a>
        </li>

        <!-- Color -->
        <li class="nav-item">
            <a class="nav-link" href="ColorForm.php">Colores</a> 
        </li>

        <!-- Cliente -->
        <li class="nav-item">
            <a class="nav-link" href="ClienteForm.php">Cliente<span class="sr-only">(current)</span></a> 
        </li>

        <!-- Proveedor -->
        <li class="nav-item">
            <a class="nav-link" href="ProveedorForm.php">Proveedores</a> 
        </li>


        </ul>

        <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
    </form> -->
    </div>
    </nav>

<?php
        if(isset($_GET["idCliente"])) {
            $idCliente =  $_GET["idCliente"];
            $mysqli = new mysqli('localhost', 'inesgc', 'secreto', 'boutique');
            if ($mysqli->connect_errno) {
                echo "Lo sentimos, no se puede conectar con la base de datos";
                exit;
            } else {
                $sql = "SELECT * FROM cliente WHERE idCliente = $idCliente";
                $result = $mysqli->query($sql);
                $row = mysqli_fetch_assoc($result);

              //Inicialización de variables

                $NombreCliente = $row['NombreCliente'];
                $ApellidoCliente = $row['ApellidoCliente'];
                $CIcliente = $row['CIcliente'];
                $TelCliente = $row['TelCliente'];
            }
        };
 ?>

<div class="container">
<form name="ClienteForm" action="ClienteGuardar.php" method="POST">
<?php
                if(isset($_GET["idCliente"])) {
                    echo '<input type="hidden" class="form-control" name="idCliente" value="'.$_GET["idCliente"].'">';
                }
            ?>
  

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                <label for="NombreCliente"><p>Nombre del Cliente:</p></label>
                <?php
                            if(isset($_GET["idCliente"]) and $NombreCliente) {
                                echo '<input type="text" class="form-control" name="NombreCliente" value="' .$NombreCliente. '">';
                            } else {
                                echo '<input type="text" class="form-control" name="NombreCliente">';
                            }
                        ?>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                <label for="ApellidoCliente"><p>Apellido del Cliente:</p></label>
                <?php
                            if(isset($_GET["idCliente"]) and $ApellidoCliente) {
                                echo '<input type="text" class="form-control" name="ApellidoCliente" value="' .$ApellidoCliente. '">';
                            } else {
                                echo '<input type="text" class="form-control" name="ApellidoCliente">';
                            }
                        ?>
            </div>
        </div>
    </div>


    <div class="form-group">
        <div class="row">
            <div class="col-4">
                <label for="CIcliente"><p>Número de cédula:</p></label>
                <?php
                            if(isset($_GET["idCliente"]) and $CIcliente) {
                                echo '<input type="number" class="form-control" name="CIcliente" value="' .$CIcliente. '">';
                            } else {
                                echo '<input type="number" class="form-control" name="CIcliente">';
                            }
                        ?>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                <label for="TelCliente"><p>Número telefónico de contacto:</p></label>
                <?php
                            if(isset($_GET["idCliente"]) and $TelCliente) {
                                echo '<input type="varchar" class="form-control" id="TelCliente" name="TelCliente" value="' .$TelCliente. '">';
                            } else {
                                echo '<input type="varchar" class="form-control" id="TelCliente" name="TelCliente">';
                            }
                        ?>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">GUARDAR</button>
    <button type="reset" class="btn btn-danger">CANCELAR</button>
    <button type="button" class="btn btn-success" onclick="window.location.href = './ClienteListado.php'">REGISTROS</button>
      </form>
    </div>
</body>

</html>
