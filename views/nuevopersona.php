<div class="container mt-5">
    <h2 class="mb-4">Registro De Personas</h2>
    <form id="frmRegistrar">
        <div class="mb-3">
            <label for="nro_identidad" class="form-label">Número de Identidad</label>
            <input type="text" class="form-control" id="nro_identidad" name="nro_identidad" maxlength="20" required>
        </div>
        <div class="mb-3">
            <label for="razon_social" class="form-label">Razón Social</label>
            <input type="text" class="form-control" id="razon_social" name="razon_social" maxlength="30" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" maxlength="15" required>
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="correo" name="correo" required>
        </div>
        <div class="mb-3">
            <label for="departamento" class="form-label">Departamento</label>
            <input type="text" class="form-control" id="departamento" name="departamento" required>
        </div>
        <div class="mb-3">
            <label for="provincia" class="form-label">Provincia</label>
            <input type="text" class="form-control" id="provincia" name="provincia" required>
        </div>
        <div class="mb-3">
            <label for="distrito" class="form-label">Distrito</label>
            <input type="text" class="form-control" id="distrito" name="distrito" required>
        </div>
        <div class="mb-3">
            <label for="cos_postal" class="form-label">Código Postal</label>
            <input type="text" class="form-control" id="cos_postal" name="cos_postal" maxlength="10" required>
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" maxlength="100" required>
        </div>
        <div class="mb-3">
            <label for="rol" class="form-label">Rol</label>
            <select id="rol" name="rol" class="form-control" required>
                <option value="">Seleccione</option>
                <option value="administrador">Administrador</option>
                <option value="usuario">Usuario</option>
                <option value="empleado">Empleado</option>
                <option value="empleado">proveedor</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select id="estado" name="estado" class="form-control">
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="fecha_reg" class="form-label">Fecha de Registro</label>
            <input type="date" class="form-control" id="fecha_reg" name="fecha_reg" required>
        </div>
        
        <button type="button" class="btn btn-success col-6 mx-2" onclick="registrarPersona();">Enviar</button>
    </form>
</div>

<script src="<?php BASE_URL; ?>views/js/functions_persona.js"></script>
