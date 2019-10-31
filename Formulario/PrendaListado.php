<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="./datatables/datatables.min.css" />
    <script src="./jquery.js"></script>
    <script src="./datatables/datatables.min.js"></script>
</head>

<body>
    <table id="listado_marca" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>

                <th></th>
            </tr>
        </thead>
    </table>

    <script>
        function editar_marca(data) {
            window.location.href = './FormMarca.php?idMarca=' + data.id;
        }

        function borrar_marca(data) {
            $.post("BorrarMarca.php", {
                idMarca: data.id
            },
            function(data) {
                alert(data);
                location.reload();
            });
            }

        $(document).ready(function(){
          var table=  $('#listado_marca').dataTable({
            "ajax": "http://localhost/proyecto/BuscarMarca.php?idMarca=0",
            "responsive": true,
            "columns": [{
                "data": "idMarca",
                "className": "text-center"
            },
            
            {
                "data": "NombreMarca",
                "className": "text-center"
            },
            {
              "data": null,
              "render": function(data) {
                return "<button type='button' class='btn btn-primary' id=" + data.idMarca + " onclick='editar_marca(this)'>Editar</button>\
                <button type='button' class='btn btn-danger' id=" + data.idMarca + " onclick='borrar_marca(this)'>Borrar</button>"
              }  
            }
            ]
        });
        });
    </script>
<div>    <button type="button" class="btn btn-success" onclick="window.location.href = './FormMarca.php'">Volver</button>
    </div>
</body>

</html>