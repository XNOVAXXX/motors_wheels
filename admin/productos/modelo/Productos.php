<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Motors Wheels </title>
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../dist/icons/bootstrap-icons-1.4.0/bootstrap-icons.min.css" type="text/css">
    <link rel="stylesheet" href="../../dist/css/bootstrap-docs.css" type="text/css">
    <link rel="stylesheet" href="../../libs/slick/slick.css" type="text/css">
    <link rel="stylesheet" href="../../dist/css/app.min.css" type="text/css">
</head>

<body>
    <div class="preloader">
        <img src="https://vetra.laborasyon.com/assets/images/logo.svg" alt="logo">
        <div class="preloader-icon"></div>
    </div>
    <div class="menu">
        <div class="menu-header">
            <a href="index.html" class="menu-header-logo">
                <img src="https://vetra.laborasyon.com/assets/images/logo.svg" alt="logo">
            </a>
            <a href="index.html" class="btn btn-sm menu-close-btn">
                <i class="bi bi-x"></i>
            </a>
        </div>
        <div class="menu-body">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                    <div class="avatar me-3">
                        <img src="../../assets/images/user/man_avatar3.jpg" class="rounded-circle" alt="image">
                    </div>
                    <div>
                        <div class="fw-bold">Diego Palacio</div>
                        <small class="text-muted">Administrador</small>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="login.html" class="dropdown-item d-flex align-items-center text-danger" target="_blank">
                        <i class="bi bi-box-arrow-right dropdown-item-icon"></i> Cerrar Sesión
                    </a>
                </div>
            </div>
            <ul>
                <li class="menu-divider">Motors Wheels</li>
                <li>
                    <a class="active" href="index.html">
                        <span class="nav-link-icon">
                            <i class="bi bi-circle-fill"></i>
                        </span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="index.html">
                        <span class="nav-link-icon">
                            <i class="bi bi-bar-chart"></i>
                        </span>
                        <span>Productos</span>
                    </a>
                </li>
                <li>
                    <a href="index.html">
                        <span class="nav-link-icon">
                            <i class="bi bi-arrow-up"></i>
                        </span>
                        <span>Categorías</span>
                    </a>
                </li>
                <li>
                    <a href="index.html">
                        <span class="nav-link-icon">
                            <i class="bi bi-credit-card-2-front"></i>
                        </span>
                        <span>Ordenes</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="layout-wrapper">
        <div class="content ">

            <div class="mb-4">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <i class="bi bi-globe2 small me-2"></i> Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Productos</li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-md-flex gap-4 align-items-center">
                                <div class="d-md-flex gap-4 align-items-center">
                                    <form class="mb-12 mb-md-0">
                                        <div class="row g-12">
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" placeholder="Buscar" required autocomplete="off">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <button data-bs-toggle="modal" data-bs-target="#Registrar" class="btn btn-primary" aria-haspopup="true" aria-expanded="false">Registrar</button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-custom table-lg mb-0" id="products">
                            <thead>
                                <tr>
                                    <th>Foto</th>
                                    <th>Nombre</th>
                                    <th>Categoría</th>
                                    <th>Precio</th>
                                    <th>Stock</th>
                                    <th class="text-end">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <img src="../../assets/images/products/1.jpg" class="rounded" width="40" alt="...">
                                        </a>
                                    </td>
                                    <td>Audifonos Panasonic</td>
                                    <td>
                                        <span class="text-success">Auriculares</span>
                                    </td>
                                    <td>$499,90</td>
                                    <td>
                                        <span class="text-success">En Stock </span> #30
                                    </td>
                                    <td class="text-end">
                                        <div class="d-flex">
                                            <div class="dropdown ms-auto">
                                                <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                                    <i class="bi bi-three-dots"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a data-bs-toggle="modal" data-bs-target="#Editar" class="dropdown-item">Editar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <img src="../../assets/images/products/1.jpg" class="rounded" width="40" alt="...">
                                        </a>
                                    </td>
                                    <td>Audifonos Panasonic</td>
                                    <td>
                                        <span class="text-success">Auriculares</span>
                                    </td>
                                    <td>$499,90</td>
                                    <td>
                                        <span class="text-success">En Stock </span> #30
                                    </td>
                                    <td class="text-end">
                                        <div class="d-flex">
                                            <div class="dropdown ms-auto">
                                                <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                                    <i class="bi bi-three-dots"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="#Editar" class="dropdown-item">Editar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal fade" id="Registrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Registrar Producto</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST">
                                        <div class="mb-3">
                                            <label class="form-label">Nombre: *</label>
                                            <input type="email" class="form-control" placeholder="Nombre producto" required autocomplete="off">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Categoría: *</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Seleccione</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Descripción: *</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Precio: *</label>
                                            <input type="number" class="form-control" placeholder="Precio producto" required autocomplete="off">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Precio Promoción: *</label>
                                            <input type="number" class="form-control" placeholder="Precio promoción" required autocomplete="off">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Stock: *</label>
                                            <input type="number" class="form-control" placeholder="Stock" required autocomplete="off">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Foto: *</label>
                                            <input type="file" class="form-control" placeholder="Foto" required autocomplete="off">
                                        </div>
                                        <div class="d-grid gap-2">
                                            <button type="button" class="btn btn-primary">Registrar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="Editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST">
                                        <div class="mb-3">
                                            <label class="form-label">Nombre: *</label>
                                            <input type="email" class="form-control" placeholder="Nombre producto" required autocomplete="off">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Categoría: *</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Seleccione</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Descripción: *</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Precio: *</label>
                                            <input type="number" class="form-control" placeholder="Precio producto" required autocomplete="off">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Precio Promoción: *</label>
                                            <input type="number" class="form-control" placeholder="Precio promoción" required autocomplete="off">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Stock: *</label>
                                            <input type="number" class="form-control" placeholder="Stock" required autocomplete="off">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Foto: *</label>
                                            <input type="file" class="form-control" placeholder="Foto" required autocomplete="off">
                                        </div>
                                        <div class="d-grid gap-2">
                                            <button type="button" class="btn btn-primary">Editar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../libs/bundle.js"></script>
    <script src="../../libs/charts/apex/apexcharts.min.js"></script>
    <script src="../../libs/slick/slick.min.js"></script>
    <script src="../../dist/js/examples/dashboard.js"></script>
    <script src="../../dist/js/app.min.js"></script>
</body>

</html>