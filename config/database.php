<?php

class Database
{
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = 'riyan_darmawan_toko_buku';
    protected $conn;

    public function koneksi() {
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database);

        if(mysqli_connect_errno()) {
            die('Connection failed : ' . mysqli_connect_error());
        }
    }

    public function ambil_data($query) {
        $this->koneksi();

        $result = $this->conn->query($query);

        // cek jika query berhasil dijalankan
        if($result === false) {
            die('Gagal mengeksekusi query : ' . $this->conn->error);
        }

        $data = $result->fetch_assoc();

        return $data;
    }

    public function login() {
        $table = 'kasir';

        $this->ambil_data("SELECT * FROM $table WHERE username = ". $_POST['username']);
    }
}
