<?php

$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTitle('Laporan Program PKL');
$pdf->SetPrintHeader(false);
$pdf->SetPrintFooter(false);
$pdf->SetHeaderMargin(0);
$pdf->SetTopMargin(10);
$pdf->setFooterMargin(10);
$pdf->SetAutoPageBreak(true);
$pdf->SetAuthor('Author');
$pdf->SetDisplayMode('real', 'default');
$pdf->SetFont('Arial', '', 11, '', 'false');
$pdf->AddPage();
$i = 0;
$html = '
    <h1 style="text-align:center; font-weight: bold;">PROGRAM PRAKTIK KERJA LAPANGAN (PKL)</h1>
    <blockquote>
    <table>
  <tr>
    <td width="30%">Nama Peserta PKL</td>
    <td> : ' . $data_program_pkl->nama_siswa . '</td>
  </tr>
  <tr>
    <td width="30%">Kelas</td>
    <td> : ' . $data_program_pkl->kelas . '</td>
  </tr>
  <tr>
    <td width="30%">Semester</td>
    <td> : 4</td>
  </tr>
  <tr>
    <td width="30%">Paket Keahlian</td>
    <td> : ' . $data_program_pkl->nama_jurusan . '</td>
  </tr>
  <tr>
    <td width="30%">Nama DUDI</td>
    <td> : ' . $data_program_pkl->nama_dudi . '</td>
  </tr>
  <tr>
    <td width="30%">Alamat</td>
    <td> : ' . $data_program_pkl->alamat_dudi . '</td>
  </tr>
  <tr>
    <td width="30%">Waktu PKL</td>
    <td> : ' . $data_program_pkl->tanggal_masuk . ' - ' . $data_program_pkl->tanggal_keluar . '</td>
  </tr>
    <tr>
    <td></td>
  </tr>
</table>
    </blockqoute>
                    <table style="margin-top: 25px;" cellspacing="2" bgcolor="#666666" cellpadding="2">
                        <tr bgcolor="#ffffff">
                            <th width="30%" align="center">Kompetensi Dasar</th>
                            <th width="35%" align="center">Topik Pekerjaan</th>
                            <th width="15%" align="center">Urutan Waktu Pelaksanaan</th>
                            <th width="20%" align="center">DUDI / Institusi Pasangan</th>
                        </tr>';
foreach ($program_pkl as $row) {
  $html .= '<tr bgcolor="#ffffff">
                            <td style="text-align:justify;">' . $row['kompetensi_dasar'] . '</td>
                            <td style="text-align:justify;">' . $row['topik_pekerjaan'] . '</td>
                            <td align="center">' . $row['tanggal'] . '</td>
                            <td align="center">' . $row['nama_dudi'] . '</td>
                        </tr>';
}
$html .= '</table>';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('Laporan.pdf', 'I');
