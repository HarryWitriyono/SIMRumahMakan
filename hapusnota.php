<?php
if (isset($_POST['submit'])) {
    include_once('koneksirumahmakan.php');
    $NomorNota=mysqli_real_escape_string($kon,$_POST['NomorNota']);
    $sql="DELETE FROM `StrukNota` WHERE  `NomorNota`='".$NomorNota."'";
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