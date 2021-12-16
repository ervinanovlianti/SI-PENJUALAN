<?php
class LaporanPenjualan extends CI_Controller
{
    public function  __construct()
    {
        parent::__construct();
        if ($this->session->userdata('hak_akses') != '3') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Anda belum login!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>');
            redirect('welcome');
        }
    }
    public function index()
    {
        $data['title'] = "Laporan Penjualan";
        $this->load->view('manager/templates_m/header');
        $this->load->view('manager/templates_m/sidebar');
        $this->load->view('manager/laporanPenjualan', $data);
        $this->load->view('manager/templates_m/footer');
    }
}
