<?php

class Registrasi extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama Wajib Diisi!']);
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username Wajib diisi!']);
        $this->form_validation->set_rules('password', 'Password', 'required|matches[confirmPassword]', [
            'required' => 'Password Wajib diisi!',
            'matches' => 'Password Tidak Cocok!'
        ]);
        $this->form_validation->set_rules('confirmPassword', 'Password', 'required|matches[password]');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => 'Alamat Wajib Diisi!']);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('registrasi');
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'id' => '',
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'alamat' => $this->input->post('alamat'),
                'role_id' => 'Pelanggan'
            );
            $this->db->insert('tb_user', $data);
            redirect('user/login');
        }
    }
}
