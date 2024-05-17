<?php

session_start();

if (!isset($_SESSION['login'])) {
    header('Location: /page/auth/login.php');
}

require_once '../../config/config.php';
?>

<?php require_once '../../layout/header.php'; ?>


<?php require_once '../../layout/footer.php'; ?>