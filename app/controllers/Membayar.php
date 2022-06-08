<?php


class Membayar extends Controller
{
    public function index()
    {
        $data['judul'] = 'Pembayaran';
        $data['DataSantri'] = $this->Model('DataSantri')->getData();

        $this->view('tamplete/header', $data);
        $this->view('Membayar/index', $data);
        $this->view('tamplete/footer');
    }
    public function detail($id)
    {
        $data['judul'] = 'Pembayaran';
        $data['santri'] = $this->Model('DataSantri')->getIdSantri($id);

        $this->view('tamplete/header', $data);
        $this->view('Membayar/edit', $data);
        $this->view('tamplete/footer');
    }
}
