<?php include('includes/header.php'); ?>
<main class="w-100 h-100">
    <div class="container py-2 px-2">
        <?php include('includes/message.php'); ?>
        <div class="row mt-4">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <form class="d-flex">
                        <input class="form-control me-2" id="input" type="search" placeholder="Buscar" aria-label="Buscar">
                        <button type="submit" class="btn btn-outline-success" id="search">Buscar</button>
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
    const button = document.getElementById('search');
    const input = document.getElementById('input');
    button.addEventListener("click", (e) => {
        e.preventDefault();
        if (!input.value.length) return;
        window.location.replace(`productos.php?q=${input.value}`)
    })
</script>
<?php include('includes/footer.php'); ?>
<?php
ob_end_flush();
?>