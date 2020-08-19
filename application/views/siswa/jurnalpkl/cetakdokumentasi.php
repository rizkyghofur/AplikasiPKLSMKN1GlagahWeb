<?php

$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTitle('Lampiran Dokumentasi Jurnal PKL - '  . $data_jurnal_pkl->nama_siswa);
$pdf->SetPrintHeader(false);
$pdf->SetPrintFooter(true);
$pdf->SetHeaderMargin(0);
$pdf->SetTopMargin(20);
$pdf->SetRightMargin(20);
$pdf->SetLeftMargin(30);
$pdf->setFooterMargin(30);
$pdf->SetAuthor('SMKN 1 Glagah');
$pdf->SetDisplayMode('real', 'default');
$pdf->SetFont('Arial', '', 11, '', 'false');
$pdf->AddPage();
$i = 0;
$html = '
<h2 style="text-align:center;">Lampiran</h2>
                    <table style="margin-top: 10px; margin-bottom: 20px;" cellspacing="2" cellpadding="6">
                        <tr bgcolor="#ffffff">
                            <th align="center"></th>
                        </tr>';

foreach ($jurnal_pkl as $row) {
  if ($row['dokumentasi'] != 'default.jpg') {
    $html .= '<tr bgcolor="#ffffff">
                            <td align="center"><img src="dokumentasi/' . $row['dokumentasi'] . '" width="400" height="270"><br>' . $row['topik_pekerjaan'] . '<br></td>
                        </tr>';
  }
}
$html .= '</table>';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('Laporan Jurnal PKL - '  . $data_jurnal_pkl->nama_siswa . '.pdf', 'I');
