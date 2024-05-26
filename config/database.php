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
    public function ambilData($query)
    {
        $this->koneksi();

        $result = $this->conn->query($query);

        // cek jika query berhasil dijalankan
        if ($result === false) {
            die('Gagal mengeksekusi query : ' . $this->conn->error);
        }

        $data =  $result->fetch_assoc();

        return $data;
    }

    public function ambilSemuaData($query) {
        $this->koneksi();

        $result = $this->conn->query($query);

        // cek jika query berhasil dijalankan
        if($result === false) {
            die('Gagal mengeksekusi query : ' . $this->conn->error);
        }

        $data = [];

        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }

    public function modifikasi($query)
    {
        $this->koneksi();

        if ($this->conn->query($query) === TRUE) {
            // Query executed successfully
            return true;
        } else {
            // Query execution failed
            die('Error executing query: ' . $this->conn->error);
        }
    }


    public function lastInsertId()
    {
        return mysqli_insert_id($this->conn);
    }   
}
