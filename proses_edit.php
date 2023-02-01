<?php
include ("koneksi.php");
if(isset($_POST['simpan'])){
          
          $nama=$_POST['nama'];
          $almt=$_POST['alamat'];
          $jk=$_POST['jenis_kelamin'];
          $mpl=$_POST['nama_mapel'];
          $rg=$_POST['ruangan'];
          $id=$_POST['id_guru'];

          $sql="UPDATE tb_guru SET nama_guru='$nama', alamat='$almt', jenis_kelamin='$jk' WHERE id_guru='$id'";
          $query=mysqli_query($kon,$sql);
          
          $sql="UPDATE tb_mapel SET nama_mapel='$mpl', ruangan='$rg' WHERE kode_mapel='$id'";
          $query=mysqli_query($kon,$sql);

          
          

          if($query){
                    header("Location:list-data.php?status=sukses");
          }else{
                    die ("gagal mengedit");
        }  }else{
                    die("akses dilarang");
          }

          ?>