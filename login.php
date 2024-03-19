<?php
session_start();
include 'function.php';

if (isset($_COOKIE['id']) && isset($_COOKIE['username'])) {
  $id = $_COOKIE['id'];
  $username = $_COOKIE['username'];
  $select = mysqli_query($conn, "SELECT username from user where id=$id");
  $fetch = mysqli_fetch_assoc($select);
  if ($username === hash('sha256', $fetch['username'])) {
    $_SESSION['login'] = true;
  }
}

if (isset($_SESSION['login'])) {
  header('location:latihan3.php');
}

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $select = mysqli_query($conn, "SELECT * from user where username='$username'");
  $fetch = mysqli_fetch_assoc($select);
  if (mysqli_num_rows($select) === 1) {
    if (password_verify($password, $fetch['password'])) {
      $_SESSION['login'] = true;
      if (isset($_POST['remember'])) {
        setcookie('id', $fetch['id'], time() + 3600);
        setcookie('username', hash('sha256', $fetch['username']), time() + 3600);
      }
      header('location:latihan3.php');
    }
  }
  echo "<script>
      alert('gagal');
      document.location.href='login.php';
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
      <input type="checkbox" name="remember">
      remember :
    </label><br>
    <button type="submit" name="submit">login</button>
  </form>
</body>

</html>