<?php 

    require_once "../function.php";

    $sql = "DELETE FROM tblkategori WHERE idkategori=$id";

    $result = mysqli_query($koneksi, $sql); 

    header("http://localhost/tugas-video-Yt/Vid-php-21/restaurant/kategori/select.php?p=4");

?>