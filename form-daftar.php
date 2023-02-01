<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Done</title>
</head>
<body>
    <header>
        <h3> Form Tambah Data </h3>
</header>

<form action ="proses-daftar.php" method="POST">
<a href ="index.php" value="Kembali"></a>
<fieldset>

<p>
    <label for="nama">Nama: </label>
    <input type="text" name="nama"/>
</p>

<p>
    <label for="alamat">Alamat: </label>
    <textarea name="alamat"></textarea>
</p>

<p>
    <label for="jenis_kelamin"> Jenis Kelamin: </label>
    <label><input type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki-Laki </label>
    <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan </label>
</p>

<p>
    <label for="nama_mapel"> Nama Mapel: </label>
    <input type="text" name="nama_mapel"/>
</p>
<p>
    <label for="ruangan"> Ruangan: </label>
    <input type="text" name="ruangan"/>
</p>

<p>
    <input type="submit" value="Daftar" name="daftar" />
</p>

</fieldset>

</form>

</body>

</html>