<?php defined('BASEPATH') or exit('No direct script access allowed');

class Home_m extends CI_Model
{
    function get_betta($kode = null)
    {
        $this->db->from('tbl_betta');
        if ($kode != null) {
            $this->db->where('kode_betta', $kode);
        } else {
            $this->db->order_by('kode_betta', 'ASC');
        }
        $query = $this->db->get();
        return $query;
    }

    function get_enroll($post)
    {
        $this->db->from('tbl_user');
        $this->db->where('enroll_user', sha1($post['enroll']));
        $query = $this->db->get();
        return $query;
    }
}
