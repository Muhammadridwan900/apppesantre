<?php


class Tanggungan extends Controller
{
    public function index()
    {
        $data['judul'] = 'Tanggungan';
        $data['DataSantri'] = $this->Model('DataSantri')->getData();
        $this->view('tamplete/header', $data);
        $this->view('Tanggungan/index', $data);
        $this->view('tamplete/footer');
    }
}