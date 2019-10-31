<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" type="text/css" href="../datatables/datatables.min.css" />
        <script src="../jquery.js"></script>
        <script src="../datatables/datatables.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
    </head>

    <body>
        <table id="listado_cliente" class="display" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>CI</th>
                    <th>Contacto</th>
                    <th></th>
                </tr>
            </thead>
        </table>

        <script>
            function editar_cliente(data) {
                window.location.href = 'ClienteForm.php?idCliente=' + data.id;
            }

            function borrar_cliente(data) {
                $.post("ClienteBorrar.php", {
                    idCliente: data.id
                },
                function(data) {
                    alert(data);
                    location.reload();
                });
                }

            $(document).ready(function(){
            var table=  $('#listado_cliente').dataTable({
                "ajax": "http://localhost/proyecto/Formulario/ClienteBuscar.php?idCliente=0",
                "responsive": true,
                "columns": [{
                    "data": "idCliente",
                    "className": "text-center"
                },
                {
                    "data": "NombreCliente",
                    "className": "text-center"
                },
                {
                    "data": "ApellidoCliente",
                    "className": "text-center"
                },
                {
                    "data": "CIcliente",
                    "className": "text-center"
                },
                {
                    "data": "TelCliente",
                    "className": "text-center"
                },
                {
                "data": null,
                "render": function(data) {
                    return "<button type='button' class='btn btn-primary' id=" + data.idCliente + " onclick='editar_cliente(this)'>Editar</button>\
                    <button type='button' class='btn btn-danger' id=" + data.idCliente + " onclick='borrar_cliente(this)'>Borrar</button>"
                }  
                }
                ]
            });
            });
        </script>
        <div>    
            <button type="button" class="btn btn-success" onclick="window.location.href ='ClienteForm.php'">Volver</button>
        </div>
    </body>

</html>

