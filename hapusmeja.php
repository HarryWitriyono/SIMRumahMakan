<?php
if (isset($_POST['submit'])) {
    include_once('koneksirumahmakan.php');
    $NomorMeja=mysqli_real_escape_string($kon,$_POST['NomorMeja']);
    $sql="DELETE FROM `DaftarMeja` WHERE `NomorMeja`='".$NomorMeja."'";
    $q=mysqli_query($kon,$sql);
    if ($q) {
        echo 'Rekord sudah dihapus !';
    } else {
        echo 'Rekord gagal dhapus !';
    }
} else {
    echo 'Salah penggunaan API !';
}
?>