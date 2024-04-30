<?php
require_once '../../config/config.php';

require_once '../../controller/bukuController.php';

$buku = new bukuController;
?>

<?php require_once '../../layout/header.php'; ?>

<div class="input-group mb-3 w-64 float-right">
    <form action="" class="flex">
        <input type="text" class="form-control" placeholder="Cari buku" aria-label="Recipient's " aria-describedby="button-addon2" id="keyword" name="keyword">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2" name="submit">Cari</button>
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
            $i = 1;
            foreach ($buku->getBuku() as $buku) :
        ?>
            <tr>
                <th scope="row"><?= $i ?></th>
                <td><?= $buku['judul'] ?></td>
                <td><?= $buku['penulis'] ?></td>
                <td><?= $buku['penerbit'] ?></td>
                <td><?= $buku['stok'] ?></td>
                <td><?= $buku['harga_jual'] ?></td>
                <td>
                    <a href="#" class="text-success">Edit</a>
                    <a href="#" class="text-danger">Hapus</a>
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
        <li class="page-item"><a class="page-link disabled" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
</nav>

<?php require_once '../../layout/footer.php'; ?>