<!-- Footer -->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h5>Boletín</h5>
        <p>Introduzca su dirección de correo electrónico</p>
        <form>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Ingresa tu correo...">
          </div>
          <a href="<?php echo BASE_URL ?>contactanos" class="btn btn-primary">ENVIAR</a>
        </form>
      </div>
      <div class="col-md-6">
        <h5>Configuración de la tienda</h5>
        <p>Calzados  S.A.C.,  JR. Arica, 976 Huanta, PERU</p>
        <p>Llámamos ahora: 955788707</p>
        <p>www.calzadoshuanta.com</p>
      </div>
    </div>
    <div class="row">
      <div class="col text-center">
        <a href="https://www.facebook.com/">
          <img src="https://static.vecteezy.com/system/resources/previews/016/716/447/non_2x/facebook-icon-free-png.png" alt="Facebook" class="img-fluid" style="max-width: 50px;">
        </a>
        <a href="https://www.instagram.com/">
          <img src="https://static.vecteezy.com/system/resources/previews/018/930/691/original/instagram-logo-instagram-icon-transparent-free-png.png" alt="Instagram" class="img-fluid" style="max-width: 50px;">
        </a>
        <a href="https://x.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJteCI6IjIifQ%3D%3D%22%7D">
          <img src="https://png.pngtree.com/png-clipart/20190516/original/pngtree-twitter-logo-icon-png-image_3570310.png" alt="Twitter" class="img-fluid" style="max-width: 50px;">
        </a>
        <a href="https://www.youtube.com/">
          <img src="https://pngfre.com/wp-content/uploads/You-Tube-14.png" alt="YouTube" class="img-fluid" style="max-width: 50px;">
        </a>
        <a href="https://www.google.co.uk/">
          <img src="https://www.keyweo.com/wp-content/uploads/2022/03/el-logo-g-de-google.png" alt="Google" class="img-fluid" style="max-width: 50px;">
        </a>
      </div>
    </div>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<!-- Script personalizado para activar el cambio de estilo al hacer clic -->
<script>
  // JavaScript para activar el cambio de estilo al hacer clic
  const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
  
  navLinks.forEach(link => {
    link.addEventListener('click', function() {
      navLinks.forEach(link => link.classList.remove('active'));
      this.classList.add('active');
    });
  });
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script
     src="https://code.jquery.com/jquery-3.7.1.js"
     integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
     crossorigin="anonymous"></script>

</body>
</html>
