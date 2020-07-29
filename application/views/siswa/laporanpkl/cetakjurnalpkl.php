<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PDF extends FPDF
{
    // Page header
    function Header()
    {
        if ($this->PageNo() == 1) {
            $this->setFont('Arial', 'B', 14);
            $this->setFillColor(255, 255, 255);
            $this->cell(0, 3, 'JURNAL KEGIATAN PRAKTIK KERJA LAPANGAN', 0, 1, 'C', 1);
            // Line break
            $this->Ln(8);
            $this->setFont('Arial', 'B', 11);
            $this->setFillColor(160, 160, 160);
            $this->cell(35, 10, 'Tanggal Kegiatan', 1, 0, 'C', 1);
            $this->cell(65, 10, 'Topik Pekerjaan', 1, 0, 'C', 1);
            $this->cell(70, 10, 'Rujukan Kompetensi Dasar', 1, 1, 'C', 1);
        } else {
            // Line break
            $this->setFont('Arial', 'B', 11);
            $this->setFillColor(160, 160, 160);
            $this->cell(35, 10, 'Tanggal Kegiatan', 1, 0, 'C', 1);
            $this->cell(65, 10, 'Topik Pekerjaan', 1, 0, 'C', 1);
            $this->cell(70, 10, 'Rujukan Kompetensi Dasar', 1, 1, 'C', 1);
        }
    }

    function Content($jurnal_pkl)
    {
        function custom_echo($x, $length)
        {
            if (strlen($x) <= $length) {
                return $x;
            }
            return substr($x, 0, $length) . '...';
        }

        foreach ($jurnal_pkl as $jurnal) {
            $this->SetFont('Arial', '', 10);
            $this->setFillColor(255, 255, 255);
            $this->cell(35, 8, $jurnal->tanggal, 1, 0, 'C', 0);
            $this->cell(65, 8, (custom_echo($jurnal->topik_pekerjaan, 35)), 1, 0, 'L', 1);
            $this->cell(70, 8, (custom_echo($jurnal->kompetensi_dasar, 38)), 1, 1, 'L', 1);
        }
    }

    // Page footer
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', '', 9);
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
$pdf->Content($jurnal_pkl);
$pdf->Output();
