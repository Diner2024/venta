
<STyle>
  a {
    color: #007bff;
    text-decoration: none;
    background-color: transparent;
}
</STyle>
<div class="col-12 container mt-4">
<table class="table table-bordered table-striped table-hover table-sm shadow-lg rounded" id="tbl_productos">
<thead>
          <tr>
            <th>Nro</th>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Stock</th>
            <th>Categoria</th>
            <th>Proveedor</th>
            <th>Acciones</th>
          </tr> 
        </thead>
        <tbody id="tbl_productos" class="text-center">
        </tbody>
    </table>
</div> 
<script>listarproductos();</script>
<script src="<?php BASE_URL;?>views/js/functions_producto.js"> </script>
<script>eliminar_producto();</script>