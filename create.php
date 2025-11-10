<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icon.png" type="image/x-icon">
    <title>Buat Prognosa</title>
    <!-- tanda -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- akhir tanda -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            background-image: url('img/create.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            /* font-family: 'Quicksand', sans-serif; */
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

        footer {
            text-align: center;
            padding: 0.1rem;
            background-color: #2D3E50;
            color: white;
        }

        h1 {
            text-align: center;
            color: #2D3E50;
            font-size: 2.5em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        form {
            max-width: 400px;
            margin: 30px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        table {
            width: 100%;
        }

        th,
        td {
            padding: 10px;
        }

        th {
            text-align: left;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #05ADEE;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="reset"] {
            background-color: #EC1E24;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        input[type="reset"]:hover {
            background-color: #D11F24;
        }
    </style>
</head>

<header class="navbar-container">
    <div class="logo">
        <img src="img/pln.svg" alt="" />
    </div>
    <nav class="nav-list">
        <ul>
            <li><a href="index.php">Kembali ke Beranda</a></li>
            <li><a href="recap.php">Lihat Hasil Prognosa</a></li>
        </ul>
    </nav>
</header>
<h1>Tambah Data Baru</h1>

<body>
    <form method="post" action="simpan.php">
        <!-- <label for="id">Nomor.</label>
        <input type="number" name="id" placeholder="Masukkan Nomor" required><br> -->

        <label for="indikator">Indikator Kinerja:</label>
        <select name="indikator" id="indikator" placeholder="Pilih Indikator Kinerja">
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
        <input type="text" name="polaritas" placeholder="Masukkan Polaritas"><br>

        <label for="jenis_ukur">Jenis Pengukuran</label>
        <select name="jenis_ukur" id="jenis_ukur" placeholder="Pilih Jenis Pengukuran">
            <option value="">Isi Pencarian</option>
            <option value="1">KPI dengan Daftar Target yang sudah Ditentukan</option>
            <option value="2">KPI dengan Polaritas Positif</option>
            <option value="3">KPI dengan Polaritas Rentang 3 Titik (T1=95%; T2=100%; T3=195%)</option>
            <option value="4">KPI dengan Nilai Pengurang</option>
        </select>

        <label for="bobot">Bobot:</label>
        <input type="number" step="any" name="bobot" placeholder="Masukkan Nilai Bobot" required><br>

        <label for="satuan">Satuan:</label>
        <input type="text" name="satuan" placeholder="Masukkan Bentuk Satuan" required><br>

        <label for="target">Target:</label>
        <input type="number" step="any" name="target" placeholder="Masukkan Nilai Target" required><br>

        <p><b>REALISASI</b></p>
        <label for="sesuai_target">Sesuai Target:</label>
        <input type="number" step="any" name="sesuai_target" placeholder="Masukkan Nilai Sesuai Target" required><br>

        <label for="diluar_target">Diluar Target:</label>
        <input type="number" step="any" name="diluar_target" placeholder="Masukkan Nilai Diluar Target"><br>

        <input type="submit" name="submit" value="Tambah">
        <input type="reset" value="Reset">
    </form>
    <footer>
        <p>&copy; 2024 PLN UIP SUMBAGUT</p>
    </footer>
</body>
<script>
    $(document).ready(function() {
        $('select').selectize({
            sortField: 'text'
        });
    });
</script>

</html>