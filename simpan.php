<?php
include_once "config.php";

if (isset($_POST["submit"])) {
    // $id = $_POST['id'];
    $id = $_POST['id'];
    $indikator = $_POST['indikator'];
    $jenis_ukur = $_POST['jenis_ukur'];
    $polaritas = $_POST['polaritas'];
    $bobot = $_POST['bobot'];
    $satuan = $_POST['satuan'];
    $target = $_POST['target'];
    $sesuai_target = $_POST['sesuai_target'];
    $diluar_target = $_POST['diluar_target'];
    // $nilai_target = $_POST["nilai_target"];
    // $pencapaian = $_POST["pencapaian"];
    // $pencapaian_persen = $_POST["pencapaian_persen"];




    // $sesuai_target = $data['sesuai_target'];
    // $target = $data['target'];
    // $diluar_target = $data['diluar_target'];

    // echo ($sesuai_target / $target) + ($diluar_target / ($target + $diluar_target));
    if ($sesuai_target == $target) {
        $nilai_target = ($sesuai_target + $diluar_target) / $target;
    } else {
        $nilai_target = ($sesuai_target / $target) + ($diluar_target / ($target + $diluar_target));
    }

    // $pencapaian = ($nilai_target > 1) ? 1.1 : $nilai_target;

    if ($jenis_ukur == 4) {
        $pencapaian = $sesuai_target / $target;
    } else {
        $pencapaian = ($nilai_target > 1) ? 1.1 : $nilai_target;
    }

    $pencapaian_persen = $pencapaian * 100;
    $nilai_indikator = $pencapaian * $bobot;

    $query = "INSERT INTO prognosa VALUES ('','$indikator', '$jenis_ukur',  '$polaritas', $bobot, '$satuan', $target,  $sesuai_target, $diluar_target, $nilai_target, $pencapaian, $pencapaian_persen, $nilai_indikator)";
    // mysqli_query($conn, $query);

    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: recap.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
