<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Opname extends CI_Controller
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
        $data['title'] = "Opname";
        $data['opname'] = $this->admin->getOpname();
        $this->template->load('templates/dashboard', 'opname/data', $data);
    }

    private function _validasi()
    {
        $this->form_validation->set_rules('barang_id', 'Nama Barang', 'required');
        $this->form_validation->set_rules('satuan_id', 'Satuan Barang', 'required');
    }

    public function add()
    {
        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $data['title'] = "Opname";
            $data['barang'] = $this->admin->get('barang');
            $data['satuan'] = $this->admin->get('satuan');

            // Mengenerate ID Barang
            $kode_terakhir = $this->admin->getMax('opname', 'id_opname');
            $kode_tambah = substr($kode_terakhir, -6, 6);
            $kode_tambah++;
            $number = str_pad($kode_tambah, 6, '0', STR_PAD_LEFT);
            $data['id_opname'] = 'B' . $number;

            $this->template->load('templates/dashboard', 'opname/add', $data);
        } else {
            $input = $this->input->post(null, true);
            $insert = $this->admin->insert('opname', $input);

            if ($insert) {
                set_pesan('data berhasil disimpan');
                redirect('opname');
            } else {
                set_pesan('gagal menyimpan data');
                redirect('opname/add');
            }
        }
    }

    public function edit($getId)
    {
        $id = encode_php_tags($getId);
        $this->_validasi();

        if ($this->form_validation->run() == false) {
            $data['title'] = "Opname";
            $data['barang'] = $this->admin->get('barang');
            $data['satuan'] = $this->admin->get('satuan');
            $data['opname'] = $this->admin->get('opname', ['id_opname' => $id]);
            $this->template->load('templates/dashboard', 'opname/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            $update = $this->admin->update('opname', 'id_opname', $id, $input);

            if ($update) {
                set_pesan('data berhasil disimpan');
                redirect('opname');
            } else {
                set_pesan('gagal menyimpan data');
                redirect('opname/edit/' . $id);
            }
        }
    }

    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('opname', 'id_opname', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('opname');
    }
}
