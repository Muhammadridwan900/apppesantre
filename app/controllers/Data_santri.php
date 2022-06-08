<?php


class Data_santri extends Controller
{ 
    public function index()
    {
        $data['judul'] = 'Rekap Data';
        $data['DataSantri'] = $this->Model('DataSantri')->getData();


        $this->view( 'tamplete/header', $data);
        $this->view( 'Rekap_administrasi/index', $data);
        $this->view( 'tamplete/footer' );
    }
    public function input()
    {
        if ($this->Model('DataSantri')->inputDataSantri($_POST) > 0 )
        {
            Flaser::setFlase('BERHASIL', 'DITAMBAHKAN', 'success');
            header('Location: ' . BASEURL . '/data_santri');
            exit;
        } else
        {
            Flaser::setFlase('GAGAL', 'DITAMBAHKAN', 'danger');
            header('Location: ' . BASEURL . '/data_santri');
            exit;
        }
    }
    public function hapus($id)
    {
        if ($this->Model('DataSantri')->hapusDataSantri($id) > 0 )
        {
            Flaser::setFlase('BERHASIL', 'DIHAPUS', 'danger');
            header('Location: ' . BASEURL . '/data_santri');
            exit;
        } else
        {
            Flaser::setFlase('GAGAL', 'DITAMBAHKAN', 'danger');
            header('Location: ' . BASEURL . '/data_santri');
            exit;
        }
    }
    public function getuba()
    {
        echo $_POST['id'];
    }
}