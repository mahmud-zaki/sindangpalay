<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Selamat Datang | Sindang Palay';

        $this->load->view('template/header_', $data);
        $this->load->view('template/topbar_', $data);
        $this->load->view('template/carousel', $data);
        $this->load->view('user/index', $data);
        $this->load->view('template/footer_');
    }

    public function layanan()
    {
        $data['title'] = 'Selamat Datang | Sindang Palay';

        $this->load->view('template/header_', $data);
        $this->load->view('template/topbar_', $data);
        $this->load->view('user/layanan', $data);
        $this->load->view('template/footer_');
    }

    public function kontak()
    {
        $data['title'] = 'Selamat Datang | Sindang Palay';

        $this->load->view('template/header_', $data);
        $this->load->view('template/topbar_', $data);
        $this->load->view('user/kontak', $data);
        $this->load->view('template/footer_');
    }

    public function blog()
    {
        $data['title'] = 'Selamat Datang | Sindang Palay';
        $data['post'] = $this->db->get_where('posting')->result_array();

        $this->load->view('template/header_', $data);
        $this->load->view('template/topbar_', $data);
        $this->load->view('user/blog', $data);
        $this->load->view('template/footer_');
    }

    public function aspir_()
    {
        $aspir = [
            'judul' => $this->input->post('judul'),
            'email' => $this->input->post('email'),
            'nama' => $this->input->post('nama'),
            'no_tlp' => $this->input->post('no_tlp'),
            'keluhan' => $this->input->post('keluhan'),
            'tanggal' => date("Y-m-d")
        ];
        $this->db->insert('aspirasi', $aspir);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Aspirasi anda berhasil dikirim ! Terimakasih banyak atas kepedulian anda 
    </div>');
        redirect('user/kontak');
    }
}
