<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PDF extends FPDF
{

    function DataSiswa($program_pkl)
    {
        $this->setFont('Arial', 'B', 14);
        $this->setFillColor(255, 255, 255);
        $this->cell(0, 3, 'PROGRAM PRAKTIK KERJA LAPANGAN (PKL)', 0, 1, 'C', 1);
        $this->Ln(12);
        $this->setFont('Arial', '', 11);
        $this->setFillColor(255, 255, 255);
        $this->cell(0, 5, '         Nama Peserta PKL          : ' . $program_pkl->nama_siswa, 0, 1, 'L', 1);
        $this->Ln(1);
        $this->cell(0, 5, '         Kelas                                : ' . $program_pkl->kelas, 0, 1, 'L', 1);
        $this->Ln(1);
        $this->cell(0, 5, '         Semester                          : 4', 0, 1, 'L', 1);
        $this->Ln(1);
        $this->cell(0, 5, '         Paket Keahlian                 : ' . $program_pkl->nama_jurusan, 0, 1, 'L', 1);
        $this->Ln(1);
        $this->cell(0, 5, '         Nama DUDI                      : ' . $program_pkl->nama_dudi, 0, 1, 'L', 1);
        $this->Ln(1);
        $this->cell(0, 5, '         Alamat                              : ' . $program_pkl->alamat_dudi, 0, 1, 'L', 1);
        $this->Ln(1);
        $this->cell(0, 5, '         Nama Pembimbing           : ' . $program_pkl->nama_pimpinan, 0, 1, 'L', 1);
        $this->Ln(1);
        $this->cell(0, 5, '         Waktu PKL                       : ' . $program_pkl->tanggal_masuk . ' - ' . $program_pkl->tanggal_keluar, 0, 1, 'L', 1);
    }

    // Page HeaderPKL
    function HeaderPKL()
    {
        if ($this->PageNo() == 1) {
            // Line break
            $this->Ln(8);
            $this->setFont('Arial', 'B', 11);
            $this->setFillColor(160, 160, 160);
            $this->cell(55, 10, 'Kompetensi Dasar', 1, 0, 'C', 1);
            $this->cell(55, 10, 'Topik Pekerjaan', 1, 0, 'C', 1);
            $this->cell(22, 10, 'Tanggal', 1, 0, 'C', 1);
            $this->cell(40, 10, 'DUDI Pasangan', 1, 1, 'C', 1);
        } else {
            // Line break
            $this->setFont('Arial', 'B', 11);
            $this->setFillColor(160, 160, 160);
            $this->cell(35, 10, 'Kompetensi Dasar', 1, 0, 'C', 1);
            $this->cell(55, 10, 'Topik Pekerjaan', 1, 0, 'C', 1);
            $this->cell(22, 10, 'Tanggal', 1, 0, 'C', 1);
            $this->cell(40, 10, 'DUDI Pasangan', 1, 1, 'C', 1);
        }
    }

    function Content($data_program_pkl)
    {
        function custom_echo($x, $length)
        {
            if (strlen($x) <= $length) {
                return $x;
            }
            return substr($x, 0, $length) . '...';
        }

        foreach ($data_program_pkl as $program) {
            $this->SetFont('Arial', '', 10);
            $this->setFillColor(255, 255, 255);
            $this->cell(55, 8, (custom_echo($program->kompetensi_dasar, 30)), 1, 0, 'L', 1);
            $this->cell(55, 8, (custom_echo($program->topik_pekerjaan, 30)), 1, 0, 'L', 1);
            $this->cell(22, 8, $program->tanggal, 1, 0, 'C', 0);
            $this->cell(40, 8, (custom_echo($program->nama_dudi, 25)), 1, 1, 'C', 1);
        }
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        //buat garis horizontal
        //Arial italic 9
        $this->SetFont('Arial', '', 9);
        //nomor halaman
        $this->Cell(0, 10, 'F-WK3-01', 0, 0, 'L');
        $this->Cell(0, 10, 'Rev. 31.08.19 ', 0, 0, 'R');
    }
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->SetMargins(20, 20, 20);
$pdf->SetAutoPageBreak(true, 20);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->DataSiswa($program_pkl);
$pdf->HeaderPKL();
$pdf->Content($data_program_pkl);
$pdf->Output();
