<?php include('database/db.php'); ?>
<?php include('includes/header.php'); ?>
<?php
$id = $_GET['id'];
if (is_numeric($id) && strlen($id)) {
    $query = "SELECT * FROM `Products` WHERE `id`='$id'";
    $result = mysqli_query($conn, $query);
    $product = mysqli_fetch_assoc($result);
    if (is_null($product)) {
        header("Location: index.php");
        exit();
    } else { ?>
        <main class="w-100 h-100 py-3 p-md-5 container">
            <?php include('includes/message.php'); ?>
            <div class="row">
                <div class="col-md-4">
                    <img src="<?= htmlspecialchars($product['photo_url']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" class="img-fluid w-100 d-block" style="width:min(12rem, 75%)" />
                </div>
                <div class="col-md-8">
                    <div class="card border-0 w-100">
                        <div class="card-body px-1">
                            <h1 class="card-title text-uppercase <?= AdminCheck() ? 'rounded-3 border border-dark' : '' ?>"><?= htmlspecialchars($product['name']) ?></h1>
                            <div class="row mb-4">
                                <div class="col-8">
                                    <h2 class="card-text fw-light <?= AdminCheck() ? 'rounded-3 border border-dark' : '' ?>"><?= htmlspecialchars($product['category_name']) ?></h2>
                                </div>
                                <div class="col-4">
                                    <h2 class="card-text fw-light <?= AdminCheck() ? 'rounded-3 border border-dark' : '' ?>">$ <?= htmlspecialchars($product['price']) ?> COP</h2>
                                </div>
                            </div>
                            <p class="card-text fs-4 <?= AdminCheck() ? 'rounded-3 border border-dark' : '' ?>">
                                <?= htmlspecialchars($product['description']) ?>
                            </p>
                            <form action="<?= "comprar.php?id=" . $product['id'] ?>" method="post">
                                <div class="form-group mb-3 d-grid">
                                    <button type="submit" class="btn btn-primary w-50 mx-auto rounded-0 text-uppercase">
                                        Añadir al Carrito
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </main>
<?php
    }
} else {
    header("Location: index.php");
    exit();
}
?>
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