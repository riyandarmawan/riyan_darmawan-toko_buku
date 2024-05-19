<?php 

require_once '../../config/Database.php';

class PenjualanController {
    private $table = 'penjualan';
    private $foreignKey = 'buku';

    public function getBuku()
    {
        $database = new Database;

        $query = "SELECT * FROM $this->foreignKey";

        $books = $database->ambilSemuaData($query);

        return $books;
    }
}