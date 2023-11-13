<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: index.php"); // Jika belum, arahkan kembali ke halaman login
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        h1 {
            margin-top: 0;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <h1>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h1>
    </header>

    <main>
        <p>Selamat datang di halaman utama. Ini adalah tampilan sederhana untuk memenuhi UTS Matakuliah kriptografi.</p>
        <b><p>Nama : Yusuf Putra Bintang Satria</p></b>
        <b><p>Nim : 312110317</p></b>
        <b><p>Kelas : TI.21.A.2</p></b>
        <p><a href="index.php">Logout</a></p>
    </main>

    <footer>
        <p>Bynzz. © 2023 Copyright</p>
    </footer>
</body>

</html>
