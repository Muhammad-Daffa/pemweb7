<?php
include 'koneksi.php';
// menyimpan data ke dalam variabel
$nama=$_POST['nama'];
$jkel=$_POST['jenis_kelamin'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$kota=$_POST['kota'];
$pesan=$_POST['pesan'];
// query SQL untuk insert data
$query="INSERT INTO pengguna SET nama='$nama', jkel='$jkel', email='$email', alamat='$alamat', kota='$kota', pesan='$pesan'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:tampilkontak.php");
?>