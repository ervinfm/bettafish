<?php defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        login();
        $this->load->model('admin/product_m');
    }

    public function index()
    {
        $data['row'] = $this->product_m->get();
        $this->template->load('admin/template', 'admin/product/index', $data);
    }

    public function insert()
    {
        $this->template->load('admin/template', 'admin/product/form');
    }

    public function update($id)
    {
        $data['row'] = $this->product_m->get($id)->row();
        $this->template->load('admin/template', 'admin/product/form', $data);
    }

    function proses()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['insert'])) {
            $config['upload_path']    = './assets/image/betta';
            $config['allowed_types']  = 'jpg|png|jpeg|ico|webp';
            $config['max_size']       = 2000;
            $config['file_name']       = 'betta-' . random_string('alnum', 25);
            $this->load->library('upload', $config);
            $gambar = $this->upload->do_upload('image');
            if ($gambar == true) {
                $post['image'] = $this->upload->data('file_name');
            } else {
                $post['image'] = NULL;
            }
            $this->product_m->insert($post);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('succes', "Data Betta Fish Berhasil Ditambahkan!!");
                redirect('admin/product');
            } else {
                $this->session->set_flashdata('error', "Data Betta Fish Gagal Ditambahkan!,<br> silahkan periksa kembali!");
                redirect('admin/product');
            }
        } else if (isset($post['update'])) {
            $betta = $this->product_m->get($post['id'])->row();
            $config['upload_path']    = './assets/image/betta';
            $config['allowed_types']  = 'jpg|png|jpeg|ico|webp';
            $config['max_size']       = 2000;
            $config['file_name']       = 'betta-' . random_string('alnum', 25);
            $this->load->library('upload', $config);
            $gambar = $this->upload->do_upload('image');
            if ($gambar == true) {
                if ($betta->image_betta != null) {
                    $target_file = './assets/image/betta/' . $betta->image_betta;
                    unlink($target_file);
                    $post['image'] = $this->upload->data('file_name');
                } else if ($betta->image_betta == null) {
                    $post['image'] = $this->upload->data('file_name');
                }
            } else {
                $post['image'] = $betta->image_betta;
            }
            $this->product_m->update($post);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('succes', "Data Betta Fish Berhasil Diperbaharui!");
                redirect('admin/product');
            } else {
                $this->session->set_flashdata('error', "Data Betta Fish Gagal Diperbaharui!,<br> silahkan periksa kembali!");
                redirect('admin/product/update/' . $post['id']);
            }
        } else {
            redirect('admin/product');
        }
    }

    function delete($id)
    {
        $this->product_m->delete($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('succes', "Data Betta Fish Berhasil Dihapus!");
            redirect('admin/product');
        } else {
            $this->session->set_flashdata('error', "Data Betta Fish Gagal Dihapus!,<br> silahkan periksa kembali!");
            redirect('admin/product');
        }
    }
}
