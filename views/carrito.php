</nav>
  <div class="container my-5">
    <h1>Carrito de Compras</h1>

    <div class="row">
      <div class="col-md-8">
        <table class="table">
          <thead>
            <tr>
              <th>Producto</th>
              <th>Imagen</th>
              <th>Precio</th>
              <th>Cantidad</th>
              <th>Total</th>
              <th></th>
            </tr>
          </thead>
          <tbody id="cart-items">

          </tbody>
        </table>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Resumen del Pedido</h5>
            <p class="card-text">Subtotal: <span id="cart-subtotal">S/0.00</span></p>
            <p class="card-text">Descuento: <span id="cart-discount">S/0.00</span></p>
            <p class="card-text">Total: <span id="cart-total">S/0.00</span></p>

            <div class="mb-3">
              <label for="account-number" class="form-label">Ingresar número de cuenta:</label>
              <input type="text" class="form-control" id="account-number" onchange="showBankInfo(this.value)">
            </div>

            <div id="bank-info" class="mb-3 d-none">
              <h6>Banco Seleccionado:</h6>
              <img id="bank-logo" src="" alt="Logo Banco" style="max-width: 100px;">
              <p id="bank-name"></p>
            </div>

            <div class="mb-3">
              <h6>Seleccionar Banco:</h6>
              <div class="d-flex justify-content-between align-items-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/d1/Yape_text_app_icon.png" alt="Banco A" class="img-thumbnail" style="cursor: pointer;  width: 50px; height: 50px; margin-right: 50px;" onclick="selectBank('Banco BCP', 'https://seeklogo.com/images/B/bcp-logo-87BA4231DF-seeklogo.com.png')">
                <img src="https://seeklogo.com/images/P/plin-logo-967A4AF583-seeklogo.com.png" alt="Banco B" class="img-thumbnail" style="cursor: pointer;  width: 50px; height: 50px; margin-right: 50px;" onclick="selectBank('Banco INTERBANK', 'https://www.americanexpress.com/content/dam/amex/pe/network/Experiences/nuevo2020/Logo-Interbank.png')">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Visa_Logo.png" alt="Banco C" class="img-thumbnail" style="cursor: pointer; width: 50px; height: 50px; margin-right: 50px;" onclick="selectBank('VISA', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Visa_Logo.png/640px-Visa_Logo.png')">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Mastercard-logo.svg/1200px-Mastercard-logo.svg.png" alt="Banco D" class="img-thumbnail" style="cursor: pointer; width: 50px; height: 50px; margin-right: 50px;" onclick="selectBank('MASTERCARD', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/MasterCard_Logo.svg/2560px-MasterCard_Logo.svg.png')">
              </div>
            </div>
            <a href="<?php echo BASE_URL ?>imprimir" class="btn btn-primary">PROCEDER EL PAGO</a> <br> <br>
            <a href="<?php echo BASE_URL ?>inicio" class="btn btn-secondary">VOLVER A ELEGIR PRODUCTO</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
  <script>

    const cartItems = [
      { name: 'Zapatilla deportiva', price: 150.00, quantity: 1, image: 'https://m.media-amazon.com/images/I/61dUjfZPizL._AC_SX695_.jpg' },
      { name: 'Zapato de vestir', price: 170.00, quantity: 2, image: 'https://m.media-amazon.com/images/I/71gHHJV+6DL._AC_SY695_.jpg' },
      { name: 'Botines adidas', price: 250.00, quantity: 1, image: 'https://m.media-amazon.com/images/I/718eAchlkkS._AC_SX575_.jpg' }
    ];

    function updateCart() {
      const cartItemsElement = document.getElementById('cart-items');
      let subtotal = 0;

      cartItemsElement.innerHTML = '';
      cartItems.forEach((item, index) => {
        const total = item.price * item.quantity;
        subtotal += total;

        const row = document.createElement('tr');
        row.innerHTML = `
          <td>${item.name}</td>
          <td><img src="${item.image}" alt="${item.name}" class="img-fluid" style="max-width: 100px;"></td>
          <td>S/${item.price.toFixed(2)}</td>
          <td>
            <div class="input-group">
              <button class="btn btn-outline-secondary" type="button" onclick="updateQuantity(${index}, -1)">-</button>
              <input type="number" class="form-control" value="${item.quantity}" min="1" onchange="updateQuantity(${index}, this.value - ${item.quantity})">
              <button class="btn btn-outline-secondary" type="button" onclick="updateQuantity(${index}, 1)">+</button>
            </div>
          </td>
          <td>S/${total.toFixed(2)}</td>
          <td><button class="btn btn-danger" onclick="removeFromCart(${index})">Eliminar</button></td>
        `;
        cartItemsElement.appendChild(row);
      });

      document.getElementById('cart-subtotal').textContent = ` S/${subtotal.toFixed(2)}`;
      document.getElementById('cart-discount').textContent = 'S/0.00';
      document.getElementById('cart-total').textContent =  ` S/${subtotal.toFixed(2)}`;
    }

    function updateQuantity(index, change) {
      cartItems[index].quantity += change;
      if (cartItems[index].quantity < 1) {
        cartItems[index].quantity = 1;
      }
      updateCart();
    }

    function removeFromCart(index) {
      cartItems.splice(index, 1);
      updateCart();
    }

    function selectBank(bankName, bankLogoSrc) {
      const bankInfoElement = document.getElementById('bank-info');
      const bankLogoElement = document.getElementById('bank-logo');
      const bankNameElement = document.getElementById('bank-name');

      bankLogoElement.src = bankLogoSrc;
      bankLogoElement.alt = ` Logo ${bankName}`;
      bankNameElement.textContent = bankName;

      bankInfoElement.classList.remove('d-none');
    }

    updateCart();
  </script>