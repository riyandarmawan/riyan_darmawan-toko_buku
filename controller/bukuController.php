<?php

require_once '../../config/Database.php';

class bukuController
{
    protected $table = 'buku';
    protected $cari;
    protected $offset = 10;
    protected $first = 0;
    protected $totalBooks;

    public function getBuku()
    {
        $db = new Database;

        $query = "SELECT * FROM $this->table";

        $books = $db->ambilSemuaData($query);

        if (isset($_GET['halaman'])) {
            $this->first = ($_GET['halaman'] - 1) * 10;
        }

        $this->totalBooks = count($books);

        $books = array_slice($books, $this->first, $this->offset);

        return $books;
    }

    public function getCari()
    {
        $db = new Database;

        $this->cari = $_POST['keyword'];

        $query = "SELECT * FROM $this->table WHERE 
                    judul LIKE '%$this->cari%' OR 
                    penulis LIKE '%$this->cari%' OR
                    penerbit LIKE '%$this->cari%' OR 
                    stok LIKE '%$this->cari%' OR
                    harga_jual LIKE '%$this->cari%'
        ";

        $books = $db->ambilSemuaData($query);

        if (isset($_GET['halaman'])) {
            $this->first = ($_GET['halaman'] - 1) * 10;
        }

        $this->totalBooks = count($books);

        $books = array_slice($books, $this->first, $this->offset);

        return $books;
    }
}
