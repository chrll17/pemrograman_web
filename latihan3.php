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
        </tr>
        <?php
        $no=1;
        foreach($film as $f){
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><a href="detail.php?id=<?= $f['id']?>">detail</a></td>
            <td><img src="<?= $f['gambar']?>" width="50"></td>
            <td><?= $f['judul']?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>