<!DOCTYPE html>
<html>
<head>
	<title>Export Data Ke Excel Dengan PHP</title>
</head>
<body>
	<style>
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;

	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>

	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Pegawai.xls");
	?>

	<center>
		<h1>Export Data Ke Excel Dengan PHP</h1>
	</center>

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
		// koneksi database
		$koneksi = mysqli_connect("localhost","root","","pegawai");

		// menampilkan data pegawai
		$data = mysqli_query($koneksi,"select * from data_pegawai");
		$no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['alamat']; ?></td>
			<td><?php echo $d['telepon']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>