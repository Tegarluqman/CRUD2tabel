<?php
include ("koneksi.php");
if(isset($_POST['daftar'])){
          $nama=$_POST['nama'];
          $almt=$_POST['alamat'];
          $jk=$_POST['jenis_kelamin'];
          $mapel=$_POST['nama_mapel'];  
          $rg=$_POST['ruangan'];


          $sql = "INSERT INTO tb_mapel (nama_mapel,ruangan) VALUES ('$mapel','$rg')";
          $query = mysqli_query($kon, $sql); 

          $sql="SELECT max(kode_mapel)AS mapel FROM tb_mapel LIMIT 1";
          $query = mysqli_query($kon, $sql);                                                                             

          $data=mysqli_fetch_array($query);
          $mpl=$data['mapel'];
          
          $sql="INSERT INTO tb_guru(nama_guru, alamat, jenis_kelamin, kode_mapel) VALUES ('$nama','$almt','$jk','$mpl')";
          $query = mysqli_query($kon, $sql);
          

          if($query){
                    header('location:list-data.php?status=sukses');
          }else{
                    header('location:list-data.php?status=gagal');
          }
          }
          ?>