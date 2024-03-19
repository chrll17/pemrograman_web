<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('location:login.php');
}
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
