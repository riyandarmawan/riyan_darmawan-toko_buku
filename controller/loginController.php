<?php

require_once '../../config/Database.php';

class LoginController
{
    public function login()
    {
        session_start();

        $db = new Database;

        $query = "SELECT * FROM kasir WHERE username = '" . $_POST['username'] . "'";
        $dataKasir = $db->ambilData($query);

        if ($dataKasir != null && $dataKasir['password'] == $_POST['password']) {
            $_SESSION['login'] = $dataKasir;
            header('Location: /');
            exit;
        } else if ($dataKasir != null && $dataKasir['password'] != $_POST['password']) {
            $_SESSION['old']['username'] = $_POST['username'];
            $_SESSION['password'] = 'Password tidak sesuai';
        } else {
            $_SESSION['username'] = 'Username tidak terdaftar';
            if ($_POST['username'] == '') {
                $_SESSION['username'] = 'Username harus diisi';
            }
            if ($_POST['password'] == '') {
                $_SESSION['password'] = 'Password harus diisi';
            }
        }
    }
}
