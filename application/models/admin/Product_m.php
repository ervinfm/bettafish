<?php defined('BASEPATH') or exit('No direct script access allowed');

class Product_m extends CI_Model
{
    function get($id = null)
    {
        $this->db->from('tbl_betta');
        if ($id != null) {
            $this->db->where('id_betta', $id);
        } else {
            $this->db->order_by('nama_betta', 'ASC');
        }
        $query = $this->db->get();
        return $query;
    }

    function insert($post)
    {
        $params = [
            'id_betta' => random_string('alnum', 30),
            'kode_betta' => $post['b_kode'],
            'nama_betta' => $post['b_nama'],
            'type_betta' => $post['b_jenis'],
            'birth_betta' => $post['b_lahir'],
            'gen_betta' => $post['b_gender'],
            'price_betta' => $post['b_harga'],
            'status_betta' => $post['b_status'],
            'image_betta' => $post['image'],
        ];
        $this->db->insert('tbl_betta', $params);
    }

    function update($post)
    {
        $params = [
            'kode_betta' => $post['b_kode'],
            'nama_betta' => $post['b_nama'],
            'type_betta' => $post['b_jenis'],
            'birth_betta' => $post['b_lahir'],
            'gen_betta' => $post['b_gender'],
            'price_betta' => $post['b_harga'],
            'status_betta' => $post['b_status'],
            'image_betta' => $post['image'],
        ];
        $this->db->where('id_betta', $post['id']);
        $this->db->update('tbl_betta', $params);
    }

    function delete($id)
    {
        $this->db->where('id_betta', $id);
        $this->db->delete('tbl_betta');
    }
}
