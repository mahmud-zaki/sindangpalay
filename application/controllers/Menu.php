<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Sindang Palay | Menu Management';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('menu/index', $data);
        $this->load->view('template/footer');
    }

    public function add_menu()
    {
        $data['title'] = 'Sindang Palay | Menu Management';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('menu/add_menu', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                'menu' => $this->input->post('menu'),
                'icon' => $this->input->post('icon')
            ];
            $this->db->insert('user_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Menu baru telah ditambahkan !
        </div>');
            redirect('menu');
        }
    }

    public function icons()
    {
        $data['title'] = 'Sindang Palay | Icons';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('menu/icons', $data);
        $this->load->view('template/footer');
    }

    public function submenu()
    {
        $data['title'] = 'Sindang Palay | Submenu Management';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $this->load->model('Menu_m', 'menu');
        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('menu/sub_m', $data);
        $this->load->view('template/footer');
    }

    public function add_sm()
    {
        $data['title'] = 'Sindang Palay | Submenu Management';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $this->load->model('Menu_m', 'menu');
        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('nama_menu', 'Nama menu', 'required|trim');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required|trim');
        $this->form_validation->set_rules('url', 'URL', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('menu/add_sm', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                'nama_menu' => $this->input->post('nama_menu'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'is_active' => $this->input->post('is_active')
            ];

            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Submenu baru telah ditambahkan !
            </div>');
            redirect('menu/submenu');
        }
    }

    public function edit_menu()
    {
        $data['title'] = 'Sindang Palay | Edit Menu';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();
        $id = $this->uri->segment(3);
        $data['menu'] = $this->db->get_where('user_menu', ['id' => $id])->row_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('menu/edit_menu', $data);
            $this->load->view('template/footer');
        } else {
            $this->ubah_menu();
        }
    }

    private function ubah_menu()
    {
        $id = $this->input->post('id');
        $menu = $this->input->post('menu');
        $icon = $this->input->post('icon');

        $this->db->set('menu', $menu);
        $this->db->set('icon', $icon);
        $this->db->where('id', $id);
        $this->db->update('user_menu');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Menu telah diubah !
    </div>');
        redirect('menu');
    }

    public function hapus_menu($id)
    {
        $this->load->model('Menu_m');
        $this->Menu_m->hapus_menu($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Menu berhasil dihapus!
            </div>');
        redirect('menu');
    }

    public function edit_subm()
    {
        $data['title'] = 'Sindang Palay | Edit Submenu';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();
        $id = $this->uri->segment(3);
        $data['submenu'] = $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('menu/edit_subm', $data);
            $this->load->view('template/footer');
        } else {
            $this->ubah_submenu();
        }
    }

    private function ubah_submenu()
    {
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $menu = $this->input->post('menu_id');
        $url = $this->input->post('url');
        $is_active = $this->input->post('is_active');

        $this->db->set('title', $title);
        $this->db->set('menu_id', $menu);
        $this->db->set('url', $url);
        $this->db->set('is_active', $is_active);
        $this->db->where('id', $id);
        $this->db->update('user_sub_menu');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Submenu telah diubah !
    </div>');
        redirect('menu/submenu');
    }

    public function hapus_submenu($id)
    {
        $this->load->model('Menu_m');
        $this->Menu_m->hapus_submenu($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Submenu berhasil dihapus!
            </div>');
        redirect('menu/submenu');
    }
}
