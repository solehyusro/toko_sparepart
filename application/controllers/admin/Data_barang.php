<?php
class Data_barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != 'Admin') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Anda Belum Login!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect('user/login');
        }
    }

    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar_admin');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $kd_brg = $this->input->post('kd_brg');
        $nm_brg = $this->input->post('nm_brg');
        $stok = $this->input->post('stok');
        $merk = $this->input->post('merk');
        $harga = $this->input->post('harga');
        $gambar = $_FILES['gambar'];

        if ($gambar = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';


            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal di Upload!";
                die();
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = array(
            'kd_brg' => $kd_brg,
            'nm_brg' => $nm_brg,
            'stok'     => $stok,
            'merk' => $merk,
            'harga' => $harga,
            'gambar' => $gambar
        );

        $this->model_barang->tambah_barang($data, 'barang');
        redirect('admin/data_barang/index');
    }

    public function edit($kd_brg)
    {
        $where = array('kd_brg' => $kd_brg);
        $data['barang'] = $this->model_barang->edit_barang($where, 'barang')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar_admin');
        $this->load->view('admin/edit_barang', $data);
        $this->load->view('templates/footer');
    }
    public function update()
    {
        $kd_brg = $this->input->post('kd_brg');
        $nm_brg = $this->input->post('nm_brg');
        $stok   = $this->input->post('stok');
        $merk   = $this->input->post('merk');
        $harga  = $this->input->post('harga');

        $data = array(

            'nm_brg'    => $nm_brg,
            'stok'      => $stok,
            'merk'      => $merk,
            'harga'     => $harga,

        );
        $where = array(
            'kd_brg' => $kd_brg
        );
        $this->model_barang->update_barang($where, $data, 'barang');
        redirect('admin/data_barang/index');
    }

    public function hapus($kd_brg)
    {
        $where = array('kd_brg' => $kd_brg);
        $this->model_barang->hapus_barang($where, 'barang');
        redirect('admin/data_barang/index');
    }
}
