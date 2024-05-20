<?php

session_start();

if (!isset($_SESSION['login'])) {
    header('Location: /page/auth/login.php');
}

require_once '../../config/config.php';

require_once '../../controller/PenjualanController.php';

$penjualan = new PenjualanController();

$books = $penjualan->getBuku();

if (isset($_POST['submit'])) {
    $penjualan->insertPenjualan();
}

?>

<?php require_once '../../layout/header.php'; ?>

<div class="border rounded-md px-10 py-4 w-[40rem] mx-auto">
    <form action="" method="post">
        <div class="books-field">
            <div class="w-full flex justify-between choose-book-container">
                <div class="mb-3 flex gap-3 w-1/3">
                    <label for="bukuId[]" class="col-sm-2 col-form-label">Buku</label>
                    <div class="col-sm-8">
                        <select class="form-select" aria-label="Default select example" name="bukuId[]">
                            <?php foreach ($books as $book) : ?>
                                <option value="<?= $book['id_buku'] ?>"><?= $book['judul'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jumlah[]" class="col-sm-3 col-form-label">Jumlah</label>
                    <div class="col-sm-4">
                        <input type="number" name="jumlah[]" min="1" value="1" class="form-control quantity-book">
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full">
            <button type="button" id="add-book" class="btn btn-primary">+ Tambah buku</button>
        </div>
        <div class="w-full flex justify-center">
            <button type="submit" name="submit" class="btn btn-primary">Tambah Penjualan</button>
        </div>
    </form>
</div>

<script src="../../assets/js/tambahPenjualan.js"></script>

<?php require_once '../../layout/footer.php'; ?>