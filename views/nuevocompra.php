<form id="formCompra" action="">
    <h2>Agregar Compra</h2>

    <div class="form-group">

        <label for="producto">Producto:</label>
        <select class="form-control" id="producto" name="producto" required>
            <option value="">Selecciona un producto</option>
        </select>
    </div>

    <div class="form-group">
        <label for="cantidad">Cantidad:</label>
        <input type="number" class="form-control" id="cantidad" name="cantidad" min="1" required>
    </div>

    <div class="form-group">
        <label for="precio">Precio Unitario:</label>
        <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
    </div>

    <div class="form-group">
        <label for="trabajador">Trabajador que registra la compra:</label>
        <select class="form-control" id="trabajador" name="trabajador" required>
            <option value="">Selecciona un trabajador</option>
        </select>
    </div>

    <button type="button" class="btn btn-warning" onclick="registrarcompra();">Agregar Compra</button>
</form>

<script src="<?php echo BASE_URL;?>views/js/functions_compras.js"></script>

<script>listar_productos();</script>
<script>listar_trabajador();</script>
