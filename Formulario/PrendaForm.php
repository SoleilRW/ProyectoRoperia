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
        if(isset($_GET["idPrenda"])) {
            $idPrenda =  $_GET["idPrenda"];
            $mysqli = new mysqli('localhost', 'inesgc', 'secreto', 'boutique');
            if ($mysqli->connect_errno) {
                echo "Lo sentimos, no se puede conectar con la base de datos";
                exit;
            } else {
                $sql = "SELECT * FROM prenda WHERE idPrenda = $idPrenda";
                $result = $mysqli->query($sql);
                $row = mysqli_fetch_assoc($result);
              //$codigo = $row['codigo'];
                $NombrePrenda = $row['NombrePrenda'];
                $CantidadStock = $row['CantidadStock'];
                $PrecioUnitario = $row['PrecioUnitario'];
                $SubCategoria = $row['SubCategoria'];
                $Categoria = $row['Categoria'];
                $Color = $row['Color'];
                $Marca = $row['Marca'];
            }
        };
    ?>

<div class="container">
<form name="formulario" action="guardarprenda.php" method="POST">
<?php
                if(isset($_GET["idPrenda"])) {
                    echo '<input type="hidden" class="form-control" name="idPrenda" value="'.$_GET["idPrenda"].'">';
                }
            ?>
  
  <!--  
  <div class="form-group">
        <div class="row">
            <div class="col-4">
                <label for="codigo"><p>Codigo de la receta</p></label>
                <//?php
                            if(isset($_GET["idPrenda"]) and $codigo) {
                                echo '<input type="number" class="form-control" name="codigo" value="'.$codigo. '">';
                            } else {
                                echo '<input type="number" class="form-control" name="codigo">';
                            }
                        ?>
            </div>
        </div>
    </div>-->

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                <label for="NombrePrenda"><p>Nombre de la Prenda</p></label>
                <?php
                            if(isset($_GET["idPrenda"]) and $titulo) {
                                echo '<input type="text" class="form-control" name="titulo" value="' .$NombrePrenda. '">';
                            } else {
                                echo '<input type="text" class="form-control" name="NombrePrenda">';
                            }
                        ?>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                <label for="CantidadStock"><p>Cantidad Disponible</p></label>
                <?php
                            if(isset($_GET["idPrenda"]) and $CantidadStock) {
                                echo '<input type="number" class="form-control" name="CantidadStock" value="' .$CantidadStock. '">';
                            } else {
                                echo '<input type="number" class="form-control" name="CantidadStock">';
                            }
                        ?>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                <label for="PrecioUnitario"><p>¿Cual es el precio por unidad?</p></label>
                <?php
                            if(isset($_GET["idPrenda"]) and $PrecioUnitario) {
                                echo '<input type="number" class="form-control" name="PrecioUnitario" value="' .$PrecioUnitario. '">';
                            } else {
                                echo '<input type="number" class="form-control" name="PrecioUnitario">';
                            }
                        ?>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                <label for="Categoria"><p>Categoria</p></label>
                <?php
                            if(isset($_GET["idPrenda"]) and $Categoria) {
                                echo '<input type="text" class="form-control" id="Categoria" name="Categoria" value="' .$Categoria. '">';
                            } else {
                                echo '<input type="text" class="form-control" id="Categoria" name="Categoria">';
                            }
                        ?>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
            <P>
            <label for="Categoria"><p>Categoria</p></label>
                <select name= "Categoria">
                <option value="Sin Definir"<?php if (isset($_GET["idPrenda"]) and $cocinero=="Sin Definir"){echo'selected="selected"'.'"';} ?>> Sin Definir </option>
                <option value="Arturo"<?php if (isset($_GET["idPrenda"]) and $cocinero=="Arturo"){echo'selected="selected"'.'"';} ?>> Arturo </option>
                <option value="Elida"<?php if (isset($_GET["idPrenda"]) and $cocinero=="Elida"){echo'selected="selected"'.'"';} ?>> Elida </option>
                <option value="Virgilio"<?php if (isset($_GET["idPrenda"]) and $cocinero=="Virgilio"){echo'selected="selected"'.'"';} ?>> Virgilio </option>
                <option value="Novedades"<?php if (isset($_GET["idPrenda"]) and $cocinero=="Concepcion"){echo'selected="selected"'.'"';} ?>> Concepcion </option>
                </select>
            </P>
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <div class="row">
            <div class="col-4">
            <label for="porciones"><p>Cantidad de porciones resultantes</p></label>
                <?php
                            if(isset($_GET["idPrenda"]) and $porciones) {
                                echo '<input type="number" class="form-control" name="porciones" value="' .$porciones. '">';
                            } else {
                                echo '<input type="number" class="form-control" name="porciones">';
                            }
                        ?>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
            <label for="tiempo"><p>Tiempo de Coccion</p></label>
                <?php
                            if(isset($_GET["idPrenda"]) and $tiempo) {
                                echo '<input type="number" class="form-control" name="tiempo" value="' .$tiempo. '">';
                            } else {
                                echo '<input type="number" class="form-control" name="tiempo">';
                            }
                        ?>
            </div>
        </div>
    </div>

<button type="submit" class="btn btn-primary">GUARDAR</button>
<button type="submit" class="btn btn-danger">CANCELAR</button>
<button type="button" class="btn btn-warning" onclick="window.location.href = './get.php'" >BUSCAR</button>
<button type="button" class="btn btn-success" onclick="window.location.href = './listado.php'">REGISTROS</button>
      </form>
    </div>
</body>

</html>
