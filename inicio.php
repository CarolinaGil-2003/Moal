<?php include('database/db.php') ?>
<?php include('includes/header.php'); ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (empty($email) || empty($password)) {
        echo "
    <div class='alert alert-danger' role='alert'>Debes llenar todos los campos!</div>";
    } else {
        $options = [
            'cost' => 11
        ];
        $query = "SELECT password FROM `Users` WHERE `email` = '$email'";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            echo "
      <h1 class='text-danger text-center'>Ocurrio un error realizando el registro!</h1>";
            exit();
        } else {
            $user = mysqli_fetch_assoc($result);
            if (is_null($user)) {
                $_SESSION['message'] = 'No existe un usuario con ese correo';
                $_SESSION['message_type'] = 'danger';
                header("Location: inicio.php");
                exit();
            } else {
                if (password_verify($password, $user['password'])) {
                    $_SESSION['user_mail'] = $email;
                    $_SESSION['message'] = 'Has iniciado sesión correctamente';
                    $_SESSION['message_type'] = 'success';
                    header("Location: index.php");
                    exit();
                } else {
                    $_SESSION['message'] = 'Contraseña incorrecta';
                    $_SESSION['message_type'] = 'danger';
                    header("Location: inicio.php");
                    exit();
                }
            }
        }
    }
}
?>
<main class="w-100 h-100">
    <div class="container py-2 px-2">
        <?php include('includes/message.php'); ?>
        <div class="row mt-4">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="p-3 mx-auto text-uppercase">
                        <h1 class="display-2 border-bottom">Iniciar Sesión</h1>
                    </div>
                    <div class="card-body">
                        <form action="inicio.php" method="post">
                            <div class="form-group relative mb-4">
                                <input type="email" style="border: 0; border-width: 3;" class="border-bottom form-control fw-bold" name="email" placeholder="Correo Electronico" required minlength="4" />
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" style="border: 0; border-width: 3;" class="border-bottom form-control fw-bold" name="password" placeholder="Contraseña" required minlength="4" />
                            </div>
                            <div class="form-group mb-3 d-grid">
                                <button type="submit" class="btn btn-primary w-50 mx-auto rounded-0 text-uppercase">
                                    Iniciar
                                </button>
                            </div>
                            <div class="mb-3 d-grid text-center">
                                ¿Aún no tienes cuenta?
                                <a href="registro.php" class="btn underline"><u>Registrate</u></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('includes/footer.php'); ?>
<?php
ob_end_flush();
?>