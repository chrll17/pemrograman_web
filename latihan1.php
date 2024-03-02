<?php
$conn=mysqli_connect("localhost","root","","phpdasar");
$select=mysqli_query($conn,"SELECT * from film");
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
        while($fetch=mysqli_fetch_assoc($select)){
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><a href="ubah.php?id=<?= $fetch['id']?>">ubah</a> || <a href="hapus.php?id=<?= $fetch['id']?>">hapus</a></td>
            <td><img src="<?= $fetch['gambar']?>" width="50"></td>
            <td><?= $fetch['judul']?></td>
            <td><?= $fetch['kualitas']?></td>
            <td><?= $fetch['negara']?></td>
            <td><?= $fetch['tanggal']?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>