<?php 

require_once '../../config/Database.php';

class bukuController {
    protected $table = 'buku';
    protected $cari;
    protected $offset;
    protected $maju;
    protected $mundur;

    public function getBuku() {
        $db = new Database;

        $query = "SELECT * FROM $this->table";

        $buku = $db->ambilSemuaData($query);
        
        return $buku;
    }
}