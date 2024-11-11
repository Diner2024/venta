<form id="formCategoria" action="">
    <h2>Agregar Categoria</h2>
    <div class="form-group">
        <label for="nombre">Nombre de la Categoria:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" maxlength="20" required>
    </div>

    <div class="form-group">
        <label for="detalle">Detalle:</label>
        <input type="text" class="form-control" id="detalle" name="detalle" maxlength="30" required>
    </div>

    <button id="botonproducto" type="button" class="btn btn-warning" onclick="registrar_categoria()">Agregar Categoria</button>
</form>
<script src="<?php echo BASE_URL ?>views/js/functions_categorias.js"></script>
