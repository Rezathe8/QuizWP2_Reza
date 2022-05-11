<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">
		::selection {
			background-color: #E13300;
			color: white;
		}

		::-moz-selection {
			background-color: #E13300;
			color: white;
		}

		body {
			background-color: #fff;
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
			text-decoration: none;
		}

		a:hover {
			color: #97310e;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#body {
			margin: 0 15px 0 15px;
			min-height: 96px;
		}

		p {
			margin: 0 0 10px;
			padding: 0;
		}

		p.footer {
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}

		#container {
			margin: 10px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
		}
	</style>
</head>

<body>

	<div id="container">
		<h1>Form Input Data Siswa</h1>

		<div id="body">
			<form action="<?= base_url('admin/proses'); ?>" method="POST">
				<table align="">
					<tr>
						<th align="left">Nama</th>
						<td>:</td>
						<td>
							<input type="text" name="nama" id="nama">
						</td>
					</tr>
					<tr>
						<th align="left">Nis</th>
						<td>:</td>
						<td>
							<input type="text" name="nis" id="nis">
						</td>
					</tr>
					<tr>
						<th align="left">Tempat Lahir</th>
						<td>:</td>
						<td>
							<input type="text" name="tempat" id="tempat">
						</td>
					</tr>
					<tr>
						<th align="left">Tanggal Lahir</th>
						<td>:</td>
						<td>
							<input type="date" name="tanggal" id="tanggal">
						</td>
					</tr>
					<tr>
						<th align="left">Alamat</th>
						<td>:</td>
						<td>
							<textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
						</td>
					</tr>
					<tr>
						<th>Jenis Kelamin</th>
						<td>:</td>
						<td>
							<input type="radio" id="Laki-Laki" name="jeniskel" value="Laki-Laki">Laki-Laki
							<input type="radio" id="Perempuan" name="jeniskel" value="Perempuan">Perempuan
						</td>
					</tr>
					<tr>
						<th align="left">Agama</th>
						<td>:</td>
						<td>
							<select name="agama" id="agama">
								<option value="">--===--</option>
								<option value="Islam">Islam</option>
								<option value="Kristen">Kristen</option>
								<option value="Katolik">Katolik</option>
								<option value="Budha">Budha</option>
								<option value="Hindu">Hindu</option>
								<option value="Protestan">Protestan</option>
								<option value="Konghucu">Konghucu</option>
							</select>
						</td>
					</tr>


					<tr>
						<td colspan="3" align="center">

							<input type="submit" value="proses">
							<input type="reset" value="cancel">

						</td>
					</tr>
				</table>
			</form>

		</div>

		<p class="footer">Septian Reza Saputra <strong>15200089</strong></p>
	</div>

</body>

</html>