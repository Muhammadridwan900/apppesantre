<?php


class Flaser
{
    public static function setFlase($pesan, $aksi, $tipe)
    {
        $_SESSION['flase'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function flase()
    {
        if (isset($_SESSION['flase']))
        {
            echo ('<div class="alert alert-' . $_SESSION['flase']['tipe'] . ' alert-dismissible fade show" role="alert">Data Santri
            <strong>' . $_SESSION['flase']['pesan'] . ' </strong> ' . $_SESSION['flase']['aksi'] . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
        }
        unset($_SESSION['flase']);
    }
    
}