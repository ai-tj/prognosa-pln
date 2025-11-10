<?php
include_once("config.php");
if (!isset($_GET['id'])) {
    header('Location: recap.php');
}
$id = $_GET['id'];
$sql = "SELECT * FROM prognosa WHERE id=$id";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icon.png" type="image/x-icon">
    <title>Form Edit Prognosa</title>
    <!-- tanda -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
    <!-- akhir tanda -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            margin: 5;
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

        form {
            width: 50%;
            margin: 0 auto;
            margin-top: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>

</head>

<body>
    <a href="recap.php"><button>Kembali</button></a>
    <h1>EDIT DATA PROGNOSA</h1>
    <form method="post" action="proses-edit.php">
        <!-- gaguna -->
        <!-- <label for="id">Nomor.</label>
        <input type="number" name="id" placeholder="Masukkan Nomor" ><br> -->
        <input type="hidden" name="id" value="<?= $id ?>">
        <label for="indikator">Indikator Kinerja:</label>
        <select name="indikator" id="indikator" placeholder="Pilih Indikator Kinerja" value=<?php echo $data['indikator']; ?>>
            <option value="">Isi Pencarian</option>
            <option value="1">New Power Plant Increase (PLN + IPP) Non EBT</option>
            <option value="2">New Transmission Increase</option>
            <option value="3">New Substation Capacity Increase</option>
            <option value="4">Presentase Pelaksanaan Kontraktual Proyek</option>
            <option value="5">New Power Plant Increase (PLN + IPP) EBT</option>
            <option value="6">Serah Terima proyek (STP)</option>
            <option value="7">Realisasi Penyelesaian PDP</option>
            <option value="8">Pembebasan Lahan untuk Proyek Ketenagalistrikan</option>
            <option value="9">Penyelesaian Perijinan</option>
            <option value="10">Penyelesaian Dokumen Legal Aset Tanah PLN</option>
            <option value="11">Penyerapan AKI Non Rutin Sesuai Peruntukannya</option>
            <option value="12">Pelaksanaan Digitalisasi Aplikasi Korporat</option>
            <option value="13">Maturity Level PLN Bisnis Ekselen</option>
            <option value="14">Pemenuhan Risk Maturity Index (RMI) L</option>
            <option value="15">Manajemen SDM, Komunikasi, dan TJSL</option>
            <option value="16">Pemenuhan PDN Korporat</option>
            <option value="17">Kepatuhan</option>
        </select>

        <label for="polaritas">Polaritas:</label>
        <input type="text" name="polaritas" value=<?php echo $data['polaritas']; ?>> <br>

        <label for="jenis_ukur">Jenis Pengukuran</label>
        <select name="jenis_ukur" id="jenis_ukur" placeholder="Pilih Jenis Pengukuran" value=<?php echo $data['jenis_ukur']; ?>>
            <option value="">Isi Pencarian</option>
            <option value="1">KPI dengan Daftar Target yang sudah Ditentukan</option>
            <option value="2">KPI dengan Polaritas Positif</option>
            <option value="3">KPI dengan Polaritas Rentang 3 Titik (T1=95%; T2=100%; T3=195%)</option>
            <option value="4">KPI dengan Nilai Pengurang</option>
        </select>

        <label for="bobot">Bobot:</label>
        <input type="number" name="bobot" placeholder="Masukkan Nilai Bobot" value=<?= $data['bobot']; ?>> <br>

        <label for="satuan">Satuan:</label>
        <input type="text" name="satuan" placeholder="Masukkan Bentuk Satuan" value=<?php echo $data['satuan']; ?>> <br>

        <label for="target">Target:</label>
        <input type="number" step="any" name="target" placeholder="Masukkan Nilai Target" value=<?php echo $data['target']; ?>> <br>

        <p><b>REALISASI</b></p>
        <label for="sesuai_target">Sesuai Target:</label>
        <input type="number" step="any" name="sesuai_target" placeholder="Masukkan Nilai Sesuai Target" value=<?php echo $data['sesuai_target']; ?>> <br>

        <label for="diluar_target">Diluar Target:</label>
        <input type="number" step="any" name="diluar_target" placeholder="Masukkan Nilai Diluar Target" value=<?php echo $data['diluar_target']; ?>> <br>

        <input type="submit" name="submit" value="Simpan">
    </form>



</body>
<script>
    $(document).ready(function() {
        $('select').selectize({
            sortField: 'text'
        });
    });
</script>

</html>