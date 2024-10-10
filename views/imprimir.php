<!DOCTYPE html>
<html>
<head>
  <title>Boleta de Pago</title>
  <style>
    body {
        font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5eaea;
}
    
    
    h1 {
      text-align: center;
    }
    
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }
    
    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    
    button {
      display: block;
      width: 10%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
    
    #message {
      text-align: center;
      margin-top: 20px;
      font-weight: bold;
      display: none;
    }
    a:-webkit-any-link {
        display: block;
  margin: 20px auto;
  padding: 10px 20px;
  font-size: 16px;
  background-color: hsl(172, 96%, 48%);
  color: white;
  border: none;
  cursor: pointer;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  animation: blink 2s infinite;
  text-decoration: none;
  animation: blink 2s infinite;
}

@keyframes blink {
  0% {
    box-shadow: 0 0 10px #ff0000;
  }
  25% {
    box-shadow: 0 0 10px #00ff00;
  }
  50% {
    box-shadow: 0 0 10px #0000ff;
  }
  75% {
    box-shadow: 0 0 10px #ffff00;
  }
  100% {
    box-shadow: 0 0 10px #ff00ff;
  }
}
  </style>
</head>
<body>
  <h1>Boleta de Pago</h1>
  
  <table>
    <thead>
      <tr>
        <th>Producto</th>
        <th>Cantidad</th>
        <th>Precio Unitario</th>
        <th>Subtotal</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Zapatilla nike</td>
        <td>3</td>
        <td>S/ 50.00</td>
        <td>S/ 150.00</td>
      </tr>
      <tr>
        <td>Zapatillas de vestir</td>
        <td>4</td>
        <td>S/ 100.00</td>
        <td>S/ 400.00</td>
      </tr>
      <tr>
        <td>Zapatilla Adidas</td>
        <td>3</td>
        <td>S/ 50.00</td>
        <td>S/ 150.00</td>
      </tr>
      <tr>
        <td>Zapatos de futbol</td>
        <td>4</td>
        <td>S/ 100.00</td>
        <td>S/ 400.00</td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="3">Total:</td>
        <td>S/ 1,100</td>
      </tr>
    </tfoot>
  </table>
  
  <a href="<?php echo BASE_URL ?>imprimir" class="btn btn-warning return-btn">Imprimir Boleta</a>
  
  <div id="message">La boleta se ha impreso correctamente.</div>
  
  <script>
    document.querySelector('.return-btn').addEventListener('click', function(event) {
      event.preventDefault();
      alert('¡Felicitaciones! El boleto se ha impreso correctamente.');
      window.location.href = '/index.html';
    });
    </script>
</body>
</html>