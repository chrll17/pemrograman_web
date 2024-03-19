<?php
include 'function.php';
if (isset($_POST['submit'])) {
  $r = register($_POST);
  if ($r===true) {
    echo "<script>
      alert('sukses');
      document.location.href='login.php';
      </script>";
  } else {
    echo "<script>
      alert('gagal');
      document.location.href='registrasi.php';
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
  <form action="" method="post">
    <label>
      username :
      <input type="text" name="username">
    </label><br>
    <label>
      password :
      <input type="text" name="password">
    </label><br>
    <label>
      confirm password :
      <input type="text" name="password2">
    </label><br>
    <button type="submit" name="submit">register</button>
  </form>
</body>

</html>