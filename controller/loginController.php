<?php

require_once '../../config/Database.php';

class loginController
{
    public function login()
    {
        session_start();

        $db = new Database;

        $query = "SELECT * FROM kasir WHERE username = '" . $_POST['username'] . "'";
        $dataKasir = $db->ambil_data($query);

        var_dump($dataKasir);

        if ($dataKasir != null) {
            $_SESSION['login'] = $dataKasir;
        } else {
            $_SESSION['username'] = "Username tidak terdaftar";
            header('Location: /page/auth/login.php');
            exit;
        }
    }
}
