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
$id = $_GET['id'];
if (is_numeric($id) && strlen($id)) {
    $query = "SELECT * FROM `Products` WHERE `id`='$id'";
    $result = mysqli_query($conn, $query);
    $product = mysqli_fetch_assoc($result);
    if (is_null($product)) {
        header("Location: index.php");
        exit();
    } else {
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
                $query = "UPDATE `Products` SET `product_type`='$product_type', `size`='$size', `category_name`='$category_name',`photo_url`='$photo_url',`name`='$name',`description`='$description',`price`=$price, `updatedAt`=CURRENT_TIME() WHERE `id`=$id";
                $result = mysqli_query($conn, $query);
                if (!$result) { ?>

                    <h1 class='text-danger text-center'>Ocurrio un error actualizando el producto!</h1>
            <?php
                    exit();
                } else {
                    $_SESSION['message'] = 'Producto actualizado exitosamente!';
                    $_SESSION['message_type'] = 'success';
                    header("Location: producto.php?id=" . $id);
                    exit();
                }
            }
        } else { ?>
            <main class="container w-100 h-100">
                <div class="row mt-4 overflow-auto">
                    <div class="col-md-10 mx-auto p-1">
                        <div class="card">
                            <div class="p-3 mx-auto text-uppercase">
                                <h1 class="display-2 border-bottom">Editando Producto #<?= $id ?></h1>
                            </div>
                            <div class="card-body">
                                <form action="<?= 'producto-edit.php?id=' . htmlspecialchars($id) ?>" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group relative mb-3">
                                                <select type="text" style="border: 0; border-width: 3;" class="border-bottom form-control fw-bold" name="product_type" placeholder="Tipo de Producto" required>
                                                    <option <?= $product['product_type'] == 'formen' ? 'selected' : '' ?> value="formen">Para hombres</option>
                                                    <option <?= $product['product_type'] == 'forwomen' ? 'selected' : '' ?> value="forwomen">Para mujeres</option>
                                                </select>
                                            </div>
                                            <div class="form-group relative mb-3">
                                                <select type="text" style="border: 0; border-width: 3;" class="border-bottom form-control fw-bold" name="size" placeholder="Talla" required>
                                                    <option <?= $product['size'] == 's' ? 'selected' : '' ?> value="s">Talla: S</option>
                                                    <option <?= $product['size'] == 'm' ? 'selected' : '' ?> value="m">Talla: M</option>
                                                    <option <?= $product['size'] == 'l' ? 'selected' : '' ?> value="l">Talla: L</option>
                                                    <option <?= $product['size'] == 'xl' ? 'selected' : '' ?> value="xl">Talla: XL</option>
                                                </select>
                                            </div>
                                            <div class="form-group relative mb-3">
                                                <input type="text" style="border: 0; border-width: 3;" class="border-bottom form-control fw-bold" name="category_name" placeholder="Nombre de la categoria" required minlength="4" value="<?= htmlspecialchars($product['category_name']) ?>" />
                                            </div>
                                            <div class="form-group relative mb-3">
                                                <input type="text" style="border: 0; border-width: 3;" class="border-bottom form-control fw-bold" name="photo_url" placeholder="Link de imagen" required minlength="4" value="<?= htmlspecialchars($product['photo_url']) ?>" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group relative mb-3">
                                                <input type="text" style="border: 0; border-width: 3;" class="border-bottom form-control fw-bold" name="name" placeholder="Nombre" required value="<?= htmlspecialchars($product['name']) ?>" />
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="form-floating">
                                                    <textarea style="border: 0; border-width: 3; height: 5.6rem;" class="border-bottom form-control fw-bold" placeholder="Descripción del producto" id="descripcionTextArea" name="description" style="height: 5.6rem" maxlength="4096"><?= htmlspecialchars($product['description']) ?></textarea>
                                                    <label for="descripcionTextArea">Descripción del producto</label>
                                                </div>
                                            </div>
                                            <div class="form-group relative mb-3">
                                                <input type="number" style="border: 0; border-width: 3;" class="border-bottom form-control fw-bold" name="price" placeholder="Precio" required minlength="4" value="<?= htmlspecialchars($product['price']) ?>" />
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group mb-3 d-grid">
                                        <button type="submit" class="btn btn-primary w-50 mx-auto rounded-0 text-uppercase">
                                            Confirmar
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
<?php
        }
    }
}
?>

<?php include('includes/footer.php'); ?>
<?php
ob_end_flush();
?>