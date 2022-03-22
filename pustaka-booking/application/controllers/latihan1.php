<?php
class latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang.. selamat belajar Web Programming";
        //$this->load->view('view-latihan1');
    }

    public function penjumlahan($nilai1, $nilai2)
    {
        $this->load->model('model_latihan1');

        $data['nilai1'] = $nilai1;
        $data['nilai2'] = $nilai2;
        $data['hasil'] = $this->model_latihan1->jumlah($nilai1, $nilai2);

        $this->load->view('view-latihan', $data);
    }
}