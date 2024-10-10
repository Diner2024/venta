<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
      background-color: #fefefe;
      margin: 15% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 30%;
    }
    .container {
      max-width: 800px;
      margin-top: 0px;
    }

    .header {
      background-color: hsl(233, 98%, 50%);
      color: hsla(183, 98%, 49%, 0.95);
      padding: 20px;
      text-align: center;
      box-shadow: 0 2px 4px #03f2f6fb;
    }

    .header h1 {
      font-size: 36px;
      margin: 0;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .header p {
      font-size: 18px;
      margin: 10px 0 0 0;
    }

    .logo {
      width: 150px;
      height: auto;
      border-radius: 50%;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
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

    .form-container {
      background-color: #03ecf9;
      border-radius: 5px;
      box-shadow: 0 0 10px #fdd4d4c0;
      padding: 20px;
    }
  </style>
</head>
<body>
    <div class="container">
        <div class="header">
          <h1>Tienda de Todo tipo de zapatos y zapatillas</h1>
          <p>Huanta, Perú</p>
          <img src="https://i.pinimg.com/564x/15/f3/b1/15f3b1dd58c05f61a2f4f1bbe85e9e33.jpg" alt="Calzados" class="logo">
        </div>

  <div class="container my-5">
    <h1 class="text-center">Enviar Reclamación</h1>
    <form>
      <!-- Agrega aquí los campos del formulario de reclamación -->
      <div class="form-group">
        <label for="name">Nombre:</label>
        <input type="text" class="form-control" id="name" required>
      </div>
      <div class="form-group">
        <label for="email">Correo electrónico:</label>
        <input type="email" class="form-control" id="email" required>
      </div>
      <div class="form-group">
        <label for="message">Mensaje:</label>
        <textarea class="form-control" id="message" rows="3" required></textarea>
      </div>
      <button type="submit" class="btn btn-lg btn-primary" onclick="sendClaim()">Enviar reclamación</button>
    </form>
  </div>

  <div id="myModal" class="modal">
    <div class="modal-content">
      <h2>¡Reclamación enviada correctamente!</h2>
      <p>En breve estaremos en contacto con usted.</p>
      <a class="nav-link" href="<?php echo BASE_URL ?>inicio">
        <button type="submit">volver al inicio</button></a>
    </div>
  </div>

  <script>
    function sendClaim() {
      event.preventDefault(); // Prevenir el envío del formulario

      // Aquí irían las instrucciones para enviar la reclamación
      console.log("Enviando reclamación...");

      // Mostrar el modal después de enviar la reclamación
      document.getElementById("myModal").style.display = "block";
    }
  </script>
</body>
</html>