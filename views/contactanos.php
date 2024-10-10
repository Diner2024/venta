<div class="container my-5">
    <h2 class="text-center mb-4">CONTACTENOS </h2>
    <form id="contact-form">
      <div class="form-group">
        <label for="name">Nombre:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Escriba su Nombre Completo..." required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Escriba su Correo Electronico..." required>
      </div>
      <div class="form-group">
        <label for="phone">Teléfono</label>
        <input type="tel" class="form-control" id="phone" placeholder="Escribe tu teléfono">
      </div>
      <div class="form-group">
        <label for="website">Sitio web</label>
        <input type="url" class="form-control" id="website" placeholder="Escribe la URL de tu web">
      </div>
      <div class="form-group">
        <label for="message">Mensaje:</label>
        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Escriba su Comentario..." required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
     
    </form>
    
  </div>

  <!-- Modal -->
  <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="successModalLabel">Mensaje enviado exitosamente</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Gracias por elegir nuestra tienda. Nos pondremos en contacto en seguida.</p>
        </div>
        <div class="modal-footer">
          <a href="<?php echo BASE_URL ?>inicio" class="btn btn-primary">Volver al Inicio</a>
        </div>
        
      </div>
    </div>
  </div>

  <!-- Bootstrap JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    const form = document.getElementById('contact-form');
    const successModal = document.getElementById('successModal');

    form.addEventListener('submit', (event) => {
      event.preventDefault();
      // Aquí puedes agregar la lógica para enviar el formulario
      // y mostrar el modal de éxito
      $('#successModal').modal('show');
      form.reset();
    });
  </script>