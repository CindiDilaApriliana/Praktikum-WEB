<?php
error_reporting(E_ALL & E_NOTICE);
$conn = mysqli_connect('localhost', 'root', '', 'l200200106');
$id_kamar = $_POST['id_kamar'];
$biaya = $_POST['biaya'];
$submit = $_POST['submit'];
$update = "UPDATE kamar SET id_kamar='$id_kamar', biaya='$biaya' WHERE id_kamar='$id_kamar' ";

if ($submit) {
    if ($id_kamar == '') {
        echo "Kode Jenis tidak boleh kosong, diisi dulu";
    } elseif ($biaya == '') {
        echo "Biaya tidak boleh kosong";
    } else {
        mysqli_query($conn, $update);
        mysqli_close($conn);
        echo "<script>
		alert('Data berhasil diubah');
		window.location.href='kamar.php';
		</script>";
    }
}
