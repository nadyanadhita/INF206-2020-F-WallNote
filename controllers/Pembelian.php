<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembelian extends CI_Controller
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
        $data['title'] = "Pembelian";
        $data['pembelian'] = $this->admin->get('pembelian');
        $this->template->load('templates/dashboard', 'pembelian/data', $data);
    }

    private function _validasi()
    {
        $this->form_validation->set_rules('no_pembelian', 'No Pembelian', 'required|trim');
        $this->form_validation->set_rules('tgl_pembelian', 'Tanggal Pembelian', 'required|trim');
        $this->form_validation->set_rules('total', 'Total', 'required|trim');
        $this->form_validation->set_rules('terbayar', 'Terbayar', 'required|trim');
        $this->form_validation->set_rules('sisa', 'Sisa', 'required|trim');
    }

    public function add()
    {
        $this->_validasi();
        if ($this->form_validation->run() == false) {
            $data['title'] = "Pembelian";
            $this->template->load('templates/dashboard', 'pembelian/add', $data);
        } else {
            $input = $this->input->post(null, true);
            $save = $this->admin->insert('pembelian', $input);
            if ($save) {
                set_pesan('data berhasil disimpan.');
                redirect('pembelian');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('pembelian/add');
            }
        }
    }


    public function edit($getId)
    {
        $id = encode_php_tags($getId);
        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $data['title'] = "Pembelian";
            $data['pembelian'] = $this->admin->get('pembelian', ['id_pembelian' => $id]);
            $this->template->load('templates/dashboard', 'pembelian/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            $update = $this->admin->update('pembelian', 'id_pembelian', $id, $input);

            if ($update) {
                set_pesan('data berhasil diedit.');
                redirect('pembelian');
            } else {
                set_pesan('data gagal diedit.');
                redirect('pembelian/edit/' . $id);
            }
        }
    }

    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('pembelian', 'id_pembelian', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('pembelian');
    }
}
