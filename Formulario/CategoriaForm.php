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
    color:black;
    font-family:cooper black;
    text-shadow: -5px -5px 5px #aaa;
}
    </style>
<head>

<body>

<?php include_once ('includes/_navbar.php'); ?>

<?php
        if(isset($_GET["idCategoria"])) {
            $idCategoria =  $_GET["idCategoria"];
            $mysqli = new mysqli('localhost', 'inesgc', 'secreto', 'boutique');
            if ($mysqli->connect_errno) {
                echo "Lo sentimos, no se puede conectar con la base de datos";
                exit;
            } else {
                $sql = "SELECT * FROM categoria WHERE idCategoria = $idCategoria";
                $result = $mysqli->query($sql);
                $row = mysqli_fetch_assoc($result);

                $NombreCategoria = $row['NombreCategoria'];

            }
        };
    ?>

<div class="container">
<form name="CategoriaForm" action="CategoriaGuardar.php" method="POST">
<?php
                if(isset($_GET["idCategoria"])) {
                    echo '<input type="hidden" class="form-control" name="idCategoria" value="'.$_GET["idCategoria"].'">';
                }
            ?>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                <label for="NombreCategoria"><p>Nombre de la Categoria</p></label>
                <?php
                            if(isset($_GET["idCategoria"]) and $NombreCategoria) {
                                echo '<input type="text" class="form-control" name="NombreCategoria" value="' .$NombreCategoria. '">';
                            } else {
                                echo '<input type="text" class="form-control" name="NombreCategoria">';
                            }
                        ?>
            </div>
        </div>
    </div>


<button type="submit" class="btn btn-primary">GUARDAR</button>
<button type="submit" class="btn btn-danger">CANCELAR</button>
<button type="button" class="btn btn-success" onclick="window.location.href = './CategoriaListado.php'">REGISTROS</button>
      </form>
    </div>
</body>

</html>
