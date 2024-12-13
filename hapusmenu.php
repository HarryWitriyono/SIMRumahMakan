<?php
if (isset($_POST['submit'])) {
    include_once('koneksirumahmakan.php');
    $KodeMenu=mysqli_real_escape_string($kon,$_POST['KodeMenu']);
    $sql="DELETE FROM `DaftarMenu` WHERE `KodeMenu`='".$KodeMenu."'";
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