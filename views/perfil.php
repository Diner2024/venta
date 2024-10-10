<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>

    <style>
        body {
  background-color: #f0f0f0;
}

.container.d-flex.justify-content-center.align-items-center.vh-100 {
  background-color: #ffffff;
  border-radius: 10px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.card.w-50 {
  border: none;
}

.card-header {
  background-color: #007bff;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}

.card-header .img-fluid {
  border-radius: 50%;
  animation: pulse 2s infinite;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #091de3;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, .125);
    border-radius: .25rem;
}

@keyframes pulse {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.1);
  }
  100% {
    transform: scale(1);
  }
}

.card-body {
  padding: 2rem;
}

.form-label {
  color: #333;
  font-weight: bold;
}

.form-control {
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #a6a3a3;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}

.btn-primary {
  background-color: #007bff;
  border-color: #007bff;
  color: #fff;
  padding: 0.5rem 1.5rem;
}

.btn-primary:hover {
  background-color: #0056b3;
  border-color: #0056b3;
}

.btn-secondary {
  background-color: #6c757d;
  border-color: #6c757d;
  color: #fff;
  padding: 0.5rem 1.5rem;
}

.btn-secondary:hover {
  background-color: #495057;
  border-color: #495057;
}
.form-label {
    color: #09ea12;
    font-weight: bold;
}

    </style>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card w-50">
            <div class="card-header text-center">
                <img src="https://i.pinimg.com/564x/15/f3/b1/15f3b1dd58c05f61a2f4f1bbe85e9e33.jpg" alt="ZAPATILLAS" class="img-fluid" style="max-height: 200px;">
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombres:</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Ingresa tus nombres">
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellidos:</label>
                        <input type="text" class="form-control" id="apellido" placeholder="Ingresa tus apellidos">
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo:</label>
                        <input type="email" class="form-control" id="correo" placeholder="Ingresa tu correo electrónico">
                    </div>
                    <div class="mb-3">
                        <label for="contrasena" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control" id="contrasena" placeholder="Ingresa tu contraseña">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono:</label>
                        <input type="tel" class="form-control" id="telefono" placeholder="Ingresa tu número de teléfono">
                    </div>
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Nombre de usuario:</label>
                        <input type="text" class="form-control" id="usuario" placeholder="Ingresa tu nombre de usuario">
                    </div>
                    <div class="mb-3">
                        <label for="contactos" class="form-label">Contactos:</label>
                        <input type="text" class="form-control" id="contactos" placeholder="Ingresa tus contactos">
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="<?php echo BASE_URL ?>index" class="btn btn-primary">Aceptar</a>
                        <a href="<?php echo BASE_URL ?>index" class="btn btn-secondary">Volver al inicio</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>