<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Laporan_penjualan extends CI_Controller
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
        $pdf->Cell(0, 7, 'LAPORAN DATA PENJUALAN', 0, 1, 'C');
        $pdf->Cell(10, 7, '', 0, 1);

        $pdf->SetFont('Arial', 'B', 10);

        $pdf->Cell(8, 6, 'No', 1, 0, 'C');
        $pdf->Cell(50, 6, 'Nama Pemesan', 1, 0, 'C');
        $pdf->Cell(60, 6, 'Alamat', 1, 0, 'C');
        $pdf->Cell(40, 6, 'Tanggal Pemesanan', 1, 0, 'C');
        $pdf->Cell(30, 6, 'Total Belanja', 1, 1, 'C');


        $pdf->SetFont('Arial', '', 10);
        $invoice = $this->db->get('tb_invoice')->result();
        $no = 1;
        foreach ($invoice as $data) {
            $pdf->Cell(8, 6, $no, 1, 0);
            $pdf->Cell(50, 6, $data->nama, 1, 0);
            $pdf->Cell(60, 6, $data->alamat, 1, 0);
            $pdf->Cell(40, 6, $data->tgl_pesan, 1, 0);
            $pdf->Cell(30, 6, $data->total_bayar, 1, 1);
            $no++;
        }
        $pdf->Output();
    }
    public function tampil_data()
    {
        $data['invoice'] = $this->model_invoice->tampil_data();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar_admin');
        $this->load->view('admin/laporan_penjualan', $data);
        $this->load->view('templates/footer');
    }
}
