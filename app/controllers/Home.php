<?php


class Home extends Controller
{
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['iuran'] = $this->Model('DataSantri')->getData();

        $this->view( 'tamplete/header', $data );
        $this->view( 'home/index', $data);
        $this->view( 'tamplete/footer' );
    }
}