<?php

require('fpdf/fpdf.php');
$pdf = new FPDF('P', 'mm','Letter');

$pdf->AddPage();

$pdf->SetFont('Times','B',16);
$pdf->Cell(0,7,'Laporan Pemesanan Lapangan Futsal',0,1,'C');
$pdf->Cell(10,12,'',0,1);

$pdf->SetFont('Times','B',10);

// $pdf->Cell(8,6,'No',1,0,'C');
$pdf->Cell(20,6,'Nama',1,0,'C');
$pdf->Cell(25,6,'No.Telfon',1,0,'C');
$pdf->Cell(25,6,'waktu mulai',1,0,'C');
$pdf->Cell(25,6,'waktu selesai',1,0,'C');
$pdf->Cell(25,6,'Jenis Lapangan',1,0,'C');
$pdf->Cell(25,6,'Tanggal',1,0,'C');
$pdf->Cell(20,6,'Biaya',1,0,'C');
$pdf->Cell(25,6,'Status',1,0,'C');
$pdf->SetFont('Times','',10);

//Membuat Koneksi ke database akademik
$host="localhost";
$user="root";
$password="";
$db="futsal";

$kon = mysqli_connect($host,$user,$password,$db);

$no=1;
//Query untuk mengambil data futsal pada tabel laporan
$hasil = mysqli_query($kon, "select * from laporan");
while ($data = mysqli_fetch_array($hasil)){
//     $pdf->Cell(20,6,$data['id'],1,1);

    $pdf->Cell(0,6,'',0,1);
    $pdf->Cell(20,6,$data['username'],1,0);
    $pdf->Cell(25,6,$data['no_hp'],1,0);
    $pdf->Cell(25,6,$data['jam'],1,0);
    $pdf->Cell(25,6,$data['jam_selesai'],1,0);
    $pdf->Cell(25,6,$data['jenis_lapangan'],1,0);
    $pdf->Cell(25,6,$data['tgl_laporan'],1,0);
    $pdf->Cell(20,6,$data['total'],1,0);
    $pdf->Cell(25,6,$data['status'],1,0);
    $no++;
}
$pdf->Output();
?>

<!-- source https://kelasprogrammer.com/laporan-pdf-dengan-php/ -->