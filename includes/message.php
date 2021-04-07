<?php
if (isset($_SESSION['message']) && isset($_SESSION['message_type'])) { ?>
    <div class="<?= 'alert ' . 'alert-' . $_SESSION['message_type'] ?> mb-4" role='alert'><?= $_SESSION['message'] ?></div>
<?php
    unset($_SESSION['message']);
    unset($_SESSION['message_type']);
}

?>