<?php

include('koneksi-db.php');

//get id
$NIK = $_GET['NIK'];

$query = "DELETE FROM db_kariyawan WHERE NIK = '$NIK'";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>