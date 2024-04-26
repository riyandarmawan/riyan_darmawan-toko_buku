<?php

session_start();

class Flasher
{
    public function setAlert($pesan)
    {
        $_SESSION['alert'] = $pesan;
    }

    public function getAlert()
    {
        if (isset($_SESSION['alert'])) {
            echo '
                <p class="mt-2 text-invalid">* ' . $_SESSION['alert'] . '</p>  
            ';

            unset($_SESSION['alert']);
        }
    }
}
