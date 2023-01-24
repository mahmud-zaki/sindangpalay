<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->helper('url');
    }

    public function index()
    {
        $data['title'] = 'Sindang Palay | Profile Saya';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/profile', $data);
        $this->load->view('template/footer');
    }

    public function dashboard()
    {
        $data['title'] = 'Sindang Palay | Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('template/footer');
    }

    public function ubah_profile()
    {
        $data['title'] = 'Sindang Palay | Ubah profile';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('username', 'Username', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('admin/ubah_profile', $data);
            $this->load->view('template/footer');
        } else {
            $username = $this->input->post('username');
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $alamat = $this->input->post('alamat');
            $tmp_lahir = $this->input->post('tmp_lahir');
            $tggl_lahir = $this->input->post('tggl_lahir');
            $jenis_k = $this->input->post('jenis_k');
            $no_tlp = $this->input->post('no_tlp');
            $agama = $this->input->post('agama');

            // ada gambar
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '5000';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('username', $username);
            $this->db->set('nama', $nama);
            $this->db->set('alamat', $alamat);
            $this->db->set('tmp_lahir', $tmp_lahir);
            $this->db->set('tggl_lahir', $tggl_lahir);
            $this->db->set('jenis_k', $jenis_k);
            $this->db->set('no_tlp', $no_tlp);
            $this->db->set('agama', $agama);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Perubahan berhasil disimpan !
            </div>');
            redirect('admin');
        }
    }

    public function ubah_password()
    {
        $data['title'] = 'Sindang Palay | Ubah password';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('password_lama', 'Password lama', 'required|trim');
        $this->form_validation->set_rules('password_baru1', 'Password baru', 'required|trim|min_length[8]|matches[password_baru2]', [
            'matches' => 'Password tidak sesuai!',
            'min_length' => 'Password terlalu pendek'
        ]);
        $this->form_validation->set_rules('password_baru2', 'Konfirmasi password baru', 'required|trim|min_length[8]|matches[password_baru1]', [
            'matches' => 'Password tidak sesuai!',
            'min_length' => 'Password terlalu pendek'
        ]);


        if ($this->form_validation->run() == false) {

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('admin/ubah_password', $data);
            $this->load->view('template/footer');
        } else {
            $password_lama = $this->input->post('password_lama');
            $password_baru = $this->input->post('password_baru1');
            if (!password_verify($password_lama, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Password lama salah !
        </div>');
                redirect('admin/ubah_password');
            } else {
                if ($password_lama == $password_baru) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Password baru tidak boleh sama dengan password lama !</div>');
                    redirect('admin/ubah_password');
                } else {
                    //sandi ok
                    $password_hash = password_hash($password_baru, PASSWORD_DEFAULT);
                    $this->db->set('password', $password_hash);
                    $this->db->where('username', $this->session->userdata('username'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Password telah diubah !</div>');
                    redirect('admin');
                }
            }
        }
    }

    public function role()
    {
        $data['title'] = 'Sindang Palay | Role';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('template/footer');
    }

    public function add_role()
    {
        $data['title'] = 'Sindang Palay | Role';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('admin/add_role', $data);
            $this->load->view('template/footer');
        } else {
            $role = $this->input->post('role');
            $this->db->set('role', $role);
            $this->db->insert('user_role');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Role baru telah dibuat !
        </div>');
            redirect('admin/role');
        }
    }

    public function roleAccess($role_id)
    {
        $data['title'] = 'Sindang Palay | Role Akses';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();


        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
        $this->db->where('id !=' . 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/role-akses', $data);
        $this->load->view('template/footer');
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akses telah diubah !</div>');
    }

    public function berkas_msk()
    {
        $data['title'] = 'Sindang Palay | Berkas masuk';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['berkas'] = $this->db->get('berkas_masuk')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('berkas/berkas_msk', $data);
        $this->load->view('template/footer');
    }

    public function berkas_klr()
    {
        $data['title'] = 'Sindang Palay | Berkas keluar';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['berkas'] = $this->db->get('berkas_keluar')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('berkas/berkas_klr', $data);
        $this->load->view('template/footer');
    }

    public function berkas_dntr()
    {
        $data['title'] = 'Sindang Palay | Berkas diantar';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['berkas'] = $this->db->get('berkas_diantar')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('berkas/berkas_dntr', $data);
        $this->load->view('template/footer');
    }

    public function post()
    {
        $data['title'] = 'Sindang Palay | Tambah postingan';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('judul', 'Judul Postingan', 'required|trim');
        $this->form_validation->set_rules('desc', 'Deskripsi Postingan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('admin/gallery', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'deskripsi' => $this->input->post('desc'),
                'tggl_post' => date('Y-m-d')
            ];

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']      = '5000';
                $config['upload_path'] = './assets/img/postingan/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->db->insert('posting', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Postingan baru ditambahkan !
        </div>');
            redirect('admin/post_');
        }
    }

    public function post_()
    {
        $data['title'] = 'Sindang Palay | Daftar postingan';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['post'] = $this->db->get('posting')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('admin/d_post', $data);
        $this->load->view('template/footer');
    }

    public function ubah_post()
    {
        $data['title'] = 'Sindang Palay | Ubah postingan';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['post'] = $this->db->get('posting')->result_array();
        $id = $this->uri->segment(3);
        $data['post'] = $this->db->get_where('posting', ['id' => $id])->row_array();

        $this->form_validation->set_rules('judul', 'Judul Postingan', 'required|trim');
        $this->form_validation->set_rules('desc', 'Deskripsi Postingan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('admin/ubah_post', $data);
            $this->load->view('template/footer');
        } else {
            $this->ubah_g();
        }
    }

    private function ubah_g()
    {
        $id_posting = $this->input->post('id_posting');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('desc');
        $tggl_post = date("Y-m-d");

        // ada gambar
        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '5000';
            $config['upload_path'] = './assets/img/postingan/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->db->set('judul', $judul);
        $this->db->set('deskripsi', $deskripsi);
        $this->db->set('tggl_post', $tggl_post);
        $this->db->where('id', $id_posting);
        $this->db->update('posting');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Postingan telah diubah !
            </div>');
        redirect('admin/post_');
    }

    public function hapus_post($id)
    {
        $this->load->model('Admin_m');
        $this->Admin_m->hapus_post($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Postingan berhasil dihapus!
            </div>');
        redirect('admin/post_');
    }

    function download($id)
    {
        $this->load->helper('download');
        $data = $this->db->get_where('berkas_masuk', ['id_berkas' => $id])->row();
        force_download('assets/document/' . $data->berkas, NULL);
    }

    public function brks_klr()
    {
        $brks_klr = [
            'id_berkas' => $this->input->post('id_berkas'),
            'nama_berkas' => $this->input->post('nama_berkas'),
            'nama' => $this->input->post('nama'),
            'berkas' => $this->input->post('berkas'),
            'alamat' => $this->input->post('alamat'),
            'no_tlp' => $this->input->post('no_tlp'),
            'is_read' => 0,
            'tggl_brks' => date("Y-m-d")
        ];
        $this->db->insert('berkas_keluar', $brks_klr);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berkas berhasil ditarik !
        </div>');
        redirect('admin/berkas_klr');
    }

    public function brks_dntr()
    {
        $brks_dntr = [
            'id_berkas' => $this->input->post('id_berkas'),
            'nama_berkas' => $this->input->post('nama_berkas'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_tlp' => $this->input->post('no_tlp'),
            'is_read' => 0,
            'tggl_brks' => date("Y-m-d")
        ];
        $this->db->insert('berkas_diantar', $brks_dntr);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berkas berhasil diantar !
        </div>');
        redirect('admin/berkas_dntr');
    }
}
