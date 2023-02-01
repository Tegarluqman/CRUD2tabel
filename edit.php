<?php
include("koneksi.php");

if(!isset($_GET['id_guru'])){
    header("Location:list-data.php");
}

$id = $_GET ['id_guru'];
$sql =("SELECT * FROM tb_guru INNER JOIN tb_mapel ON 
tb_guru.kode_mapel = tb_mapel.kode_mapel
 where tb_guru.id_guru='$id'");

$query=mysqli_query($kon,$sql);
$row =mysqli_fetch_assoc($query);

if(mysqli_num_rows($query)<1){
    die ("data tidak ditemukan");
}

?>
<html>
          <head>
</head>
<body>
          <h1>EDIT</h1>
          <form action="proses_edit.php" method="POST">
                    <form>
                              <fieldset>
                                        <input type="hidden" name="id_guru" value="<?php echo $row['id_guru']?>"/>
                                        <p>
                                                  <label for="nama">nama :</label>
                                                  <input type="text" name="nama" value="<?php echo $row['nama_guru']?>"/>
                                        </p>
                                        <p>
                                                  <label for="kelas">kelas:</label>
                                                  <input type="text" name="alamat"value="<?php echo $row['alamat']?>"/>
                                        </p>
                                        <p>
                                        <label for="jenis_kelamin"> Jenis Kelamin: </label>
                                        <label><input type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki-Laki </label>
                                        <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan </label>
                                        </p>
                                        <p>
                                                  <label for="nama_mapel">Mapel :</label>
                                                  <input type="text" name="nama_mapel"value="<?php echo $row['nama_mapel']?>"/>
                                        </p>
                                        <p>
                                                  <label for="nominal">Ruangan :</label>
                                                  <input type="text" name="ruangan"value="<?php echo $row['ruangan']?>"/>
                                        </p>
                                        <p>
                                                  <input type="submit" value="simpan" name="simpan"/>
</p>
</fieldset>
</form>
</body>
</html>