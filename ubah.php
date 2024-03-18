<?php
include 'function.php';
$detail = menampilkan1data($_GET);
if (isset($_POST['submit'])) {
  $ubah=ubah($_GET, $_POST); 
  if ($ubah) {
    echo "<script>
        alert('sukses');
        document.location.href='latihan3.php';
        </script>";
  } else {
    echo "<script>
        alert('gagal');
        document.location.href='latihan3.php';
        </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
<a href="latihan3.php">back</a>
  <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="gbrold" value="<?= $detail['gambar'] ?>">
    <label>
      judul :
      <input type="text" name="judul" value="<?= $detail['judul'] ?>">
    </label><br>
    <label>
      kualitas :
      <input type="text" name="kualitas" value="<?= $detail['kualitas'] ?>">
    </label><br>
    <label>
      negara :
      <input type="text" name="negara" value="<?= $detail['negara'] ?>">
    </label><br>
    <label>
      tanggal :
      <input type="date" name="tanggal" value="<?= $detail['tanggal'] ?>">
    </label><br>
    <label>
      gambar :
      <img src="<?= $detail['gambar'] ?>" width="100"><br>
      <input type="file" name="gambar">
    </label><br>
    <button type="submit" name="submit">ubah</button>
  </form>
</body>

</html>