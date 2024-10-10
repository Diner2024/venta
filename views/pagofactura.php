</nav>
    <div class="invoice-container">
        <header class="text-center">
           
            <h1 class="mb-0">Tienda virtual de calzados</h1>
            <p>JR.ARICA NR°987, Huanta, Ayacucho</p>
            
        </header>

        <main>
            <div class="invoice-info">
                <div class="customer-info">
                    <h2>Información del Cliente</h2>
                    <p>Nombre: Diner GARCIA</p>
                    <p>Dirección: JR.GERVACIOS SATILLANA, Huanta</p>
                    <p>Teléfono: 987654321</p>
                </div>
                <div class="invoice-details">
                    <h2>Detalles de la Factura</h2>
                    <p>Número de Factura: 00023</p>
                    <p>Fecha: O7 de julio de 2024</p>
                </div>
            </div>

            <table class="table table-striped table-bordered product-table">
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
                        <td colspan="3" class="total-label">Total:</td>
                        <td class="total-amount">S/ 1,100</td>
                    </tr>
                </tfoot>
            </table>
        </main>

        <footer class="text-center">
            <div class="actions">
                <button class="btn btn-primary download-btn">Descargar</button>

            
                <a href="<?php echo BASE_URL ?>imprimir" class="btn btn-warning return-btn">Imprimir</a>
                <a href="<?php echo BASE_URL ?>inicio" class="btn btn-warning return-btn">Volver a Comprar</a>
            </div>
            <p>¡Gracias por su compra!</p>
            <p>Visite nuestra tienda online: www.calzadoshuanta.com</p>
        </footer>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        const downloadBtn = document.querySelector('.download-btn');
        const printBtn = document.querySelector('.print-btn');

        downloadBtn.addEventListener('click', () => {
            downloadBtn.classList.remove('btn-primary');
            downloadBtn.classList.add('btn-secondary');
            // Lógica para descargar la factura
            console.log('Factura descargada');
        });

        printBtn.addEventListener('click', () => {
            printBtn.classList.remove('btn-success');
            printBtn.classList.add('btn-warning');
            // Lógica para imprimir la factura
            console.log('Factura impresa');
        });
    </script>
</body>

</html>
