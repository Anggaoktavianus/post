<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Rekap_modal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        not_login();


        $this->load->model(['m_items', 'm_category', 'm_unit', 'm_barang', 'm_rekap']);
    }

    public function index()
    {
        $data['row'] = $this->m_rekap->get();
        $data['jumlah'] = $this->m_rekap->get_by_jumlah();
        $data['total'] = $this->m_rekap->get_by_qty();
        $data['aset'] = $this->m_rekap->get_by_aset();
        $data['modal'] = $this->m_rekap->get_by_modal();
        $data['profit'] = $this->m_rekap->get_by_profit();
        $data['total_barang'] = $this->m_rekap->get_by_qty();
        $this->template->load('template', 'report/rekap_modal', $data);
    }

    function rekap_print($id)
    {
        $data['row'] = $this->m_rekap->get($id)->row();
        $html = $this->load->view('report/rekap_print', $data, true);
        $this->fungsi->Pdfgenerator($html, 'barcode-' . $data['row']->id, 'A4', 'potrait');
    }

    public function add()
    {
        $modal = new stdClass();
        $modal->id = null;
        $modal->t_stock = null;
        $modal->nilai_barang = null;
        $modal->nilai_aset = null;
        $modal->sub_total = null;
        $modal->modal = null;
        $modal->income = null;
        $modal->keterangan = null;
        $stock = $this->m_rekap->get_by_jumlah();
        $barang = $this->m_rekap->get_by_qty();
        $aset = $this->m_rekap->get_by_aset();
        $nilaimodal = $this->m_rekap->get_by_modal();
        $profit = $this->m_rekap->get_by_profit();
        $data = array(
            'page' => 'add',
            'row' => $modal,
            'stock' => $stock,
            'barang' => $barang,
            'aset' => $aset,
            'nilaimodal' => $nilaimodal,
            'profit' => $profit,
        );

        $this->template->load('template', 'report/form_rekap', $data);
    }

    public function proses()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['add'])) {

            $this->m_rekap->add($post);
        } elseif (isset($_POST['edit'])) {
            $this->m_rekap->edit($post);
        }
        if ($this->db->affected_rows() > 0) {
            echo "<script>alert ('Data berhasil disimpan');</script>";
        }
        echo "<script>window.location ='" . site_url('rekap_modal') . "' ; </script>";
    }

    function edit($id)
    {
        $query = $this->m_items->get($id);
        if ($query->num_rows() > 0) {
            $items = $query->row();
            $category = $this->m_category->get();
            $unit = $this->m_unit->get();
            $barang = $this->m_barang->get();

            $data = array(
                'page' => 'edit',
                'row' => $items,
                'category' => $category,
                'unit' => $unit,
                'barang' => $barang

            );

            $this->template->load('template', 'product/items/form_items', $data);
        } else {
            echo "<script>alert ('Data tidak ditemukan');";
            echo "window.location ='" . site_url('items') . "' ; </scrip>";
        }
    }

    public function del($id)
    {
        $this->m_rekap->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('danger', 'Data berhasil dihapus');
        }
        redirect('rekap_modal/');
    }
}
