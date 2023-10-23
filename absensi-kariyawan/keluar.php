<?php 

include('koneksi-db.php');

if (isset($_GET["NIK"])) {

    $NIK = $_GET["NIK"];
   
    $query = "UPDATE db_kariyawan SET Keluar = now() WHERE NIK = '$NIK' ";
    $result = mysqli_query($connection, $query);

    header('Location: index.php');

    
}

?>