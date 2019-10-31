<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elvi Boutique</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" >
    <style>
    h1{
    text-align:center;
    font-family: edwardian script italic;
    color: black;
    font-size: 90px;
    text-shadow: -5px -5px 5px #aaa;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
        
        <!-- Inicio -->
        <li class="nav-item active">
            <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
        </li>

        <!-- Categoria -->
        <li class="nav-item active">
            <a class="nav-link" href="./Formulario/CategoriaForm.php">Categorias</a>
        </li>

        <!-- Marca -->
        <li class="nav-item">
            <a class="nav-link" href="Formulario/MarcaForm.php">Marcas</a>
        </li>

        <!-- Prenda -->
        <li class="nav-item dropdown show">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">Prendas</a>
                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                    <a class="dropdown-item" href="./vestidos.php">Vestidos</a>
                    <a class="dropdown-item" href="./blusas.php">Blusas</a>
                    <a class="dropdown-item" href="./remeras.php">Remeras</a>
                    <a class="dropdown-item" href="./pantalones.php">Pantalones/Shorts</a>
                    <a class="dropdown-item" href="./abrigos.php">Sudaderas/Abrigos</a>
                    <a class="dropdown-item" href="./conjuntos.php">Conjuntos</a>
                    <a class="dropdown-item" href="./accesorios.php">Accesorios</a>

                    <!-- 
                    <a class="dropdown-item" href="./.php"></a>    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Primavera-Verano</a>
                </div> -->
        </li>
 
        <!-- Talle -->
        <li class="nav-item">
            <a class="nav-link" href="Formulario/TalleForm.php">Talles</a>
        </li>

        <!-- Color -->
        <li class="nav-item">
            <a class="nav-link" href="Formulario/ColorForm.php">Colores</a> 
        </li>

                
        <!-- Cliente -->
        <li class="nav-item">
            <a class="nav-link" href="Formulario/ClienteForm.php">Clientes</a> 
        </li>

        <!-- Proveedor -->
        <li class="nav-item">
            <a class="nav-link" href="Formulario/ProveedorForm.php">Proveedores</a> 
        </li>


        </ul>

        <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
    </form> -->
    </div>
    </nav>

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>