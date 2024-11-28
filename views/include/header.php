
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
    margin: 0; 
    padding: 0; 
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
    font-size: 1rem; 
    line-height: 1.5; 
    color: #333; 
    background-color: #f4f4f4; 
} 

.navbar { 
    background-color: #a0a0a0; 
    transition: background-color 0.3s ease; 
}

.navbar-brand img { 
    height: 60px; 
    width: 60px; 
    border-radius: 50%; 
    object-fit: cover; 
    border: 3px solid #ffffff; 
    transition: transform 0.3s ease; 
} 

.navbar-brand img:hover { 
    transform: scale(1.1); 
} 

.navbar-nav .nav-link { 
    color: #ffffff; 
    transition: color 0.3s ease; 
}

.navbar-nav .nav-link:hover, .navbar-nav .nav-link.active { 
    color: #ffd700; 
}

.product img { 
    width: 100%; 
    height: auto; 
    border-radius: 8px; 
    box-shadow: 0 4px 6px rgba(0,0,0,0.1); 
} 

.footer { 
    background-color: #a0a0a0; 
    color: #ecf0f1; 
    padding: 20px 0; 
}

.footer a { 
    color: #3498db; 
    transition: color 0.3s ease; 
}

.footer a:hover { 
    color: #2ecc71; 
}

.btn-primary { 
    background-color: #3498db; 
    border-color: #2980b9; 
    color: #ffffff; 
    transition: all 0.3s ease; 
}

.btn-primary:hover { 
    background-color: #2980b9; 
    transform: translateY(-2px); 
}

.dropdown-menu { 
    background-color: #ffffff; 
    border: 1px solid #e0e0e0; 
    box-shadow: 0 4px 6px rgba(0,0,0,0.1); 
    display: none; 
    position: absolute; 
    top: 100%; 
    left: 0; 
    min-width: 200px; 
    z-index: 1000; 
}

.dropdown-item { 
    color: #333; 
    transition: background-color 0.3s ease; 
}

.dropdown-item:hover { 
    background-color: #f4f4f4; 
    color: #3498db; 
}

/* Show the submenu when hovering over the parent item */
.navbar-nav .nav-item:hover .dropdown-menu { 
    display: block; 
}

/* Make sure the submenu items align correctly */
.navbar-nav .nav-item { 
    position: relative; 
}

/* Responsive Adjustments */
@media (max-width: 768px) { 
    .navbar-brand img { 
        height: 50px; 
        width: 50px; 
    } 
}

/* Ensure links are styled consistently */
a {
    color: #fff;
    text-decoration: none;
    background-color: transparent;
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
        <p class="nav-link" type="button" style="color:black"><a onclick="cerrar_sesion();">cerrar sesion</p>

      
    </ul>
  </div>



  <nav class="navbar navbar-expand">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="<?php echo BASE_URL ?>paneladministracion">
        <button type="submit">PANELADMINISTRACION</button></a>
      </li>


      
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
<a class="m-2" href="<?php BASE_URL?>panelAdministrador"><i class="fa fa-bars" style="color:#ffffff;" ></i></a>

