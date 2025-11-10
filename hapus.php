<?php
include("config.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM prognosa WHERE id=$id";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        header('Location: recap.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
