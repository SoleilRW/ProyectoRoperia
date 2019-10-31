<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="./datatables/datatables.min.css" />
    <script src="./jquery.js"></script>
    <script src="./datatables/datatables.min.js"></script>
</head>

<body>
    <table id="listado_categoria" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th></th>
            </tr>
        </thead>
    </table>

    <script>
        function editar_categoria(data) {
            window.location.href = './Formulario/CategoriaForm.php?idCategoria=' + data.id;
        }

        function borrar_categoria(data) {
            $.post("CategoriaBorrar.php", {
                idCategoria: data.id
            },
            function(data) {
                alert(data);
                location.reload();
            });
            }

        $(document).ready(function(){
          var table=  $('#listado_categoria').dataTable({
            "ajax": "http://localhost/proyecto/Formulario/CategoriaBuscar.php?idCategoria=0",
            "responsive": true,
            "columns": [{
                "data": "idCategoria",
                "className": "text-center"
            },
            {
                "data": "NombreCategoria",
                "className": "text-center"
            },
            {
              "data": null,
              "render": function(data) {
                return "<button type='button' class='btn btn-primary' id=" + data.idCategoria + " onclick='editar_categoria(this)'>Editar</button>\
                <button type='button' class='btn btn-danger' id=" + data.idCategoria + " onclick='borrar_categoria(this)'>Borrar</button>"
              }  
            }
            ]
        });
        });
    </script>
<div>    <button type="button" class="btn btn-success" onclick="window.location.href = './Formulario/CategoriaForm.php'">Volver</button>
    </div>
</body>

</html>