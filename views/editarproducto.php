<div class="container mt-5">
        <h2 class="mb-4">Editar Producto</h2>
        <p class="text-muted">Complete los detalles del nuevo producto</p>
        <form id="frmactualizar" >
        <input type="hidden" name="id_producto" id="id_producto">
    <input type="hidden" name="img" id="img">
    <div class="form-group">
        <label for="">Codigo:</label>
        <input type="text" class="form-control" id="codigo" name="codigo" readonly disabled>
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
                <label for="idCategoria" class="form-label">Categoría</label>
                <select id="idCategoria" name="idCategoria" class="form-control">
                    <option value="">Seleccione</option>
                </select>
            </div>
         
           <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="imagen" name="imagen" maxlength="20">
            </div>
            <div class="mb-3">
                <label for="idProveedor" class="form-label">Proveedor</label>
                <select id="idProveedor" name="idProveedor" class="form-control">
                    <option value="">Seleccione</option>
                </select>
            </div>
            <button type="button" class="btn btn-success" onclick="actualizarProducto();">Actualizar</button>
        </form>
    </div>
    <script src="<?php echo BASE_URL; ?>views/js/functions_producto.js"></script>
    <script>listar_categoria();</script>
    <script>listar_proveedores();</script>
    <script>
    //http://localhost/venta/editarproducto/1
const id_p=<?php $pagina=explode("/", $_GET['views']); echo $pagina['1']; ?>;ver_producto(id_p); 
    </script>
    



    