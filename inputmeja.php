<?php
if (isset($_POST['submit'])) {
    include_once('koneksirumahmakan.php');
    $NamaMeja=mysqli_real_escape_string($kon,$_POST['NamaMeja']);
    $Potongan=mysqli_real_escape_string($kon,$_POST['Potongan']);
    $sql="INSERT INTO `DaftarMeja`(`NamaMeja`, `Potongan`) VALUES ('".$NamaMeja."','".$Potongan."')";
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