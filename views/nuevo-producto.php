<div class="container mt-5">
        <h2 class="mb-4">Formulario de Producto</h2>
        <form id="frmRegistrar" >
            <div class="mb-3">
                <label for="codigo" class="form-label">Código</label>
                <input type="text" class="form-control" id="codigo" name="codigo" maxlength="20" required>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" maxlength="30" required>
            </div>
            <div class="mb-3">
                <label for="detalle" class="form-label">Detalle</label>
                <textarea class="form-control" id="detalle" name="detalle" maxlength="100" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" min="0" max="99999" required>
            </div>
            <div class="mb-3">
                <label for="idCategoria" class="form-label">ID Categoría</label>
                <input type="number" class="form-control" id="idCategoria" name="idCategoria" required>
            </div>
         
           <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="text" class="form-control" id="imagen" name="imagen" maxlength="20">
            </div>
            <div class="mb-3">
                <label for="idProveedor" class="form-label">ID Proveedor</label>
                <input type="number" class="form-control" id="idProveedor" name="idProveedor">
            </div>
            <button type="button" class="btn btn-success col-6 mx-2" onclick="registrarProducto();">Enviar</button>
        </form>
    </div>
    <script src="<?php BASE_URL;?>views/js/functions_producto.js">  </script>