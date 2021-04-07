<?php include('database/db.php') ?>
<?php include('includes/header.php'); ?>
<?php
if (!AdminCheck()) {
    $_SESSION['message'] = 'VENTANA SOLO PARA LA ADMINISTRACIÓN';
    $_SESSION['message_type'] = 'danger';
    header("Location: index.php");
    exit();
}
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_type = $_POST['product_type'];
    $size = $_POST['size'];
    $category_name = $_POST['category_name'];
    $photo_url = $_POST['photo_url'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = intval($_POST['price']);
    if (
        empty($product_type) ||
        empty($size) ||
        empty($category_name) ||
        empty($photo_url) ||
        empty($name) ||
        empty($description) ||
        empty($price)
    ) { ?>
        <div class='alert alert-danger' role='alert'>Debes llenar todos los campos!</div>
        <?php
    } else {
        $query = "INSERT INTO `Products` (`product_type`, `size`, `category_name`, `photo_url`, `name`,`description`, `price`, `createdAt`, `updatedAt`) VALUES ('$product_type', '$size', '$category_name','$photo_url', '$name', '$description', $price, CURRENT_TIME(), CURRENT_TIME())";
        $result = mysqli_query($conn, $query);
        if (!$result) { ?>
            <h1 class='text-danger text-center'>Ocurrio un error realizando la creación del producto!</h1>
<?php
            exit();
        } else {
            $_SESSION['message'] = 'Producto creado exitosamente!';
            $_SESSION['message_type'] = 'success';
            header("Location: producto.php?id=" . mysqli_insert_id($conn));
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
                    <h1 class="display-2 border-bottom">Creacion de Producto</h1>
                </div>
                <div class="card-body">
                    <form action="producto-create.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group relative mb-3">
                                    <select type="text" style="border: 0; border-width: 3;" class="border-bottom form-control fw-bold" name="product_type" placeholder="Tipo de Producto" required>
                                        <option selected value="formen">Para hombres</option>
                                        <option value="forwomen">Para mujeres</option>
                                    </select>
                                </div>
                                <div class="form-group relative mb-3">

                                    <select type="text" style="border: 0; border-width: 3;" class="border-bottom form-control fw-bold" name="size" placeholder="Talla" required>
                                        <option selected value="s">Talla: S</option>
                                        <option value="m">Talla: M</option>
                                        <option value="l">Talla: L</option>
                                        <option value="xl">Talla: XL</option>
                                    </select>
                                </div>
                                <div class="form-group relative mb-3">
                                    <input type="text" style="border: 0; border-width: 3;" class="border-bottom form-control fw-bold" name="category_name" placeholder="Nombre de la categoria" required minlength="4" />
                                </div>
                                <div class="form-group relative mb-3">
                                    <input type="text" style="border: 0; border-width: 3;" class="border-bottom form-control fw-bold" name="photo_url" placeholder="Link de imagen" required minlength="4" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group relative mb-3">
                                    <input type="text" style="border: 0; border-width: 3;" class="border-bottom form-control fw-bold" name="name" placeholder="Nombre" required />
                                </div>
                                <div class="form-group mb-3">
                                    <div class="form-floating">
                                        <textarea style="border: 0; border-width: 3; height: 5.6rem;" class="border-bottom form-control fw-bold" placeholder="Descripción del producto" id="descripcionTextArea" name="description" style="height: 5.6rem" maxlength="4096"></textarea>
                                        <label for="descripcionTextArea">Descripción del producto</label>
                                    </div>
                                </div>
                                <div class="form-group relative mb-3">
                                    <input type="number" style="border: 0; border-width: 3;" class="border-bottom form-control fw-bold" name="price" placeholder="Precio" required minlength="4" />
                                </div>
                            </div>

                        </div>

                        <div class="form-group mb-3 d-grid">
                            <button type="submit" class="btn btn-primary w-50 mx-auto rounded-0 text-uppercase">
                                Crear Producto
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