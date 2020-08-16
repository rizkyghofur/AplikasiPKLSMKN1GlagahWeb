<?php

$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTitle('Penilaian PKL');
$pdf->SetPrintHeader(false);
$pdf->SetPrintFooter(false);
$pdf->SetHeaderMargin(0);
$pdf->SetTopMargin(20);
$pdf->SetRightMargin(20);
$pdf->SetLeftMargin(20);
$pdf->setFooterMargin(20);
$pdf->SetAutoPageBreak(false);
$pdf->SetAuthor('SMKN 1 Glagah');
$pdf->SetDisplayMode('real', 'default');
$pdf->SetFont('Arial', '', 12, '', 'false');
$pdf->AddPage();
$i = 0;
$html = '
    <h2 style="text-align:center;">PENILAIAN HASIL KEGIATAN PRAKTIK KERJA LAPANGAN</h2>
    <table>
        <tr>
            <td>Nama DUDI</td>
            <td>: ' . $data_siswa->nama_dudi . ' </td>
            <td>Nama Siswa</td>
            <td>: ' . $data_siswa->nama_siswa . '</td>
        </tr>
        <tr>
            <td>Bidang Usaha</td>
            <td>: ' . $data_siswa->jenis_usaha . '</td>
            <td>NIS</td>
            <td>: ' . $data_siswa->nis . '</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>

<table style="margin-top: 25px;" cellspacing="2" bgcolor="#666666" cellpadding="2">
<thead>
<tr bgcolor="#ffffff">
    <th style="width: 5%">No.</th>
    <th style="width: 75%; text-align: center;">PEKERJAAN / KEGIATAN</th>
    <th style="width: 20%; text-align: center;">Nilai / Prestasi</th>
  </tr>
</thead>
<tbody>
<tr bgcolor="#ffffff">
    <td colspan="3">A. ASPEK TEKNIS ( Sesuai dengan Skema Kerja / Kompetensi Dasar )</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="width: 5%; text-align:center;">1.</td>
    <td style="width: 75%">' . $siswa->aspek_teknis_1 . '</td>
    <td style="width: 20%; text-align:center;">' . $siswa->nilai_astek_1 . '</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="width: 5%; text-align:center;">2.</td>
    <td style="width: 75%">' . $siswa->aspek_teknis_2 . '</td>
    <td style="width: 20%; text-align:center;">' . $siswa->nilai_astek_2 . '</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="width: 5%; text-align:center;">3.</td>
    <td style="width: 75%">' . $siswa->aspek_teknis_3 . '</td>
    <td style="width: 20%; text-align:center;">' . $siswa->nilai_astek_3 . '</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="width: 5%; text-align:center;">4.</td>
    <td style="width: 75%">' . $siswa->aspek_teknis_4 . '</td>
    <td style="width: 20%; text-align:center;">' . $siswa->nilai_astek_4 . '</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="width: 5%; text-align:center;">5.</td>
    <td style="width: 75%">' . $siswa->aspek_teknis_5 . '</td>
    <td style="width: 20%; text-align:center;">' . $siswa->nilai_astek_5 . '</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="width: 5%; text-align:center;">6.</td>
    <td style="width: 75%">' . $siswa->aspek_teknis_6 . '</td>
    <td style="width: 20%; text-align:center;">' . $siswa->nilai_astek_6 . '</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="width: 5%; text-align:center;">7.</td>
    <td style="width: 75%">' . $siswa->aspek_teknis_7 . '</td>
    <td style="width: 20%; text-align:center;">' . $siswa->nilai_astek_7 . '</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="width: 5%; text-align:center;">8.</td>
    <td style="width: 75%">' . $siswa->aspek_teknis_8 . '</td>
    <td style="width: 20%; text-align:center;">' . $siswa->nilai_astek_8 . '</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="width: 5%; text-align:center;">9.</td>
    <td style="width: 75%">' . $siswa->aspek_teknis_9 . '</td>
    <td style="width: 20%; text-align:center;">' . $siswa->nilai_astek_9 . '</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="width: 5%; text-align:center;">10.</td>
    <td style="width: 75%">' . $siswa->aspek_teknis_10 . '</td>
    <td style="width: 20%; text-align:center;">' . $siswa->nilai_astek_10 . '</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="width: 5%; text-align:center;">11.</td>
    <td style="width: 75%">' . $siswa->aspek_teknis_11 . '</td>
    <td style="width: 20%; text-align:center;">' . $siswa->nilai_astek_11 . '</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="width: 5%; text-align:center;">12.</td>
    <td style="width: 75%">' . $siswa->aspek_teknis_12 . '</td>
    <td style="width: 20%; text-align:center;">' . $siswa->nilai_astek_12 . '</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="width: 5%; text-align:center;">13.</td>
    <td style="width: 75%">' . $siswa->aspek_teknis_13 . '</td>
    <td style="width: 20%; text-align:center;">' . $siswa->nilai_astek_13 . '</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="width: 5%; text-align:center;">14.</td>
    <td style="width: 75%">' . $siswa->aspek_teknis_14 . '</td>
    <td style="width: 20%; text-align:center;">' . $siswa->nilai_astek_14 . '</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td colspan="3">B. ASPEK NON TEKNIS</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="width: 5%; text-align:center;">1.</td>
    <td>Disiplin</td>
    <td style="width: 20%; text-align:center;">' . $siswa->nilai_nontek_disiplin . '</td>
  </tr>
  <tr bgcolor="#ffffff">
    <td style="width: 5%; text-align:center;">2.</td>
    <td>Kerjasama</td>
    <td style="width: 20%; text-align:center;">' . $siswa->nilai_nontek_kerjasama . '</td>
  </tr>
  <tr bgcolor="#ffffff">
  <td style="width: 5%; text-align:center;">3.</td>
  <td>Inisiatif</td>
  <td style="width: 20%; text-align:center;">' . $siswa->nilai_nontek_inisiatif . '</td>
</tr>
<tr bgcolor="#ffffff">
  <td style="width: 5%; text-align:center;">4.</td>
  <td>Tanggung Jawab</td>
  <td style="width: 20%; text-align:center;">' . $siswa->nilai_nontek_tanggungjawab . '</td>
</tr>
<tr bgcolor="#ffffff">
<td style="width: 5%; text-align:center;">5.</td>
<td>Kebersihan/Kerapian</td>
<td style="width: 20%; text-align:center;">' . $siswa->nilai_nontek_kebersihan_kerapian . '</td>
</tr>
</tbody>
</table>';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('Penilaian PKL.pdf', 'I');
