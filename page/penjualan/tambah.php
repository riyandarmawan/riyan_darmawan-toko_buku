<?php

session_start();

if (!isset($_SESSION['login'])) {
    header('Location: /page/auth/login.php');
}

require_once '../../config/config.php';

require_once '../../controller/PenjualanController.php';

?>

<?php require_once '../../layout/header.php'; ?>

<div class="border rounded-md px-10 py-4 w-[70rem] h-[50rem] overflow-y-scroll mx-auto">
    <form action="" method="post">
        <div class="flex justify-between mb-4">
            <!-- tanggal -->
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="date" class="col-form-label">Tanggal</label>
                </div>
                <div class="col-auto">
                    <input type="date" id="date" name="date" value="<?= date('Y-m-d') ?>" readonly class="form-control">
                </div>
            </div>

            <!-- total -->
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="total" class="col-form-label">Total</label>
                </div>
                <div class="col-auto">
                    <textarea type="text" id="total" name="total" readonly rows="2" class="form-control resize-none"></textarea>
                </div>
            </div>
        </div>

        <!-- input for books -->
        <table class="table table-sm table-striped table-bordered">
            <thead>
                <tr>
                    <th>Kode Buku</th>
                    <th>Judul</th>
                    <th>Penerbit</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Diskon</th>
                    <th>Sub Total</th>
                </tr>
            </thead>
            <tbody>
                <tr id="input-row-book">
                    <td><input type="text" name="id[]" id="id" class="form-control"></td>
                    <td><input type="text" name="title[]" id="title" readonly class="form-control"></td>
                    <td><input type="text" name="publisher[]" id="publisher" readonly class="form-control"></td>
                    <td><input type="text" name="price[]" id="price" readonly class="form-control"></td>
                    <td><input type="number" name="amount[]" id="amount" min="1" value="1" class="form-control"></td>
                    <td><input type="text" name="discount[]" id="discount" readonly class="form-control"></td>
                    <td><input type="text" name="subTotal[]" id="subTotal" readonly class="form-control"></td>
                </tr>
            </tbody>
        </table>
        <button type="button" id="add-book" class="btn btn-primary">Tambah Buku</button>
    </form>
</div>

<script src="../../assets/js/tambahPenjualan.js"></script>

<?php require_once '../../layout/footer.php'; ?>