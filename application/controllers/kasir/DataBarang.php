<?php
class DataBarang extends CI_Controller
{
    public function  __construct()
    {
        parent::__construct();
        if ($this->session->userdata('hak_akses') != '2') {
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
        $data['title'] = "Data Semua Produk";
        $data['barang'] = $this->model_barang->get_data('tb_barang')->result();
        $this->load->view('kasir/templates_k/header');
        $this->load->view('kasir/templates_k/sidebar');
        $this->load->view('kasir/dataBarang', $data);
        $this->load->view('kasir/templates_k/footer');
    }
}

