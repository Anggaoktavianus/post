<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_items extends CI_Model
{

    // start datatables
    var $column_order = array(null, 'barcode', 'items.name', 'category_name', 'unit_name', 'barang_harpok', 'price', 'stock', 'image'); //set column field database for datatable orderable
    var $column_search = array('barcode', 'items.name', 'price'); //set column field database for datatable searchable
    var $order = array('id_item' => 'asc'); // default order 

    private function _get_datatables_query()
    {
        $this->db->select('items.*, category.name as category_name, unit.name as unit_name');
        $this->db->from('items');
        $this->db->join('category', 'items.category_id = category.category_id');
        $this->db->join('unit', 'items.unit_id = unit.unit_id');
        $i = 0;
        foreach ($this->column_search as $item) { // loop column 
            if (@$_POST['search']['value']) { // if datatable send POST for search
                if ($i === 0) { // first loop
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
                if (count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) { // here order processing
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    function get_datatables()
    {
        $this->_get_datatables_query();
        if (@$_POST['length'] != -1)
            $this->db->limit(@$_POST['length'], @$_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
    function count_all()
    {
        $this->db->from('items');
        return $this->db->count_all_results();
    }
    // end datatables

    public function get($id = null)
    {
        $this->db->select('items.*, category.name as namak, unit.name as namau, tbl_barcode.id_barcode as bar,tbl_barcode.nama_barang as nabar');

        $this->db->from('items');
        $this->db->join('category', 'category.category_id = items.category_id');
        $this->db->join('unit', 'unit.unit_id = items.unit_id');
        $this->db->join('tbl_barcode', 'tbl_barcode.id_barcode = items.barcode');
        if ($id != null) {
            $this->db->where('id_item', $id);
        }
        $this->db->order_by('barcode', 'asc');
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
    function get_barang($kobar)
    {
        // $hsl = $this->db->query("SELECT items, unit.name as namau
        // FROM items
        // JOIN `unit` , `unit.unit_id = items.unit_id` 
        // where barcode='$kobar'");
        $hsl = $this->db->query(" SELECT a.*, b.name as nama_unit 
        FROM items a 
        JOIN unit b ON a.unit_id = b.unit_id 
        WHERE barcode='$kobar'");

        return $hsl;
    }


    public function add($post)
    {
        $params = [
            'barcode'          => strtoupper($post['barcode']),
            'name'          => $post['name'],
            'category_id'          => $post['category'],
            'unit_id'          => $post['unit'],
            'barang_harpok'          => $post['harpok'],
            'price'          => $post['price'],
            'image'          => $post['image'],
            // 'jml'          => $post['jml'],


        ];
        $this->db->insert('items', $params);
    }



    public function edit($post)
    {
        $params = [
            'barcode'          => $post['barcode'],
            'name'          => $post['name'],
            'category_id'          => $post['category'],
            'unit_id'          => $post['unit'],
            'barang_harpok'          => $post['harpok'],
            'price'          => $post['price'],
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        if ($post['image'] != null) {

            $params['image'] = $post['image']; # code...
        }

        $this->db->where('id_item', $post['id_item']);
        $this->db->update('items', $params);
    }

    function check_barcode($code, $id = null)
    {
        $this->db->from('items');
        $this->db->where('barcode', $code);
        if ($id != null) {
            $this->db->where('id_item !=', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function del($id)
    {
        $this->db->where('id_item', $id);
        $this->db->delete('items');
    }

    function update_stock_in($data)
    {
        $qty = $data['qty'];
        $id = $data['id_item'];
        $sql = "UPDATE items SET stock = stock + '$qty' WHERE id_item='$id'";
        $this->db->query($sql);
    }

    function update_stock_out($data)
    {
        $qty = $data['qty'];
        $id = $data['id_item'];
        $sql = "UPDATE items SET stock = stock - '$qty' WHERE id_item='$id'";
        $this->db->query($sql);
    }
}
