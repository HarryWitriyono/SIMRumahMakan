<?php
if (isset($_POST['submit'])) {
    include_once('koneksirumahmakan.php');
    $NamaMenu=mysqli_real_escape_string($kon,$_POST['NamaMenu']);
    $HargaJual=mysqli_real_escape_string($kon,$_POST['HargaJual']);
    $sql="INSERT INTO `DaftarMenu` (`NamaMenu`, `HargaJual`) VALUES ('".$NamaMenu."','".$HargaJual."')";
    $q=mysqli_query($kon,$sql);
    if ($q) {
        echo 'Rekord sudah disimpan !';
    } else {
        echo 'Rekord gagal disimpan !';
    }
} else {
    echo 'Salah penggunaan API !';
}
?>