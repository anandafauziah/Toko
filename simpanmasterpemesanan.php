<?php
include 'koneksi.php';

$kodepemesanan= $_POST['kodepemesanan'] ;
$tanggal= $_POST['tanggal'] ;
$karyawan= $_POST['karyawan'] ;
$supplier=$_POST['supplier'] ;
$keterangan= $_POST['keterangan'] ; 
$total= $_POST['total'] ; 

$sql = "insert into masterpemesanan values('$kodepemesanan','$tanggal','$karyawan','$supplier', '$keterangan', '$total')";
mysqli_query($conn,$sql);

?>