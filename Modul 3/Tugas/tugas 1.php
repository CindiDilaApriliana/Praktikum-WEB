<html>

<head>
    <title>Penjumlahan</title>
</head>

<body>
    <form action="tugas 1.php" method='POST'>
        Nili A adalah <input type="text" name="A"><br /><br />
        Nilai B adalah <input type="text" name="B"><br /><br />
        <input type="submit" value="Jumlahkan" name='submit'>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $a = $_REQUEST['A'];
        $b = $_REQUEST['B'];

        $c = "";
        $c = $a + $b;
        echo "</br>Nilai A adalah $a";
        echo "</br>Nilai B adalah $b";
        echo "</br>Jadi Nilai A ditambah Nilai B adalah $c.";
    }
    ?>
</body>

</html>