<?php include('database/db.php'); ?>
<?php include('includes/header.php'); ?>
<main class="container pt-5">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="mt-1">
                <?php
                $query = "SELECT id, name, photo_url, size, createdAt FROM `Products` WHERE `product_type` = 'formen'";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) == 0) { ?>
                    <h1 class=text-center>Todavía no hay productos para mostrar</h1>
                <?php
                } else { ?>
                    <div class="row row-cols-md-3 row-cols-1 g-md-5 g-2">
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <div class="col m-0 text-truncate bb">
                                <a href="<?= "producto.php?id=" . htmlspecialchars($row['id']) ?>" class="thumbnail text-decoration-none">
                                    <figure class="figure p-0 m-0">
                                        <figcaption class="figure-caption text-center">
                                            <h6 class="text-black fst-italic"><?= htmlspecialchars($row['name']); ?></h6>
                                        </figcaption>
                                        <div class="position-relative">
                                            <img src="<?= htmlspecialchars($row['photo_url']); ?>" alt="<?= htmlspecialchars($row['name']); ?>" class="figure-img img-fluid" style="width: 20.3125rem; height: 28.475rem" />
                                            <div class="position-absolute top-0 end-0 p-1">
                                                <div class="text-white bg-secondary" style="border-radius: 999px; opacity: 80%;width: 1.8rem; height: 1.8rem;">
                                                    <a href="<?= (AdminCheck() ? 'producto-delete.php?id=' : "producto.php?id=") . htmlspecialchars($row['id']) ?>" class="text-decoration-none text-white">
                                                        <?php
                                                        if (AdminCheck()) { ?>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2rem" height="1.2rem" fill="currentColor" style="transform: translateX(0.3rem) translateY(0.1rem);" viewBox="0 0 16 16">
                                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                            </svg>
                                                        <?php
                                                        } else { ?>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="1.2rem" height="1.2rem" fill="currentColor" style="transform: translateX(0.3rem) translateY(0.1rem);" viewBox="0 0 16 16">
                                                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                                            </svg>
                                                        <?php
                                                        }
                                                        ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="position-absolute start-0 <?= AdminCheck() ? 'bottom-0 p-3' : "top-0 p-1" ?>">
                                                <a href="<?= (AdminCheck() ? 'producto-edit.php?id=' : "producto.php?id=") . htmlspecialchars($row['id']) ?>" class="text-decoration-none text-white">
                                                    <?php
                                                    if (AdminCheck()) { ?>
                                                        <div class="text-white bg-secondary" style="border-radius: 999px; opacity: 80%;width: 1.8rem; height: 1.8rem;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="1rem" height="1rem" fill="currentColor" style="transform: translateX(0.36rem) translateY(0rem);" viewBox="0 0 16 16">
                                                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                                            </svg>
                                                        </div>
                                                    <?php
                                                    } else { ?>
                                                        <p class="text-white bg-secondary text-uppercase px-1 <?= $row['createdAt'] > date('Y-m-d', mktime(0, 0, 0, date("m"), date("d") - 10, date("Y"))) ? '' : 'd-none' ?>">
                                                            Nuevo
                                                        </p>
                                                    <?php
                                                    }
                                                    ?>
                                                </a>
                                            </div>
                                            <div class="position-absolute bottom-0 end-0 <?= AdminCheck() ? 'p-3' : "p-1" ?>">
                                                <?php
                                                if (AdminCheck()) { ?>
                                                    <div class="text-white bg-secondary" style="border-radius: 999px; opacity: 80%;width: 1.8rem; height: 1.8rem;">
                                                        <a href="producto-create.php" class="text-decoration-none text-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="currentColor" style="transform: translateX(0.15rem) translateY(0rem);" viewBox="0 0 16 16">
                                                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                <?php
                                                } else { ?>
                                                    <a href="<?= "producto.php?id=" . htmlspecialchars($row['id']) ?>" class="text-decoration-none text-white">
                                                        <p class="text-white bg-secondary text-uppercase px-1">
                                                            Talla <?= htmlspecialchars($row['size']); ?>
                                                        </p>
                                                    </a>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </figure>
                                </a>
                            </div>
                    <?php }
                        echo "</div>";
                    }
                    ?>
                    </div>
            </div>
        </div>

</main>
<script>
    document.documentElement.classList.remove('overflow-hidden')
</script>
<?php include('includes/footer.php'); ?>
<?php
ob_end_flush();
?>