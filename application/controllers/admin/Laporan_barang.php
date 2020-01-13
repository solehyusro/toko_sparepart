<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Laporan_barang extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('cetak_pdf');
    }

    function index()
    {
        $pdf = new FPDF('P', 'mm', 'Letter');

        $pdf->AddPage();

        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 7, 'LAPORAN DATA BARANG', 0, 1, 'C');
        $pdf->Cell(10, 7, '', 0, 1);

        $pdf->SetFont('Arial', 'B', 10);

        $pdf->Cell(8, 6, 'No', 1, 0, 'C');
        $pdf->Cell(30, 6, 'Kode Barang', 1, 0, 'C');
        $pdf->Cell(70, 6, 'Nama Barang', 1, 0, 'C');
        $pdf->Cell(35, 6, 'Harga', 1, 0, 'C');
        $pdf->Cell(35, 6, 'Merk', 1, 0, 'C');

        $pdf->Cell(15, 6, 'Stok', 1, 1, 'C');

        $pdf->SetFont('Arial', '', 10);
        $barang = $this->db->get('barang')->result();
        $no = 1;
        foreach ($barang as $data) {
            $pdf->Cell(8, 6, $no, 1, 0);
            $pdf->Cell(30, 6, $data->kd_brg, 1, 0);
            $pdf->Cell(70, 6, $data->nm_brg, 1, 0);
            $pdf->Cell(35, 6, "Rp " . number_format($data->harga, 0, ".", "."), 1, 0);
            $pdf->Cell(35, 6, $data->merk, 1, 0);
            $pdf->Cell(15, 6, $data->stok, 1, 1);

            $no++;
        }
        $pdf->Output();
    }
    public function tampil_data()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar_admin');
        $this->load->view('admin/laporan_barang', $data);
        $this->load->view('templates/footer');
    }
}
