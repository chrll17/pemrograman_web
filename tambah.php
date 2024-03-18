<?php
include 'function.php';
if (isset($_POST['submit'])) {
  $tambah=tambahdata($_POST);
  if($tambah){
    echo "<script>
        alert('sukses');
        document.location.href='latihan3.php';
        </script>";
  }else{
    echo "<script>
        alert('gagal');
        document.location.href='tambah.php';
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
    <label>
      judul :
      <input type="text" name="judul">
    </label><br>
    <label>
      kualitas :
      <input type="text" name="kualitas">
    </label><br>
    <label>
      negara :
      <input type="text" name="negara">
    </label><br>
    <label>
      tanggal :
      <input type="date" name="tanggal">
    </label><br>
    <label>
      gambar :
      <input type="file" name="gambar">
    </label><br>
    <button type="submit" name="submit">tambah</button>
  </form>
</body>

</html>