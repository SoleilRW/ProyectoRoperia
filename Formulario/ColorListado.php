<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="./datatables/datatables.min.css" />
    <script src="./jquery.js"></script>
    <script src="./datatables/datatables.min.js"></script>
</head>

<body>
    <table id="listado_color" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>

                <th></th>
            </tr>
        </thead>
    </table>

    <script>
        function editar_color(data) {
            window.location.href = './FormColor.php?idColor=' + data.id;
        }

        function borrar_color(data) {
            $.post("BorrarColor.php", {
                idcolor: data.id
            },
            function(data) {
                alert(data);
                location.reload();
            });
            }

        $(document).ready(function(){
          var table=  $('#listado_color').dataTable({
            "ajax": "http://localhost/proyecto/BuscarColor.php?idColor=0",
            "responsive": true,
            "columns": [{
                "data": "idColor",
                "className": "text-center"
            },
            
            {
                "data": "NombreColor",
                "className": "text-center"
            },
            {
              "data": null,
              "render": function(data) {
                return "<button type='button' class='btn btn-primary' id=" + data.idColor + " onclick='editar_color(this)'>Editar</button>\
                <button type='button' class='btn btn-danger' id=" + data.idColor + " onclick='borrar_color(this)'>Borrar</button>"
              }  
            }
            ]
        });
        });
    </script>
    
    <div>    
        <button type="button" class="btn btn-success" onclick="window.location.href = './FormColor.php'">Volver</button>
    </div>
</body>

</html>