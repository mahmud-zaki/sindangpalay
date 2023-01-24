<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_m');
    }

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

    public function autonumber()
    {
        $kode = 'BRKS';
        $this->db->select('RIGHT(berkas_masuk.id_berkas,3) as id_berkas', false);
        $this->db->order_by('id_berkas', 'DESC');
        $this->db->limit(1);
        $sql = $this->db->get('berkas_masuk');

        if ($sql->num_rows() <> 0) {
            $data = $sql->row();
            $autonumber = intval($data->id_berkas) + 1;
        } else {
            $autonumber = 1;
        }

        $limit = str_pad($autonumber, 3, "0", STR_PAD_LEFT);
        $id_berkas = $kode . $limit;
        return $id_berkas;
    }

    public function ket_usaha()
    {
        $data['title'] = 'Pengurusan berkas keterangan usaha';

        $this->form_validation->set_rules('nama', 'Nama pemohon', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat pemohon', 'required|trim');
        $this->form_validation->set_rules('no_tlp', 'No. telepon pemohon', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header_', $data);
            $this->load->view('template/topbar_', $data);
            $this->load->view('berkas/ket_usaha', $data);
            $this->load->view('template/footer_');
        } else {
            $ket_usaha = [
                'id_berkas' => $this->autonumber(),
                'nama_berkas' => $this->input->post('nama_berkas'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'no_tlp' => $this->input->post('no_tlp'),
                'is_read' => 0,
                'tggl_brks' => date("Y-m-d")
            ];

            $upload_file = $_FILES['berkas']['name'];

            if ($upload_file) {
                $config['allowed_types'] = 'pdf|csv';
                $config['max_size']      = '5000';
                $config['upload_path'] = './assets/document/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('berkas')) {
                    $new_file = $this->upload->data('file_name');
                    $this->db->set('berkas', $new_file);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            // $config['upload_path']   = './assets/document/';
            // $config['allowed_types'] = 'gif|jpg|png|pdf|csv|doc|docx';
            // $config['max_size']      = 0;
            // $this->load->library('upload', $config);

            // $this->upload->do_upload('berkas1');
            // $berkas1 = $this->upload->data('file_name');
            // $this->db->set('berkas1', $berkas1);

            // $this->upload->do_upload('berkas2');
            // $berkas2 = $this->upload->data('file_name');
            // $this->db->set('berkas2', $berkas2);

            // $this->upload->do_upload('berkas3');
            // $berkas3 = $this->upload->data('file_name');
            // $this->db->set('berkas3', $berkas3);

            // $this->upload->do_upload('berkas4');
            // $berkas4 = $this->upload->data('file_name');
            // $this->db->set('berkas4', $berkas4);

            // $this->upload->do_upload('berkas5');
            // $berkas5 = $this->upload->data('file_name');
            // $this->db->set('berkas5', $berkas5);

            // $this->upload->do_upload('berkas6');
            // $berkas6 = $this->upload->data('file_name');
            // $this->db->set('berkas6', $berkas6);

            // $this->upload->do_upload('berkas7');
            // $berkas7 = $this->upload->data('file_name');
            // $this->db->set('berkas7', $berkas7);

            // $this->upload->do_upload('berkas8');
            // $berkas8 = $this->upload->data('file_name');
            // $this->db->set('berkas8', $berkas8);

            // $this->upload->do_upload('berkas9');
            // $berkas9 = $this->upload->data('file_name');
            // $this->db->set('berkas9', $berkas9);

            // $this->upload->do_upload('berkas10');
            // $berkas10 = $this->upload->data('file_name');
            // $this->db->set('berkas10', $berkas10);
            $this->db->insert('berkas_masuk', $ket_usaha);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berkas berhasil dikirim !
            </div>');
            redirect('user/ket_usaha');
        }
    }

    public function ket_domisili()
    {
        $data['title'] = 'Pengurusan berkas keterangan domisili';

        $this->form_validation->set_rules('nama', 'Nama pemohon', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat pemohon', 'required|trim');
        $this->form_validation->set_rules('no_tlp', 'No. telepon pemohon', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header_', $data);
            $this->load->view('template/topbar_', $data);
            $this->load->view('berkas/surat_ket_domisil', $data);
            $this->load->view('template/footer_');
        } else {
            $ket_domisil = [
                'id_berkas' => $this->autonumber(),
                'nama_berkas' => $this->input->post('nama_berkas'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'no_tlp' => $this->input->post('no_tlp'),
                'is_read' => 0,
                'tggl_brks' => date("Y-m-d")
            ];

            $upload_file = $_FILES['berkas']['name'];

            if ($upload_file) {
                $config['allowed_types'] = 'pdf|csv';
                $config['max_size']      = '5000';
                $config['upload_path'] = './assets/document/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('berkas')) {
                    $new_file = $this->upload->data('file_name');
                    $this->db->set('berkas', $new_file);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->db->insert('berkas_masuk', $ket_domisil);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berkas berhasil dikirim !
            </div>');
            redirect('user/ket_domisil');
        }
    }

    public function ket_kematian()
    {
        $data['title'] = 'Pengurusan Berkas Keterangan Kematian';

        $this->form_validation->set_rules('nama', 'Nama pemohon', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat pemohon', 'required|trim');
        $this->form_validation->set_rules('no_tlp', 'No. telepon pemohon', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header_', $data);
            $this->load->view('template/topbar_', $data);
            $this->load->view('berkas/ket_kematian', $data);
            $this->load->view('template/footer_');
        } else {
            $ket_kematian = [
                'id_berkas' => $this->autonumber(),
                'nama_berkas' => $this->input->post('nama_berkas'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'no_tlp' => $this->input->post('no_tlp'),
                'is_read' => 0,
                'tggl_brks' => date("Y-m-d")
            ];

            $upload_file = $_FILES['berkas']['name'];

            if ($upload_file) {
                $config['allowed_types'] = 'pdf|csv';
                $config['max_size']      = '5000';
                $config['upload_path'] = './assets/document/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('berkas')) {
                    $new_file = $this->upload->data('file_name');
                    $this->db->set('berkas', $new_file);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->db->insert('berkas_masuk', $ket_kematian);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berkas berhasil dikirim !
            </div>');
            redirect('user/ket_kematian');
        }
    }

    public function ket_kawin()
    {
        $data['title'] = 'Pengurusan Berkas Keterangan Status Perkawinan';

        $this->form_validation->set_rules('nama', 'Nama pemohon', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat pemohon', 'required|trim');
        $this->form_validation->set_rules('no_tlp', 'No. telepon pemohon', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header_', $data);
            $this->load->view('template/topbar_', $data);
            $this->load->view('berkas/ket_kawin', $data);
            $this->load->view('template/footer_');
        } else {
            $ket_kawin = [
                'id_berkas' => $this->autonumber(),
                'nama_berkas' => $this->input->post('nama_berkas'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'no_tlp' => $this->input->post('no_tlp'),
                'is_read' => 0,
                'tggl_brks' => date("Y-m-d")
            ];

            $upload_file = $_FILES['berkas']['name'];

            if ($upload_file) {
                $config['allowed_types'] = 'pdf|csv';
                $config['max_size']      = '5000';
                $config['upload_path'] = './assets/document/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('berkas')) {
                    $new_file = $this->upload->data('file_name');
                    $this->db->set('berkas', $new_file);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->db->insert('berkas_masuk', $ket_kawin);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berkas berhasil dikirim !
            </div>');
            redirect('user/ket_kawin');
        }
    }

    public function ket_pindah()
    {
        $data['title'] = 'Pengurusan Berkas Keterangan Pindah Domisili';

        $this->form_validation->set_rules('nama', 'Nama pemohon', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat pemohon', 'required|trim');
        $this->form_validation->set_rules('no_tlp', 'No. telepon pemohon', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header_', $data);
            $this->load->view('template/topbar_', $data);
            $this->load->view('berkas/ket_pindah_dom', $data);
            $this->load->view('template/footer_');
        } else {
            $ket_pindah = [
                'id_berkas' => $this->autonumber(),
                'nama_berkas' => $this->input->post('nama_berkas'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'no_tlp' => $this->input->post('no_tlp'),
                'is_read' => 0,
                'tggl_brks' => date("Y-m-d")
            ];

            $upload_file = $_FILES['berkas']['name'];

            if ($upload_file) {
                $config['allowed_types'] = 'pdf|csv';
                $config['max_size']      = '5000';
                $config['upload_path'] = './assets/document/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('berkas')) {
                    $new_file = $this->upload->data('file_name');
                    $this->db->set('berkas', $new_file);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->db->insert('berkas_masuk', $ket_pindah);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berkas berhasil dikirim !
            </div>');
            redirect('user/ket_pindah');
        }
    }

    public function isi_blog($id_post)
    {
        $data['title'] = 'Selamat Datang | Sindang Palay';
        $data['post'] = $this->User_m->detail($id_post);

        $this->load->view('template/header_', $data);
        $this->load->view('template/topbar_', $data);
        $this->load->view('user/blog', $data);
        $this->load->view('template/footer_');
    }
}
