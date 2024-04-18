<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Anggota</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

    include('koneksi.php');


    $id = $_GET['id'];
    $query = "SELECT * FROM  anggota WHERE id = $id";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
    mysqli_close($connect);
?>

<div class="container">
    <h2>Edit Data Anggota</h2>
    <form action="proses.php?aksi=ubah" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?> ">

        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="<?php echo $row['nama']; ?>" required>

        <label for="jenis_kelamin" >Jenis Kelamin</label>
        <div class="radio-group">
            <input type="radio" name="jenis_kelamin" value="L" id="Laki" 
            <?php 
                if ($row['jenis_kelamin'] === 'L')  echo 'checked'; 
             ?> required > <label for="laki">Laki-laki</label>
             <input type="radio" name="jenis_kelamin" value="P" id="Perempuan" 
            <?php 
                if ($row['jenis_kelamin'] === 'p')  echo 'checked'; 
             ?> required > <label for="perempuan">LPerempuan</label>
        </div>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" value="<?php echo $row['alamat']; ?>" required>

        <label for="no_telp">No. Telp:</label>
        <input type="text" name="no_telp" id="no_telp" value="<?php echo $row['no_telp']; ?>" required>

        <button type="submit">Simpan Perubahan</button><a href="index.php" class="btn-kembali">Kembali</a>

    </form>
</div>
    
</body>
</html>