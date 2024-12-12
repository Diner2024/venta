


<style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: #d5d3d4;
        }
        .admin-container {
            min-height: calc(100vh - 140px); /* Adjust for header and footer */
            background-color: #f8f9fa;
            padding: 20px;
        }
        .card-header {
            background-color: #333;
            color: #fff;
            font-weight: bold;
        }
        .dis-pe:hover > .card-header {
            background: #3371ff;
        }
        .icon-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
            margin: 10px 0;
            background-color: #f1f3f5;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .icon-wrapper:hover {
            background-color: #e9ecef;
        }
        .icon-wrapper i {
            margin-right: 10px;
        }
        a {
            text-decoration: none;
            color: #333;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .col-md-4 {
            flex: 0 0 calc(25% - 20px);
            max-width: calc(25% - 20px);
        }
        @media (max-width: 992px) {
            .col-md-4 {
                flex: 0 0 calc(50% - 20px);
                max-width: calc(50% - 20px);
            }
        }
        @media (max-width: 576px) {
            .col-md-4 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
    </style>


<div class="admin-container">
        <h1 class="text-center mt-5">Panel de Administración</h1>
        <div class="container-fluid">
            <div class="row">
                <!-- Usuario Panel -->
                <div class="col-md-4">
                    <div class="card mb-3 dis-pe">
                        <div class="card-header">Usuario</div>
                        <div class="card-body">
                            <a href="<?php BASE_URL;?>nuevopersona">
                                <div class="icon-wrapper">
                                    <i class="fa fa-user-plus"></i> Registrar Usuario
                                </div>
                            </a>
                            <a href="<?php BASE_URL;?>personas">
                                <div class="icon-wrapper">
                                    <i class="fas fa-users"></i> Ver usuarios
                                </div>
                            </a>
                            
                        </div>
                        
                    </div>
                </div>

                <!-- Productos Panel -->
                <div class="col-md-4">
                    <div class="card mb-3 dis-pe">
                        <div class="card-header">Productos</div>
                        <div class="card-body">
                            <a href="<?php BASE_URL;?>nuevo-producto">
                                <div class="icon-wrapper">
                                    <i class="fa fa-plus-circle"></i> Registrar Producto
                                </div>
                            </a>
                            <a href="<?php BASE_URL;?>productos">
                                <div class="icon-wrapper">
                                    <i class="fas fa-boxes"></i> Ver Productos
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Categorias Panel -->
                <div class="col-md-4">
                    <div class="card mb-3 dis-pe">
                        <div class="card-header">Categorias</div>
                        <div class="card-body">
                            <a href="<?php BASE_URL;?>nuevocategoria">
                                <div class="icon-wrapper">
                                    <i class="fa fa-tags"></i> Registrar Categoria
                                </div>
                            </a>
                            <a href="<?php BASE_URL;?>categorias">
                                <div class="icon-wrapper">
                                    <i class="fas fa-list-alt"></i> Ver Categorias
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Compras Panel -->
                <div class="col-md-4">
                    <div class="card mb-3 dis-pe">
                        <div class="card-header">Compras</div>
                        <div class="card-body">
                            <a href="<?php BASE_URL;?>nuevocompra">
                                <div class="icon-wrapper">
                                    <i class="fa fa-shopping-cart"></i> Registrar Compra
                                </div>
                            </a>
                            <a href="<?php BASE_URL;?>compras">
                                <div class="icon-wrapper">
                                    <i class="fas fa-receipt"></i> Ver Compras
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Placeholder for footer -->
    <footer>
        <!-- Your existing footer code -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>