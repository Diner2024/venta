<div class="col-12 container mt-4">
<table class ="table table-bordered table-striped table-hover table-sm shadow-lg rounded" id="tbl_productos">
        <thead class="table-dark text-center">
            <tr>
                <th>Nro</th>
                <th>DNI</th>
                <th>Razon social</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Departamento</th>
                <th>Codigo postal</th>
                <th>Direccion</th>
                <th>Rol</th>
                <th >Acciones</th>
            </tr>
        </thead>
        <tbody id="tbl_persona" class="text-center">

        </tbody>
    </table>
</div>
<script src="<?php echo BASE_URL?>views/js/functions_persona.js"></script>
<script>
    listar_personas();
</script>
