<?php 

include 'koneksi-db.php';

$Nik = $_POST['Nik'];
$nama = $_POST['nama_lengkap'];
$jabatan = $_POST['jabatan'];



$query = "INSERT INTO db_kariyawan (NIK, nama, Jabatan, Masuk ) VALUES ('$Nik', '$nama', '$jabatan', now())";

$result = mysqli_query($connection, $query);

header('Location: index.php');

?>