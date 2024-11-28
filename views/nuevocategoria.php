
<div class="container mt-5">
<h1 class="text-center mb-4 text-primary">Registrar categorias</h1>

<form action="" class="from-control" id="frmRegistrar">
<div class="mb-3">
        <label for="">Nombre: </label>
        <input type="text" id="nombre" name="nombre" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="">Detalle: </label>
        <input type="text" id="detalle" name="detalle" class="form-control" required>
    </div>
    <button type="button" class="mb-3 btn btn-outline-info" onclick="registrar_categoria();"><i class="bi bi-check-circle"></i>Registrar</button>
    <div class="col text-center">
                <a href="<?php echo BASE_URL ?>paneladministracion" class="btn btn-secondary">VOLVER A LA PAGINA PRINCIPAL</a>
            </div>
</form>
</div>
<script src="<?php echo BASE_URL ?>views/js/functions_categorias.js"></script>