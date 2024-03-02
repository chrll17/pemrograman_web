<?php
include 'function.php';
$id=$_GET['id'];
$film=query("SELECT * from film where id=$id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <ul>
        <li><img src="<?= $film['gambar']?>" width="100"></li>
        <li><?= $film['judul'] ?></li>
        <li><?= $film['kualitas'] ?></li>
        <li><?= $film['negara'] ?></li>
        <li><?= $film['tanggal'] ?></li>
        <li><a href="ubah.php?id=<?= $f['id']?>">ubah</a> || <a href="hapus.php?id=<?= $f['id']?>">hapus</a></li>
        <li><a href="latihan3.php">back</a></li>
    </ul>
</body>
</html>