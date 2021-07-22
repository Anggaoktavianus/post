<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_rekap extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('profit');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
        # code...
    }


    public function get_by_jumlah()
    {
        $sql =
            "SELECT total.`stock`, SUM(total.`stock`) jumlah FROM `items` total WHERE total.`id_item` != '0'";

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $data = $query->result();
        } else {
            $data = array();
        }

        return $data;
    }
    public function get_by_qty()
    {
        $sql =
            " SELECT total.`jml`, SUM(total.`jml`) jumlah FROM `stock` total WHERE total.`id_item` != '0'";

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $data = $query->result();
        } else {
            $data = array();
        }

        return $data;
    }
    public function get_by_aset_()
    {
        $sql =
            " SELECT stock.`jml` stock, aset.`nilai` aset, modal.`jumlah_modal` modal
            FROM `profit` profit
            JOIN `stock` stock ON profit.`id_stock` = stock.`stock_id`
            JOIN `aset` aset ON profit.`id_aset` = aset.`id`
            JOIN `modal` modal ON profit.`id_modal` = modal.`id`
            WHERE profit.`id` != '0'
            AND profit.`created_at` IS NOT NULL
            GROUP BY profit.`id`
            ORDER BY stock DESC";

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $data = $query->result();
        } else {
            $data = array();
        }

        return $data;
    }

    public function get_by_aset()
    {
        $sql =
            " SELECT aset.`nilai` aset, SUM(aset.`nilai`) jumlah 
            FROM `aset` aset 
            -- JOIN `modal`modal ON aset.`id_modal` = modal.`id` 
            WHERE aset.`id` != '0'";

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $data = $query->result();
        } else {
            $data = array();
        }

        return $data;
    }
    public function get_by_modal()
    {
        $sql =
            " SELECT total.`jumlah_modal`, SUM(total.`jumlah_modal`) jumlah FROM `modal` total WHERE total.`id` != '0'";

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $data = $query->result();
        } else {
            $data = array();
        }

        return $data;
    }

    public function get_by_profit()
    {
        $sql =
            " SELECT total.`jumlah_modal` total ,aset.`nilai` aset, SUM((COALESCE(total.`jumlah_modal`))) jumlah
             FROM `aset` aset 
             JOIN `modal` total ON aset.`id_modal` = total.`id`
             WHERE total.`id` != '0'";

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $data = $query->result();
        } else {
            $data = array();
        }

        return $data;
    }
    public function add($post)
    {
        $params = [
            't_stock'          => $post['t_stock'],
            'nilai_barang'         => $post['nilai_barang'],
            'nilai_aset'         => $post['nilai_aset'],
            'sub_total'       => $post['sub_total'],
            'modal'       => $post['modal'],
            'income'       => $post['income'],
            'keterangan'   => empty($post['keterangan']) ? null : $post['keterangan'],

        ];
        $this->db->insert('profit', $params);
    }

    public function edit($post)
    {
        $params = [
            'name'          => $post['name'],
            'phone'         => $post['phone'],
            'gender'         => $post['gender'],
            'address'       => $post['address'],
            'description'   => empty($post['description']) ? null : $post['description'],
            'updated' => date('Y-m-d H:i:s'),
        ];
        $this->db->where('id', $post['id']);
        $this->db->update('profit', $params);
    }


    public function del($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('profit');
    }
}
