<?php
if (isset($_POST['submit'])) {
    include_once('koneksirumahmakan.php');
    $KodeMenu=mysqli_real_escape_string($kon,$_POST['KodeMenu']);
    $NamaMenu=mysqli_real_escape_string($kon,$_POST['NamaMenu']);
    $HargaJual=mysqli_real_escape_string($kon,$_POST['HargaJual']);
    $sql="UPDATE `DaftarMenu` SET `NamaMenu`='".$NamaMenu."',`HargaJual`='".$HargaJual."' WHERE `KodeMenu`='".$KodeMenu."'";
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