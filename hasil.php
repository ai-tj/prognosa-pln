<?php
include "config.php";

$result = mysqli_query($conn, "SELECT * FROM prognosa",);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icon.png" type="image/x-icon">
    <title>Data Kinerja</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        header.navbar-container {
            max-width: 1200px;
            width: 100%;
            margin-inline: auto;
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding-block: 1rem;
            z-index: 999;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        header.navbar-container .logo img {
            width: 150px;
        }

        header.navbar-container .nav-list ul {
            padding-left: 0;
            display: flex;
            justify-content: center;
            gap: 2rem 1rem;
        }

        header.navbar-container .nav-list li {
            list-style-type: none;
        }

        header.navbar-container .nav-list li a {
            text-decoration: none;
            font-size: 1.05rem;
            font-weight: 500;
            color: #2D3E50;
            padding: .5rem 1.5rem;
            border-radius: 999px;
            transition: all .2s ease-in-out;
        }

        header.navbar-container .nav-list li:hover a {
            background-color: #425c77;
            color: white;
        }


        h1 {
            margin: 0;
            text-align: center;
        }

        button {
            background-color: blue;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        button:hover {
            background-color: #2D3E50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .edit-btn,
        .delete-btn {
            padding: 5px 10px;
            text-decoration: none;
            margin: 2px;
            border: 1px solid #ccc;
            border-radius: 4px;
            display: inline-block;
        }

        .edit-btn {
            background-color: #4CAF50;
            color: white;
        }

        .delete-btn {
            background-color: #f44336;
            color: white;
        }
    </style>

    <script>
        function confirmEdit(id) {
            var result = confirm("Apakah kamu yakin ingin mengedit data ini?");
            if (result) {
                window.location.href = 'edit.php?id=' + id;
            }
        }

        function confirmDelete(id) {
            var result = confirm("Apakah kamu yakin ingin menghapus data ini?");
            if (result) {
                window.location.href = 'hapus.php?id=' + id;
            }
        }
    </script>

</head>

<body>

    <header class="navbar-container">
        <div class="logo">
            <img src="img/pln.svg" alt="" />
        </div>
        <nav class="nav-list">
            <ul>
                <li><a href="index.php">Kembali ke Beranda</a></li>
                <li><a href="index.php">Download Data</a></li>
            </ul>
        </nav>
    </header>
    <a href="create.php"><button>Tambah Data Baru</button></a>
    <h1>HASIL PROGNOSA</h1>
    <table border="1">
        <tr>
            <th rowspan="2">No.</th>
            <th rowspan="2">Indikator Kinerja</th>
            <th rowspan="2">Polaritas</th>
            <th rowspan="2">Jenis Pengukuran</th>
            <th rowspan="2">Bobot</th>
            <th rowspan="2">Satuan</th>
            <th rowspan="2">Target</th>
            <th colspan="2">Realisasi</th>
            <th rowspan="2">Nilai Target</th>
            <th rowspan="2">Pencapaian</th>
            <th rowspan="2">Persentase Pencapaian</th>
            <th rowspan="2">Nilai Indikator</th>
            <th rowspan="4">Action</th>
        </tr>
        <tr>
            <th>Sesuai Target</th>
            <th>Diluar Target</th>
        </tr>

        <tr>
            <th colspan="4">Total Nilai Indikator</th>
            <th>100</th>
            <th colspan="7"></th>
            <th>102.94</th>
        </tr>

        <tr>
            <th colspan="4">Key Performance Indicators</th>
            <th>40</th>
            <th colspan="7"></th>
            <th><?= 41.082 ?></th>
        </tr>

        <?php
        $no  = 1;
        $isFourthRow = false;
        foreach ($result as $data) {
            if ($no == 4 && !$isFourthRow) {
                $isFourthRow = true;
                $nextData = next($result);
            }
            
            switch ($data['indikator']) {
                case 1:
                    $indikator = "New Power Plant Increase (PLN + IPP) Non EBT";
                    break;
                case 2:
                    $indikator = "New Transmission Increase";
                    break;
                case 3:
                    $indikator = "New Substation Capacity Increase";
                    break;
                case 4:
                    $indikator = "Presentase Pelaksanaan Kontraktual Proyek";
                    break;
                case 5:
                    $indikator = "New Power Plant Increase (PLN + IPP) EBT";
                    break;
                case 6:
                    $indikator = "Serah Terima proyek (STP)";
                    break;
                case 7:
                    $indikator = "Realisasi Penyelesaian PDP";
                    break;
                case 8:
                    $indikator = "Pembebasan Lahan untuk Proyek Ketenagalistrikan";
                    break;
                case 9:
                    $indikator = "Penyelesaian Perijinan";
                    break;
                case 10:
                    $indikator = "Penyelesaian Dokumen Legal Aset Tanah PLN";
                    break;
                case 11:
                    $indikator = "Penyerapan AKI Non Rutin Sesuai Peruntukannya";
                    break;
                case 12:
                    $indikator = "Pelaksanaan Digitalisasi Aplikasi Korporat";
                    break;
                case 13:
                    $indikator = "Maturity Level PLN Bisnis Ekselen";
                    break;
                case 14:
                    $indikator = "Pemenuhan Risk Maturity Index (RMI) L";
                    break;
                case 15:
                    $indikator = "Manajemen SDM, Komunikasi, dan TJSL";
                    break;
                case 16:
                    $indikator = "Pemenuhan PDN Korporat";
                    break;
                case 17:
                    $indikator = "Kepatuhan";
                    break;

                default:
                    $indikator = "";
            }

            switch ($data['jenis_ukur']) {
                case 1:
                    $jenis_ukur = "KPI dengan Daftar Target yang sudah Ditentukan";
                    break;
                case 2:
                    $jenis_ukur = "KPI dengan Polaritas Positif";
                    break;
                case 3:
                    $jenis_ukur = "KPI dengan Polaritas Rentang 3 Titik (T1=95%; T2=100%; T3=195%)";
                    break;
                case 4:
                    $jenis_ukur = "KPI dengan Nilai Pengurang";
                    break;
            }

        ?>
            <tr>
                <td class="text-center"><?= $no++ ?></td>
                <td class="text-center"><?= $indikator ?></td>
                <td class="text-center"><?= $data['polaritas'] ?></td>
                <td class="text-center"><?= $jenis_ukur ?></td>
                <td class="text-center"><?= $data['bobot'] ?></td>
                <td class="text-center"><?= $data['satuan'] ?></td>
                <td class="text-center"><?= $data['target'] ?></td>
                <td class="text-center"><?= $data['sesuai_target'] ?></td>
                <td class="text-center"><?= $data['diluar_target'] ?></td>
                <td class="text-center"><?= $data['nilai_target'] ?></td>
                <td class="text-center"><?= $data['pencapaian'] ?></td>
                <td class="text-center"><?= number_format($data['pencapaian_persen']) ?>%</td>
                <td class="text-center"><?= $data['nilai_indikator'] ?></td>
                <td>
                    <a href="#" class="edit-btn" onclick="confirmEdit(<?= $data['id'] ?>)">Edit</a>
                    <a href="#" class="delete-btn" onclick="confirmDelete(<?= $data['id'] ?>)">Hapus</a>
                </td>
            </tr>
        <?php } ?>

    </table>

</body>

</html>