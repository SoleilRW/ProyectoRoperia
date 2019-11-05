<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="./bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="./datatables/datatables.min.css" />
    <script src="./jquery.js"></script>
    <script src="./datatables/datatables.min.js"></script>
</head>

<body>
<?php include_once ('includes/_navbar.php'); ?>
    <table id="listado_subcategoria" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>NombreSubCategoria</th>

                <th></th>
            </tr>
        </thead>
    </table>

    <script>
        function editar_SubCategoria(data) {
            window.location.href = './SubCategoriaForm.php?idSubCategoria=' + data.id;
        }

        function borrar_SubCategoria(data) {
            $.post("SubCategoriaBorrar.php", {
                idSubCategoria: data.id
            },
            function(data) {
                alert(data);
                location.reload();
            });
            }

        $(document).ready(function(){
          var table=  $('#listado_SubCategoria').dataTable({
            "ajax": "http://localhost/proyectos/ProyectoRoperia/SubCategoriaBuscar.php?idSubCategoria=0",
            "responsive": true,
            "columns": [{
                "data": "idSubCategoria",
                "className": "text-center"
            },
            {
                "data": "NombreSubCategoria",
                "className": "text-center"
            },
            {
              "data": null,
              "render": function(data) {
                return "<button type='button' class='btn btn-primary' id=" + data.idSubCategoria + " onclick='editar_SubCategoria(this)'>Editar</button>\
                <button type='button' class='btn btn-danger' id=" + data.idSubCategoria + " onclick='borrar_SubCategoria(this)'>Borrar</button>"
              }  
            }
            ]
        });
        });
    </script>
<div>    <button type="button" class="btn btn-success" onclick="window.location.href = 'SubCategoriaForm.php'">Volver</button>
    </div>
</body>

</html>