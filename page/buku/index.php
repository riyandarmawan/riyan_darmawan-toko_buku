<?php

session_start();

if (!isset($_SESSION['login'])) {
    header('Location: /page/auth/login.php');
}

require_once '../../config/config.php';

require_once '../../controller/BukuController.php';

$booksModel = new BukuController;

$books = $booksModel->getBuku();

if (isset($_GET['keyword'])) {
    $books = $booksModel->getCari();
}

$halaman = isset($_GET['halaman']) ? $_GET['halaman'] : 1;
$maju = $halaman + 1;
$mundur = $halaman - 1;

?>

<?php require_once '../../layout/header.php'; ?>

<div class="input-group mb-3 w-64 float-right">
    <form action="?halaman=1" method="get" class="flex">
        <input type="text" class="form-control" placeholder="Cari buku" aria-label="Recipient's " aria-describedby="button-addon2" id="keyword" name="keyword" autofocus>
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
    </form>
</div>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Penulis</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Stok</th>
            <th scope="col">Harga</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = $halaman > 1 ? ($halaman - 1) * 10 + 1 : 1;
        foreach ($books as $book) :
        ?>
            <tr>
                <th scope="row"><?= $i ?></th>
                <td><?= $book['judul'] ?></td>
                <td><?= $book['penulis'] ?></td>
                <td><?= $book['penerbit'] ?></td>
                <td><?= $book['stok'] ?></td>
                <td><?= $book['harga_jual'] ?></td>
                <td>
                    <a href="#" class="text-success">Edit</a>
                    <a href="buku/hapus.php?id=<?= $book['id_buku'] ?>" class="text-danger">Hapus</a>
                </td>
            </tr>
        <?php
            $i++;
        endforeach;
        ?>
    </tbody>
</table>

<nav aria-label="Page navigation example" class="float-right">
    <ul class="pagination">
        <li class="page-item">
            <a class="page-link <?= $halaman == 1 ? 'disabled' : '' ?>" href="<?= BASEURL . '/page/buku' . (!empty($_GET['keyword']) ? '?keyword=' . $_GET['keyword'] . '&' : '?') ?>halaman=<?= $mundur ?>">Previous</a>
        </li>
        <li class="page-item">
            <a class="page-link <?= ($halaman * $booksModel->offset) >= $booksModel->totalBooks ? 'disabled' : '' ?>" href="<?= BASEURL . '/page/buku' . (!empty($_GET['keyword']) ? '?keyword=' . $_GET['keyword'] . '&' : '?') ?>halaman=<?= $maju ?>">Next</a>
        </li>
    </ul>
</nav>


<?php require_once '../../layout/footer.php'; ?>