<?php

require_once '../../config/Database.php';

class PenjualanController
{
    public function getBooks()
    {
        $database = new Database();

        $query = "SELECT * FROM buku";

        $books = $database->ambilSemuaData($query);

        return $books;
    }

    public function insertPenjualan()
    {
        $database = new Database();

        $idKasir = $_SESSION['login']['id_kasir'];

        $tanggal = date('Y-m-d');

        $total = $_POST['total'];

        $query = "INSERT INTO penjualan(id_kasir, tanggal, total) VALUES($idKasir, '$tanggal', $total)";

        $database->modifikasi($query);

        $lastIdPenjualan = $database->lastInsertId();
        $id = $_POST['id'];
        $jumlah = $_POST['amount'];

        for($i = 0; $i < count($jumlah); $i++) {
            $query = "INSERT INTO detail_penjualan(id_penjualan, id_buku, jumlah) VALUES($lastIdPenjualan, " . $id[$i] . ", " . $jumlah[$i] . ")";
            $database->modifikasi($query);
        }

        header('Location: index.php');
        exit;
    }
}
