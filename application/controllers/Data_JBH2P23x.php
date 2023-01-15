<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_JBH2P23x extends CI_Controller
{
    public function index()
    {

        $this->form_validation->set_rules('nama', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Alamat email', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
            'is_unique' => 'Username ini sudah terdaftar'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'matches' => 'Password tidak sesuai!',
            'min_length' => 'Password terlalu pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Sindang Palay | Pendaftaran Akun';
            $data['role'] = $this->db->get('user_role')->result_array();
            $this->load->view('template/header', $data);
            $this->load->view('J-BH-2P23x/index', $data);
            $this->load->view('template/footer');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'jabatan' => htmlspecialchars($this->input->post('jabatan')),
                'email' => htmlspecialchars($email),
                'alamat' => htmlspecialchars($this->input->post('alamat')),
                'tmp_lahir' => htmlspecialchars($this->input->post('tmp_lahir')),
                'tggl_lahir' => htmlspecialchars($this->input->post('tggl_lahir')),
                'jenis_k' => htmlspecialchars($this->input->post('jenis_k')),
                'no_tlp' => htmlspecialchars($this->input->post('no_tlp')),
                'agama' => htmlspecialchars($this->input->post('agama')),
                'gambar' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => $this->input->post('role_id'),
                'is_active' => 1,
                'tggl_akun' => date('Y-m-d')
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="color-white alert alert-success">
            Pendaftaran akun baru telah berhasil.</div>');
            redirect('Data_JBH2P23x');
        }
    }
}
