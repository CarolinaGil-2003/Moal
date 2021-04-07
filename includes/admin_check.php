<?php
ob_start();
function AdminCheck()
{
    if (isset($_SESSION['user_mail'])) {
        if (hash('sha256', $_SESSION['user_mail']) == '76b808d041896fb26294bab5916ff6974619b62624fb06b7bf50774ffd0c6489') {
            return true;
        }
        return false;
    } else {
        return false;
    }
}
