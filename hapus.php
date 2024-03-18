<?php
include 'function.php';
$hapus = hapus($_GET);
if ($hapus) {
  echo "<script>
      alert('sukses');
      document.location.href='latihan3.php';
      </script>";
} else {
  echo "<script>
      alert('gagal');
      document.location.href='detail.php';
      </script>";
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

</body>

</html>