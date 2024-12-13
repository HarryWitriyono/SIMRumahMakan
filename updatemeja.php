<?php
if (isset($_POST['submit'])) {
    include_once('koneksirumahmakan.php');
    $NomorMeja=mysqli_real_escape_string($kon,$_POST['NomorMeja']);
    $NamaMeja=mysqli_real_escape_string($kon,$_POST['NamaMeja']);
    $Potongan=mysqli_real_escape_string($kon,$_POST['Potongan']);
    $sql="UPDATE `DaftarMeja` SET `NamaMeja`='".$NamaMeja."',`Potongan`='".$Potongan."' WHERE `NomorMeja`='".$NomorMeja."'";
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