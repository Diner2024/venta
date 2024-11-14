<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>

</head>
<body>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5eaea;
}

.container {
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.login-box {
  position: relative;
}

.imagen-pequena {
  float: right;
  width: 100px; /* Ajusta el tamaño de la imagen según tus necesidades */
  height: 100px;
  border-radius: 50%; /* Esto crea un círculo */
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

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: hwb(244 5% 0%);
    text-shadow: 0 0 5px #03f43f,
    0 0 25px #03f43f,
    0 0 50px #03f43f,
    0 0 100px #03f43f;

}

.input-group {
    margin-bottom: 15px;
    color: rgb(248, 240, 240);
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    padding: 5px 10px;
    border-radius: 5px;
    background-image: linear-gradient(to right, #200cfa, rgb(222, 246, 6), #fdc316, #00FF00, #37ff00, #00fffb);
    background-size: 200% 200%;
    animation: colorChange 10s ease infinite;
    color: #0adaf6;
    font-size: 18px;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
}
@keyframes colorChange {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

input[type="text"],

input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.forgot-password {
    text-align: right;
    margin-bottom: 15px;
    color: hwb(0 2% 2%);
}

button[type="submit"] {
    background-color: hwb(197 0% 0%);
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;display: flex;
    justify-content: center;

    
}

button[type="submit"]:hover {
    background-color: hwb(211 0% 30%);
    text-align: center;

    box-shadow: 0 0 5px #03e9f4,
    0 0 25px #03e9f4,
    0 0 50px #03e9f4,
    0 0 100px #03e9f4;
}

.no-cuenta {
    color: #fff; /* Color blanco para el texto */
    text-decoration: none;
    text-align: center;
    background-image: linear-gradient(to right, #ff0000, #ffa500, #ffff00, #00ff00, #00ffff, #0000ff, #ff00ff);
    background-size: 200% 200%;
    animation: colorChangeText 10s ease infinite;
    -webkit-background-clip: text; /* Para que funcione en navegadores Safari */
    -webkit-text-fill-color: transparent; /* Para que funcione en navegadores Safari */
}

@keyframes colorChangeText {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}



.no-cuenta a {
    color: rgb(0, 123, 255);
    text-decoration: none;
    text-align: center;
}
.imagen-pequena{
    width: 40%;
  height: 90px;
  text-align: center;
  margin: 90px;
  margin-top:-50px;

}


form {
    border: 5px solid #0dff00; /* Borde rojo */
    border-radius: 10px; /* Bordes redondeados */
    padding: 20px; /* Espacio interno */
    background-color: #000000; /* Fondo negro */
    color: #00ff00; /* Texto verde */
    box-shadow: 0 0 5px #03e9f4,
    0 0 25px #03e9f4,
    0 0 50px #03e9f4,
    0 0 100px #03e9f4;
  }



  .alert {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: hsl(0, 94%, 51%);
    color: #f80808;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(252, 10, 10, 0.5);
    z-index: 999;
    text-align: center;
    font-size: 18px;
    font-weight: bold;
  }
  /*.....*/
  .dropdown {
            position: relative;
            display: inline-block;
            
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 5;
        }

        .dropdown-content a {
            color: black;
            padding: 15px 15px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
 

    </style>
    <script> const base_url = '<?php echo BASE_URL; ?>';</script>
    <div class="dropdown">
                <button class="dropbtn">Menu</button>
                <div class="dropdown-content">
                    <a href="<?php echo BASE_URL ?>Categorías">Categorías</a>
                    <a href="<?php echo BASE_URL ?>compras">Compras</a>
                    <a href="<?php echo BASE_URL ?>persona">Persona</a>
                    <a href="<?php echo BASE_URL ?>Producto">Producto</a>
                    <a href="<?php echo BASE_URL ?>Proveedor">Proveedor</a>
                    <a href="<?php echo BASE_URL ?>Trabajador">Trabajador</a>
                </div>
            </div>
    <div class="container">
        <div class="login-box">
            <img src="https://i.pinimg.com/564x/15/f3/b1/15f3b1dd58c05f61a2f4f1bbe85e9e33.jpg" alt="Descripción de la imagen" class="imagen-pequena">  
    
            <h2>BIENVENIDOS DE VUELTA</h2>
            <form id="loginForm" method="POST" action="<?php echo BASE_URL ?>inicio">
                      <div class="input-group">
                        <label for="usuario" class="form-label">usuario</label> 
                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingresa tu Usuario" required>
                    </div>
                <div class="input-group">
                    <label for="contrasena">CONTRASEÑA:</label>
                    <input type="password" id="password" name="password" required>
                </div>  
                
                <button type="submit">INICIAR SESIÓN</button><br>
                <a href="contraseña.html" class="forgot-password">¿Olvidaste tu contraseña?</a>
                <p class="no-cuenta">¿TODAVÍA NO TIENES UNA CUENTA? <a href="<?php echo BASE_URL ?>registrate">REGISTRARSE</a></p>
            </form>

            <script src="<?php BASE_URL;?>views/js/funtions_login.js">  </script>
</body>
</html>


