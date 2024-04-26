<?php

require_once '../../config/database.php';
require_once '../../config/Flasher.php';

class loginController
{
    public function login()
    {
        session_start();

        $db = new Database;
        $flasher = new Flasher;

        $query = "SELECT * FROM kasir WHERE username = '" . $_POST['username'] . "'";
        $dataKasir = $db->ambil_data($query);

        if ($dataKasir != null) {
            $_SESSION['login'] = $dataKasir;
            header('Location: /');
            exit;
        } else {
            $flasher->setAlert("Username tidak terdaftar");
            header('Location: /page/auth/login.php');
            exit;
        }
    }
}
