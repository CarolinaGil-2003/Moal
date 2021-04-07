<?php include('database/db.php') ?>
<?php include('includes/header.php'); ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] . " " . $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (empty($name) || empty($email) || empty($password)) {
        echo "
    <div class='alert alert-danger' role='alert'>Debes llenar todos los campos!</div>";
    } else {
        $options = [
            'cost' => 11
        ];
        $password = password_hash($password, PASSWORD_BCRYPT, $options);
        $query = "INSERT INTO `Users` (`name`, `email`, `password`, `createdAt`, `updatedAt`) VALUES ('$name', '$email', '$password', CURRENT_TIME(), CURRENT_TIME())";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            echo "
      <h1 class='text-danger text-center'>Ocurrio un error realizando el registro!</h1>";
            exit();
        } else {
            $_SESSION['message'] = 'Te has registrado correctamente';
            $_SESSION['message_type'] = 'success';
            header("Location: inicio.php");
            exit();
        }
    }
}
?>
<main class="container w-100 h-100">
    <div class="row mt-4 overflow-auto">
        <div class="col-md-10 mx-auto p-1">
            <div class="card">
                <div class="p-3 mx-auto text-uppercase">
                    <h1 class="display-2 border-bottom">Datos Personales</h1>
                </div>
                <div class="card-body">
                    <form action="registro.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group relative mb-3">
                                    <input type="text" style="border: 0; border-width: 3;" class="border-bottom form-control fw-bold" name="name" placeholder="Nombre" required />
                                </div>
                                <div class="form-group relative mb-3">

                                    <input type="text" style="border: 0; border-width: 3;" class="border-bottom form-control fw-bold" name="last_name" placeholder="Apellidos" required />
                                </div>
                                <div class="form-group relative mb-3">
                                    <input type="email" style="border: 0; border-width: 3;" class="border-bottom form-control fw-bold" name="email" placeholder="Correo Electronico" required minlength="4" />
                                </div>
                                <div class="form-group relative mb-3">
                                    <input type="text" style="border: 0; border-width: 3;" class="border-bottom form-control fw-bold" name="country" placeholder="País" required minlength="4" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group relative mb-3">
                                    <input type="text" style="border: 0; border-width: 3;" class="border-bottom form-control fw-bold" name="city" placeholder="Ciudad" required />
                                </div>
                                <div class="form-group relative mb-3">

                                    <input type="text" style="border: 0; border-width: 3;" class="border-bottom form-control fw-bold" name="address" placeholder="Dirección" required />
                                </div>
                                <div class="form-group relative mb-3">

                                    <input type="text" style="border: 0; border-width: 3;" class="border-bottom form-control fw-bold" name="phone" placeholder="Teléfono" required minlength="4" />
                                </div>
                                <div class="form-group relative mb-3">
                                    <input type="password" style="border: 0; border-width: 3;" class="border-bottom form-control fw-bold" name="password" placeholder="Contraseña" required minlength="4" />
                                </div>
                            </div>

                        </div>

                        <div class="form-group mb-3 d-grid">
                            <button type="submit" class="btn btn-primary w-50 mx-auto rounded-0 text-uppercase">
                                Registrarme
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    document.documentElement.classList.remove('vh-100');
    document.documentElement.classList.remove('vw-100');
    document.documentElement.classList.remove('overflow-hidden');
    document.documentElement.style = "overflow-x:hidden;"
</script>
<?php include('includes/footer.php'); ?>
<?php
ob_end_flush();
?>