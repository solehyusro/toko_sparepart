<?php

class User extends CI_Controller
{

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username harus diisi!']);
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password harus diisi!']);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('form_login');
            $this->load->view('templates/footer');
        } else {
            $user = $this->model_user->cek_login();

            if ($user == FALSE) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username dan Password Anda Salah!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
                redirect('user/login');
            } else {
                $this->session->set_flashdata(
                    'sukses',
                    '<div class="alert alert-success" role="alert">
                            <h4>Berhasil </h4>
                            <p>Anda berhasil login ' . $user->nama . '</p>
                        </div>'
                );
                $this->load->view('dashboard');
                $this->session->set_userdata('nama', $user->nama);
                $this->session->set_userdata('username', $user->username);
                $this->session->set_userdata('role_id', $user->role_id);
                switch ($user->role_id) {
                    case 'Admin':
                        redirect('admin/dashboard_admin');
                        break;
                    case 'Pelanggan':
                        redirect('welcome');
                        break;
                    default:
                        break;
                }
            }
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('user/login');
    }
    public function index()
    {
        $data['tb_user'] = $this->model_user->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar_admin');
        $this->load->view('admin/data_user', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_aksi()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $alamat = $this->input->post('alamat');
        $role_id = $this->input->post('role_id');

        $data = array(
            'id' => $id,
            'nama' => $nama,
            'username'  => $username,
            'password' => $password,
            'alamat' => $alamat,
            'role_id' => $role_id
        );

        $this->model_user->tambah_user($data, 'tb_user');
        redirect('user/index');
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['tb_user'] = $this->model_user->edit_user($where, 'tb_user')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar_admin');
        $this->load->view('admin/edit_user', $data);
        $this->load->view('templates/footer');
    }
    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $alamat = $this->input->post('alamat');
        $role_id = $this->input->post('role_id');


        $data = array(
            'id' => $id,
            'nama' => $nama,
            'username'  => $username,
            'password' => $password,
            'alamat' => $alamat,
            'role_id' => $role_id
        );
        $where = array(
            'id' => $id
        );
        $this->model_user->update_user($where, $data, 'tb_user');
        redirect('user/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->model_user->hapus_user($where, 'tb_user');
        redirect('user/index');
    }
}
