<?php
include("koneksi.php");

$id = $_GET ['id_guru'];

mysqli_query($kon,"DELETE FROM tb_guru where id_guru='$id'");
mysqli_query($kon,"DELETE FROM tb_mapel where kode_mapel='$id'");


          header("Location:list-data.php?status-sukses");

?>