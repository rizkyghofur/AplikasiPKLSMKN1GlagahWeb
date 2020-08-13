<?php

$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTitle('Penilaian PKL');
$pdf->SetPrintHeader(false);
$pdf->SetPrintFooter(true);
$pdf->SetHeaderMargin(0);
$pdf->SetTopMargin(20);
$pdf->SetRightMargin(20);
$pdf->SetLeftMargin(30);
$pdf->setFooterMargin(20);
$pdf->SetAutoPageBreak(true);
$pdf->SetAuthor('SMKN 1 Glagah');
$pdf->SetDisplayMode('real', 'default');
$pdf->SetFont('Arial', '', 11, '', 'false');
$pdf->AddPage();
$i = 0;
$html = '
    <h2 style="text-align:center;">PENILAIAN HASIL KEGIATAN PRAKTIK KERJA LAPANGAN</h2>
    <table>
<thead>
  <tr>
    <th>Nama DUDI</th>
    <th>: </th>
    <th>Nama Siswa</th>
    <th>:</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>Bidang Usaha</td>
    <td>: </td>
    <td>NIS</td>
    <td>:</td>
  </tr>
</tbody>
</table>
<table>
<thead>
  <tr>
    <th>No.</th>
    <th>PEKERJAAN / KEGIATAN</th>
    <th>Nilai / Prestasi</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td colspan="3">A. ASPEK TEKNIS ( Sesuai dengan Skema Kerja / Kompetensi Dasar )</td>
  </tr>
  <tr>
    <td>1</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>2</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>3</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>4</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>5</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>6</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>7</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>8</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>9</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>10</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="3">B. ASPEK NON TEKNIS</td>
  </tr>
  <tr>
    <td>1</td>
    <td>Disiplin</td>
    <td></td>
  </tr>
  <tr>
    <td>2</td>
    <td>Kerjasama</td>
    <td></td>
  </tr>
  <tr>
  <td>3</td>
  <td>Disiplin</td>
  <td></td>
</tr>
<tr>
  <td>4</td>
  <td>Kerjasama</td>
  <td></td>
</tr>
<tr>
<td>5</td>
<td>Kebersihan/Kerapian</td>
<td></td>
</tr>
</tbody>
</table>';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('Penilaian PKL.pdf', 'I');
