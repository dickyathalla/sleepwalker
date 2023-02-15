<?php
include "koneksi.php";
require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
 
// buat nama sheetnya
$sheet->setTitle('Sheet 1');
// nama kolom dibaris pertama
$sheet->setCellValue('A1', 'ID Number');
$sheet->setCellValue('B1', 'Nama Barang');
$sheet->setCellValue('C1', 'Merk');
$sheet->setCellValue('D1', 'Warna');
$sheet->setCellValue('E1', 'Jumlah');
$sheet->setCellValue('F1', 'Diupdate');
 
// timestamp
$tz = 'Asia/Jakarta';
$dt = new DateTime("now", new DateTimeZone($tz));
$timestamp = $dt->format('Y-m-d G:i:s');
 
$formatTanggal = \PhpOffice\PhpSpreadsheet\Shared\Date::PHPToExcel($timestamp);
$data = mysqli_query($koneksi,"SELECT no,nama_barang,nama_merek,warna,jumlah FROM data");
// mulai dari baris kedua
// baris pertama untuk nama kolom
$row = 2;
while($record = mysqli_fetch_array($data))
{
    $sheet->setCellValue('A'.$row, $record['no']);
    $sheet->setCellValue('B'.$row, $record['nama_barang']);
    $sheet->setCellValue('C'.$row, $record['nama_merek']);
    $sheet->setCellValue('D'.$row, $record['warna']);
    $sheet->setCellValue('E'.$row, $record['jumlah']);
    $sheet->setCellValue('F'.$row, $formatTanggal);
    $row++;
}
 
// format tanggal di kolom C 
$spreadsheet->getActiveSheet()->getStyle('F')
    ->getNumberFormat()
    ->setFormatCode(
        \PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_DATE_DATETIME
    );
 
$writer = new Xlsx($spreadsheet);
// set header agar file di download
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header("Content-Transfer-Encoding: Binary");
header('Content-disposition: attachment; filename="Data Barang.xlsx"');
header('Cache-Control: max-age=0');
$writer->save("php://output");
?>
