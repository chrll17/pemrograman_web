<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query()
{
    global $conn;
    $select = mysqli_query($conn, "SELECT * from film");
    return mysqli_fetch_all($select, MYSQLI_ASSOC);
}

function menampilkan1data($get)
{
    global $conn;
    $id = $get['id'];
    $select = mysqli_query($conn, "SELECT * from film where id=$id");
    return mysqli_fetch_assoc($select);
}

function tambahdata($post)
{
    global $conn;
    $judul = $post['judul'];
    $kualitas = $post['kualitas'];
    $negara = $post['negara'];
    $tanggal = $post['tanggal'];
    $gambar = gambar();
    return mysqli_query($conn, "INSERT into film values('','$judul','$kualitas','$negara','$tanggal','$gambar')");
}

function gambar()
{
    $name = $_FILES['gambar']['name'];
    $tmp_name = $_FILES['gambar']['tmp_name'];
    $error = $_FILES['gambar']['error'];
    $eksgbrvalid = ['jpg', 'jpeg', 'png'];
    $eksgbr = explode('.', $name);
    $eksgbr = strtolower(end($eksgbr));
    if ($error == 4) {
        $name = gbrold();
    } else if (!in_array($eksgbr, $eksgbrvalid)) {
        echo "<script>
        alert('bukan gbr');
        document.location.href='latihan3.php';
        </script>";
        return false;
    }
    move_uploaded_file($tmp_name, $name);
    return $name;
}

function hapus($get)
{
    global $conn;
    $id = $get['id'];
    return mysqli_query($conn, "DELETE from film where id=$id");
}

function ubah($get, $post)
{
    global $conn;
    $id = $get['id'];
    $judul = $post['judul'];
    $kualitas = $post['kualitas'];
    $negara = $post['negara'];
    $tanggal = $post['tanggal'];
    $gambar = gambar();
    return mysqli_query($conn, "UPDATE film set judul='$judul',kualitas='$kualitas',negara='$negara',tanggal='$tanggal',gambar='$gambar' where id=$id");
}

function gbrold()
{
    $gbrold = $_POST['gbrold'];
    return $gbrold;
}

function register($post)
{
    global $conn;
    $username = stripslashes(strtolower($post['username']));
    $password = mysqli_real_escape_string($conn, $post['password']);
    $password2 = mysqli_real_escape_string($conn, $post['password2']);

    $select = mysqli_query($conn, "SELECT username from user where username='$username'");
    if (mysqli_fetch_assoc($select)) {
        echo "<script>
        alert('user sudah ada');
        document.location.href='registrasi.php';
        </script>";
        return false;
    }
    if ($password !== $password2) {
        echo "<script>
        alert('pw beda');
        document.location.href='registrasi.php';
        </script>";
        return false;
    }
    $password = password_hash($password, PASSWORD_DEFAULT);
    return mysqli_query($conn, "INSERT into user values('','$username','$password')");
}
