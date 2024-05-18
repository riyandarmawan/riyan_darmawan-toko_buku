<?php

session_start();

if (!isset($_SESSION['login'])) {
    header('Location: /page/auth/login.php');
}

require_once '../../config/config.php';
?>

<?php require_once '../../layout/header.php'; ?>

<div class="border rounded-md px-10 py-4">
    <form action="" method="post">
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Penjualan</button>
    </form>
</div>

<?php require_once '../../layout/footer.php'; ?>