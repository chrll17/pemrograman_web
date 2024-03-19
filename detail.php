<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('location:login.php');
}
include 'function.php';
$detail = menampilkan1data($_GET);
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
        <li><img src="<?= $detail['gambar'] ?>" width="100"></li>
        <li><?= $detail['judul'] ?></li>
        <li><?= $detail['kualitas'] ?></li>
        <li><?= $detail['negara'] ?></li>
        <li><?= $detail['tanggal'] ?></li>
        <li><a href="ubah.php?id=<?= $detail['id'] ?>">ubah</a> || <a href="hapus.php?id=<?= $detail['id'] ?>">hapus</a></li>
        <li><a href="latihan3.php">back</a></li>
    </ul>
</body>

</html>