<?php

require_once '../../config/Database.php';

class PenjualanController
{
    private $table = 'penjualan';
    private $foreignKey = 'buku';

    public function getBuku()
    {
        $database = new Database;

        $query = "SELECT * FROM $this->foreignKey";

        $books = $database->ambilSemuaData($query);

        return $books;
    }

    public function insertPenjualan()
    {
        $database = new Database;

        $bookIds = $_POST['bukuId'];
        $quantity = $_POST['jumlah'];
        $tanggal = date('Y-m-d');
        $total = count($bookIds);

        $query = "INSERT INTO penjualan(id_kasir,tanggal,total) VALUES (" . $_SESSION['login']['id_kasir'] . ", '$tanggal'," . "$total)";

        $database->modifikasi($query);

        $lastInsertId = $database->lastInsertId();

        for ($i = 0; $i < count($bookIds); $i++) {
            $query = "INSERT INTO detail_penjualan(id_penjualan,id_buku,jumlah) VALUES($lastInsertId,$bookIds[$i],$quantity[$i])";
            $database->modifikasi($query);
        }

        header('Location: index.php');
        exit;
    }
}
