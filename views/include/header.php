<!DOCTYPE html>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TIENDA DE CALZADOS </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
body {
  margin: auto;
  padding: auto;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: rgb(176, 216, 230);
}

    .navbar {
      background-color: hsl(142, 27%, 84%);
    }
    .navbar-brand img {
    height: 70px;
    width: 100%;
      
      object-fit: cover;
      display: inline-block;
      width: 80px;
      height: 80px;
      border-radius: 50%;
      overflow: hidden;
      animation: border-pulse 2s infinite;
    }

    @keyframes border-pulse {
      0% {
        box-shadow: 0 0 10px rgb(9, 33, 247);
      }
      25% {
        box-shadow: 0 0 10px hsl(99, 99%, 47%);
      }
      50% {
        box-shadow: 0 0 10px rgb(211, 239, 3);
      }
      75% {
        box-shadow: 0 0 10px rgb(11, 238, 19);
      }
      100% {
        box-shadow: 0 0 10px rgb(255, 0, 0);
      }
}
    .navbar-nav .nav-link, .navbar-nav .nav-item {
      color: #fff;
    }
    .product img {
      width: 100%;
      height: auto;
    }
    .footer {
      background-color: #000000;
      color: #fff;
      padding: 20px 0;
    }
    .footer a {
      color: #fff;
    }
    /* Estilo para los botones activos */
    .navbar-nav .nav-item .nav-link.active {
      color: rgb(255, 0, 0) !important; /* Color de texto blanco */
      font-weight: bold; /* Texto en negrita */
      background-color: rgb(0, 0, 0) !important; /* Fondo rojo */
    }

    .btn-primary {
    color: #f7ff0b;
    background-color: #1fff06;
    border-color: #00fff2;
    animation: blink 1s infinite;
}






.nav-item.dropdown {
position: relative;
}

.nav-item.dropdown .dropdown-menu {
display: none;
position: absolute;
background-color: #03eeff;
min-width: 160px;
box-shadow: 0px 8px 16px 0px rgb(0, 4, 250);
z-index: 1;
}

.nav-item.dropdown:hover .dropdown-menu {
display: block;
}

.nav-item.dropdown .dropdown-menu .dropdown-item {
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
}

.nav-item.dropdown .dropdown-menu .dropdown-item:hover {
background-color: #ddd;
}

.nav-item.dropdown .dropdown-menu .dropdown-item:hover {
background-color: hsl(114, 93%, 48%);
}

.dropdown-item {
    display: block;
    width: 100%;
    padding: .25rem 1.5rem;
    clear: both;
    font-weight: 400;
    color: hsl(246, 96%, 49%);
    text-align: inherit;
    white-space: nowrap;
    background-color: #06ecf0;
    border: 0;
}
button {
    color: red;
background: #5ea7f5;

    box-shadow: 0 0 5px #03e9f4,
    0 0 25px #03e9f4,
    0 0 50px #03e9f4,
    0 0 100px #03e9f4;
}


  </style>

<script>
  const base_url = '<?php echo BASE_URL; ?>';
</script>

</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="#">
    <img src="https://i.pinimg.com/564x/15/f3/b1/15f3b1dd58c05f61a2f4f1bbe85e9e33.jpg" alt="logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    
      <nav class="navbar justify-content-center">
        <!-- Tus menús aquí -->
      
        <li class="nav-item dropdown"> 
          <a class="nav-link dropdown-toggle" href="<?php echo BASE_URL ?>inicio" role="button" data-bs-toggle="dropdown" aria-expanded="false"> CALZADOS </a> 

          <ul class="dropdown-menu"> <li><a class="dropdown-item" href="<?php echo BASE_URL ?>damas">DAMAS</a>
          </li> 
          <li><a class="dropdown-item" href="<?php echo BASE_URL ?>caballeros">CABALLEROS</a>
          </li> 
          <li><a class="dropdown-item" href="<?php echo BASE_URL ?>niños">NIÑOS</a>
          </li> 
        </ul> 
      
      
          <li class="nav-item">
        <a class="nav-link" href="<?php echo BASE_URL ?>novedades">NOVEDADES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASE_URL ?>nosotros">NOSOTROS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASE_URL ?>cantidad">CANTIDAD DEL PRODUCTO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASE_URL ?>contactanos">CONTACTENOS</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASE_URL ?>ubicacion">UBICACIÓN</a>
      </li>
      
    </ul>
  </div>



  <nav class="navbar navbar-expand">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <button type="submit">INICIAR SESIÓN</button>  
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo BASE_URL ?>inicio">Iniciar Sesión</a>
          <a class="dropdown-item" href="<?php echo BASE_URL ?>perfil">Perfil</a>
          <a class="dropdown-item" href="<?php echo BASE_URL ?>libroreclamaciones">Libro de Reclamaciones</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASE_URL ?>carrito">
        <button type="submit">Carrito</button></a>
      </li>
    </ul>
  </nav>

  
</nav>