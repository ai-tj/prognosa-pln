<?php
include("config.php");
if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $indikator = $_POST['indikator'];
    $jenis_ukur = $_POST['jenis_ukur'];
    $polaritas = $_POST['polaritas'];
    $bobot = $_POST['bobot'];
    $satuan = $_POST['satuan'];
    $target = $_POST['target'];
    $sesuai_target = $_POST['sesuai_target'];
    $diluar_target = $_POST['diluar_target'];

    $sql = "UPDATE prognosa SET indikator='$indikator', jenis_ukur='$jenis_ukur', polaritas='$polaritas',
    bobot=$bobot, satuan='$satuan', target=$target, sesuai_target=$sesuai_target, diluar_target=$diluar_target Where id=$id";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        header('Location: recap.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
