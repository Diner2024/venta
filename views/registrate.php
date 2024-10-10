<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
  <style>
.container.my-5 {
  margin-top: 3rem !important;
  margin-bottom: 3rem !important;
}

.card.bg-dark {
  background-color: hsl(131, 100%, 51%) !important;
  border-color: hsl(184, 87%, 82%) !important;
}

.card-header h3 {
  color: #1404f7;
  animation: float 3s ease-in-out infinite;
}

.card-header {
    padding: .5rem 1rem;
    margin-bottom: 0;
    background-color: #03e7f7;
    border-bottom: 1px solid rgba(0, 0, 0, .125);
}

/* Animación flotante */
@keyframes float {
  0% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px);
  }
  100% {
    transform: translateY(0);
  }
}

/* Animación parpadeante */
/* .card-header h3 {
  color: #fff;
  animation: blink 1s infinite;
}

@keyframes blink {
  0% {
    opacity: 1;
  }
  50% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
} */

.form-label {
  color: #0808fe;
}

.form-control {
  background-color: rgb(187, 185, 208) !important;
  border-color: #666 !important;
  color: hsl(7, 96%, 50%) !important;
}

.btn-primary {
  background-color: #fff700 !important;
  border-color: #007bff !important;
  padding: 0.5rem 1.5rem;
  color: red;
}

.btn-primary:hover {
  background-color: #0056b3 !important;
  border-color: #0056b3 !important;
}

.img-fluid {
  border-radius: 50%;
  animation: pulse 2s infinite;
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
  </style>
</head>
<body>
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card bg-dark">
          <div class="card-header text-center">
            <h3>Suscribete y se parte de  nuestra tienda de calzados</h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <form id="subscription-form" action="login.html">
                  <div class="mb-3">
                    <label for="nombre" class="form-label">Introduce tu nombre</label>
                    <input type="text" class="form-control" id="nombre" required>
                  </div>
                  <div class="mb-3">
                    <label for="apellido" class="form-label">Introduce tu apellido</label>
                    <input type="text" class="form-control" id="apellido" required>
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Introduce tu correo electrónico</label>
                    <input type="email" class="form-control" id="email" required>
                  </div>
                  <div class="mb-3">
                    <label for="contrasena" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="contrasena" required>
                  </div>
                  <div class="mb-3">
                    <label for="celular" class="form-label">Introduce tu celular</label>
                    <input type="tel" class="form-control" id="celular" required>
                  </div>
                  <div class="mb-3">
                    <label for="fecha-nacimiento" class="form-label">Fecha de cumpleaños</label>
                    <input type="date" class="form-control" id="fecha-nacimiento" required>
                  </div>
                  <div class="mb-3">
                    <label for="genero" class="form-label">Género</label>
                    <select class="form-select" id="genero" required>
                      <option value="">Selecciona una opción</option>
                      <option value="masculino">Masculino</option>
                      <option value="femenino">Femenino</option>
                      <option value="otro">Otro</option>
                    </select>
                  </div>
                  <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="politicas-privacidad" required>
                    <label class="form-check-label" for="politicas-privacidad">
                      He leído y acepto las Políticas de Privacidad.
                    </label>
                  </div>
                  <div class="text-center">
                    
                    <button type="submit" class="btn btn-primary" id="subscribe-btn">SUSCRÍBETE</button>
                  </div>
                </form>
              </div>
              <div class="col-md-6 d-flex justify-content-center align-items-center">
                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/7917bf0f0ad94f6eb28a98f95fb03198_9366/Zapatillas_Own_the_Game_3_Blanco_IH5848_01_standard.jpg" class="img-fluid" alt="Goku">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
  <script>
    // Script para redireccionar al usuario al presionar SUSCRÍBETE
    document.getElementById('subscription-form').addEventListener('submit', function(event) {
      // Evita el envío del formulario por defecto
      event.preventDefault();
      
      // Redirecciona a index.html
      window.location.href = 'login.html';
    });
  </script>