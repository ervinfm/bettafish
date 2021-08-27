<?php

function usia($tanggal_lahir)
{
    $birthDate = new DateTime($tanggal_lahir);
    $today = new DateTime("today");
    if ($birthDate > $today) {
        exit("0 tahun 0 bulan 0 hari");
    }
    $y = $today->diff($birthDate)->y;
    $m = $today->diff($birthDate)->m;
    $d = $today->diff($birthDate)->d;
    if ($y == 0) {
        return $m . " bulan " . $d . " hari";
    } else if ($y == 0 && $m == 0) {
        return $d . " hari";
    } else {
        return $y . " tahun " . $m . " bulan " . $d . " hari";
    }
}

function rupiah($angka)
{
    $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
    return $hasil_rupiah;
}

function login()
{
    $ci = &get_instance();
    if ($ci->session->userdata('userid') == null) {
        redirect('auth');
    }
}

function get_betta($id = null)
{
    $ci = &get_instance();
    $ci->db->from('tbl_betta');
    if ($id != null) {
        $ci->db->where('kode_betta', $id);
    } else {
        $ci->db->order_by('nama_betta', 'ASC');
    }
    $query = $ci->db->get();
    return $query;
}

function get_aset()
{
    $ci = &get_instance();
    $ci->db->from('tbl_betta');
    $ci->db->where('status_betta', 1);
    $query = $ci->db->get();
    $money = 0;
    foreach ($query->result() as $val => $betta) {
        $money = $money + $betta->price_betta;
    }
    return $money;
}

function get_betta_ready()
{
    $ci = &get_instance();
    $ci->db->from('tbl_betta');
    $ci->db->where('status_betta', 1);
    $query = $ci->db->get();
    return $query;
}
