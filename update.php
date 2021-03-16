<?php
include 'koneksi.php';
$id =$_POST['id'];
$nama =$_POST['alamat'];
$alamat =$_POST['alamat'];
$pekerjaan =$_POST['pekerjaan'];
mysql_query("UPDATE user1 ST nama='$nama', alamat='$alamat', pekerjaan='$pekerjaan' WHERE id='$id' ");

header("location:index.php?pesan=update");
?>