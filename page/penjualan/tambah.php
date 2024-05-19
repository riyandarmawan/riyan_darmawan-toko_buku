<?php

session_start();

if (!isset($_SESSION['login'])) {
    header('Location: /page/auth/login.php');
}

require_once '../../config/config.php';

require_once '../../controller/PenjualanController.php';

$penjualan = new PenjualanController();

$books = $penjualan->getBuku();

?>

<?php require_once '../../layout/header.php'; ?>

<div class="border rounded-md px-10 py-4 w-[40rem] mx-auto">
    <form action="" method="post">
        <div class="w-full flex justify-between choose-book-container">
            <div class="row w-1/2 mb-3">
                <label for="bukuId" class="col-sm-2 col-form-label">Buku</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="bukuId" id="bukuId">
                        <?php foreach ($books as $book) : ?>
                            <option value="<?= $book['id_buku'] ?>"><?= $book['judul'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="row w-1/2 mb-3 float-right">
                <label for="jumlah" class="col-sm-3 col-form-label">Jumlah</label>
                <div class="col-sm-4">
                    <input type="number" name="jumlah" id="jumlah" class="form-control">
                </div>
            </div>
        </div>
        <div class="w-full">
            <button type="button" class="btn btn-primary">+ Tambah buku</button>
        </div>
        <div class="w-full flex justify-center">
            <button type="submit" class="btn btn-primary">Tambah Penjualan</button>
        </div>
    </form>
</div>

<?php require_once '../../layout/footer.php'; ?>