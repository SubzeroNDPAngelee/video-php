<form action="" method="post">
    kategori :
    <input type="text" name="kategori">
    <br>
    <input type="submit" name="simpan" value="simpan">

</form>

<?php 

    require_once "../function.php";

    if (isset($_POST['simpan'])) {

        $kategori = $_POST['kategori'];

        $sql = "INSERT INTO tblkategori VALUES ('','$kategori')";

        $result = mysqli_query($koneksi, $sql);

        header("http://localhost/tugas-video-Yt/Vid-php-25/restaurant/kategori/select.php");
    }

?>