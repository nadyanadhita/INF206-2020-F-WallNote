<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penjualan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "Penjualan";
        $data['penjualan'] = $this->admin->get('penjualan');
        $this->template->load('templates/dashboard', 'penjualan/data', $data);
    }

    private function _validasi()
    {
        $this->form_validation->set_rules('no_penjualan', 'No Penjualan', 'required|trim');
        $this->form_validation->set_rules('tgl_penjualan', 'Tanggal Penjualan', 'required|trim');
        $this->form_validation->set_rules('total', 'Total', 'required|trim');
        $this->form_validation->set_rules('terbayar', 'Terbayar', 'required|trim');
        $this->form_validation->set_rules('sisa', 'Sisa', 'required|trim');
    }

    public function add()
    {
        $this->_validasi();
        if ($this->form_validation->run() == false) {
            $data['title'] = "Penjualan";
            $this->template->load('templates/dashboard', 'penjualan/add', $data);
        } else {
            $input = $this->input->post(null, true);
            $save = $this->admin->insert('penjualan', $input);
            if ($save) {
                set_pesan('data berhasil disimpan.');
                redirect('penjualan');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('penjualan/add');
            }
        }
    }


    public function edit($getId)
    {
        $id = encode_php_tags($getId);
        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $data['title'] = "Penjualan";
            $data['penjualan'] = $this->admin->get('penjualan', ['id_penjualan' => $id]);
            $this->template->load('templates/dashboard', 'penjualan/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            $update = $this->admin->update('penjualan', 'id_penjualan', $id, $input);

            if ($update) {
                set_pesan('data berhasil diedit.');
                redirect('penjualan');
            } else {
                set_pesan('data gagal diedit.');
                redirect('penjualan/edit/' . $id);
            }
        }
    }

    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('penjualan', 'id_penjualan', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('penjualan');
    }
}
