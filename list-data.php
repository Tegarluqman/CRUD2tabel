<!DOCTYPE html>
<html>
    <head>
        <title>Data Guru</title>
    </head>
    <body>
        <header>
            <h3> Guru Yang Mengajar </h3>
</header>
<table border="1">
  <tr>
   
   <td>Nama</td>
   <td>Alamat</td>
   <td>Jenis Kelamin</td>
   <td>Mapel</td>
   <td>ruangan</td>
   <td>aksi</td>
  </tr>

        <?php
        include("koneksi.php");
        $query = mysqli_query($kon, "SELECT * FROM tb_guru INNER JOIN tb_mapel ON tb_guru.kode_mapel = tb_mapel.kode_mapel");
        
        while($siswa=mysqli_fetch_array($query)){
                       echo "<tr>";      
                       echo "<td>".$siswa['nama_guru']."</td>";
                       echo "<td>".$siswa['alamat']."</td>";
                       echo "<td>".$siswa['jenis_kelamin']."</td>";
                       echo "<td>".$siswa['nama_mapel']."</td>";
                       echo "<td>".$siswa['ruangan']."</td>";
                       echo "<td>";
                       echo "<a href='edit.php?id_guru=".$siswa['id_guru']."'>Edit</a> |";
                       echo "<a href='hapus.php?id_guru=".$siswa['id_guru']."'>Hapus</a>";
                       echo "</td>";

                       echo "</tr>";
           }
        ?>
        <a href="form-daftar.php"><input type="button"  value="tambah">  
</table>
</body>
</html>