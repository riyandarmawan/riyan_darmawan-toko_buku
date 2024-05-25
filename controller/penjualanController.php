<?php

require_once '../../config/Database.php';

class PenjualanController
{
    private $table = 'penjualan';

    public function getBooks() {
        $database = new Database();

        $query = "SELECT * FROM buku";

        $books = $database->ambilSemuaData($query);

        return $books;
    }

    public function insertPenjualan() {
        $database = new Database();

        // $ids = $_POST['id'];
        // $titles = $_POST['title'];
        // $publishers = $_POST['publisher'];
        // $prices = $_POST['price'];
        // $amounts = $_POST['amount'];
        // $discounts = $_POST['discount'];
        // $subTotals = $_

        // $query = "INSERT INTO penjualan";
    }
}
