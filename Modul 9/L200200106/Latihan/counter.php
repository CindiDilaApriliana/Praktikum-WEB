<?php session_start();
error_reporting(0);
?>
<html>

<head>
    <title>Mengakses Data Session</title>
</head>

<body>
    <?php
    $_SESSION['counter']++;
    $_SESSION['nama_pengunjung'] = "Adul";
    echo "Selamat Datang " .
        $_SESSION['nama_pengunjung'] . "<br>";
    echo "Anda telah mengunjungi halaman ini sebanyak " .
        $_SESSION['counter'] . " kali.";
    ?>
</body>

</html>