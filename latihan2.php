<?php
include 'function.php';
$film=query("SELECT * from film");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>no</th>
            <th>aksi</th>
            <th>gambar</th>
            <th>judul</th>
            <th>kualitas</th>
            <th>negara</th>
            <th>tanggal</th>
        </tr>
        <?php
        $no=1;
        foreach($film as $f){
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><a href="ubah.php?id=<?= $f['id']?>">ubah</a> || <a href="hapus.php?id=<?= $f['id']?>">hapus</a></td>
            <td><img src="<?= $f['gambar']?>" width="50"></td>
            <td><?= $f['judul']?></td>
            <td><?= $f['kualitas']?></td>
            <td><?= $f['negara']?></td>
            <td><?= $f['tanggal']?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>