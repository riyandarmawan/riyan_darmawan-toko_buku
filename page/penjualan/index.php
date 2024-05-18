<?php

session_start();

if (!isset($_SESSION['login'])) {
    header('Location: /page/auth/login.php');
}

require_once '../../config/config.php';
?>

<?php require_once '../../layout/header.php'; ?>


<a href="<?= BASEURL ?>/page/penjualan/tambah.php" class="bg-blue-500 px-4 py-2 rounded-md text-lg text-white">Tambah penjualan</a>

<?php require_once '../../layout/footer.php'; ?>