<?php session_start(); ?>
<?php include('includes/header.php'); ?>
<main class="w-100 h-100" style="overflow-x: hidden;overflow-y:auto ;background-image: url(https://res.cloudinary.com/kurtcovayne4/image/upload/v1616818184/pestana4/is_lxl3fm.webp); background-size: cover">
    <div class="container py-5 p-0">
        <?php include('includes/message.php'); ?>
        <div class="row">
            <div class="col-lg-5 col-md-6 col-10 offset-md-6 offset-1 p-0">
                <div class="card text-white p-2 text-uppercase fs-6" style="background-color: rgba(87,104,93,.8);">
                    <?php
                    if (isset($_SESSION['user_mail'])) {
                    ?>
                        <div class="card-header mx-auto mb-5 text-uppercase">
                            <h3>Bienvenido</h3>
                        </div>
                        <a href="productos.php" class="text-white mx-auto text-decoration-none">
                            <h6>Ver Productos</h6>
                        </a>
                    <?php
                    } else {
                    ?>
                        <div class="card-header mx-auto text-uppercase">
                            <h3>Iniciar Sesión</h3>
                        </div>
                        <div class="card-body fw-bold">
                            <form action="inicio.php" method="post">
                                <div class="form-group mb-4">
                                    <label for="emailInput" class="form-label mb-3">USUARIO</label>
                                    <input type="text" id="emailInput" class="form-control" name="email" placeholder="CORREO ELECTRONICO" required minlength="4" />
                                </div>
                                <div class="form-group mb-4">
                                    <label for="passInput" class="form-label mb-3">CONTRASEÑA</label>
                                    <input type="password" id="passInput" class="form-control" name="password" placeholder="CONTRASEÑA" required minlength="4" />
                                </div>
                                <div class="form-group mb-4 d-grid">
                                    <button type="submit" class="btn btn-lg btn-dark">
                                        Ingresar
                                    </button>
                                </div>
                                <div class="mb-3 d-grid text-center">
                                    <a href="registro.php" class="text-white text-decoration-none">
                                        <h4>Registrarme</h4>
                                    </a>
                                </div>
                            </form>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>

</main>
<?php include('includes/footer.php'); ?>
<?php
ob_end_flush();
?>