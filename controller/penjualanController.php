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
}
