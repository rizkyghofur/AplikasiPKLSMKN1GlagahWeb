<?php

$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTitle('Laporan Program PKL - '  . $data_program_pkl->nama_siswa);
$pdf->SetPrintHeader(false);
$pdf->SetPrintFooter(true);
$pdf->SetHeaderMargin(0);
$pdf->SetTopMargin(20);
$pdf->SetRightMargin(20);
$pdf->SetLeftMargin(30);
$pdf->setFooterMargin(20);
$pdf->SetAuthor('SMKN 1 Glagah');
$pdf->SetDisplayMode('real', 'default');
$pdf->SetFont('Arial', '', 11, '', 'false');
$pdf->AddPage();
$html = '
    <h2 style="text-align:center;">PROGRAM PRAKTIK KERJA LAPANGAN (PKL)</h2>
    <table>
    <tr>
    <td></td>
  </tr>
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
    <td> : ' . date("d-m-Y", strtotime($data_program_pkl->tanggal_masuk)) . ' - ' . date("d-m-Y", strtotime($data_program_pkl->tanggal_keluar)) . '</td>
  </tr>
    <tr>
    <td></td>
  </tr>
  <tr>
  <td></td>
</tr>
</table>
                    <table style="margin-top: 25px;" cellspacing="2" bgcolor="#666666" cellpadding="2">
                        <tr bgcolor="#ffffff">
                            <th width="30%" align="center">Kompetensi Dasar</th>
                            <th width="30%" align="center">Topik Pekerjaan</th>
                            <th width="20%" align="center">Urutan Waktu Pelaksanaaan</th>
                            <th width="20%" align="center">DUDI / Institusi Pasangan</th>
                        </tr>';
foreach ($program_pkl as $row) {
  $html .= '<tr bgcolor="#ffffff">
                            <td style="text-align:justify;">' . $row['kompetensi_dasar'] . '</td>
                            <td style="text-align:justify;">' . $row['topik_pekerjaan'] . '</td>
                            <td align="center">' . date("d-m-Y", strtotime($row['tanggal'])) . '</td>
                            <td align="center">' . $row['nama_dudi'] . '</td>
                        </tr>';
}
$html .= '</table>';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('Laporan Program PKL ' . $data_program_pkl->nama_siswa . '.pdf', 'I');
