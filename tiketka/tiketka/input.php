<style>
body{background-image:url(background.jpg); background-size:cover}
    tbody > tr:nth-child(2n+1) > td, tbody > tr:nth-child(2n+1) > th {
        background-color: #0000;
    }
</style>
<!DOCTYPE html>
<html>
	<head>
		<title>Input CRUD Pemesana Tiket KA</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body> <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <img  alt="Kereta" src="kai.png" width="42px" style="margin: 1px;padding: 0px color:white;">
    <a href="#" class="nav-item nav-link">Sistem Informasi Pemesanan Kereta Api</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    
        <form class="form-inline ml-auto">
            <a href="index.php" class="nav-item nav-link">Kembali</a>
        </form>
        
    </div>
</nav>
<br/>
		<h3 align="center">INPUT PEMESANAN TIKET KERETA API INDONESIA</h3>
		<center><a href="index.php">&Lt; Tabel Pemesanan Tiket Kereta Api Indonesia</a></center></br>
		<fieldset style="width: 50%; margin: auto;">
			<legend>Form Input Pemesanan Tiket Kereta Api Indonesia</legend>
		<form action="simpan.php" method="post">
		<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"required=required placeholder='nama pembeli'></td>
		</tr>
		<tr>
			<td>Nama Kereta</td>
			<td>:</td>
			<td><input type="text" name="nama_kereta"required=required placeholder='nama KA'></td>
			<td>No KA</td>
			<td>:</td>
			<td><input type="number" name="no_kereta"required=required placeholder='No KA'></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td><select name="kelas">
				<option value="Pilih kelas">---Pilih Kelas---
				<option value="EKONOMI">EKONOMI
				<option value="EKONOMI">BISNIS
				<option value="EKONOMI">EXECUTIVE
			</select></td>
			<td>No Kursi</td>
			<td>:</td>
			<td><input type="number" name="no_kursi"required=required placeholder='No duduk'></td>
		</tr>
		<tr>
			<td>Berangkat</td>
			<td>:</td>
			<td><input type="text" name="berangkat"required=required placeholder='berangkat'></td>
			<td>Tanggal</td>
			<td>:</td>
			<td><input type="date" name="tanggal_berangkat"required=required placeholder='ex:YYYY-MM-DD'></td>
		</tr>
		<tr>
			<td>Tiba</td>
			<td>:</td>
			<td><input type="text" name="tiba"required=required placeholder='tiba'></td>
			<td>Tanggal</td>
			<td>:</td>
			<td><input type="date" name="tanggal_tiba"required=required placeholder='ex:YYYY-MM-DD'></td>
		</tr>
        <tr>
			<td>Harga</td>
			<td>:</td>
			<td><input type="number" name="harga"required=required placeholder='harga tiket'></td>
		</tr>
        <tr>
            <td><input type="submit" value="Simpan" /></td>
            <td><input type="reset" value="Reset" onclick="return confirm('hapus data yang telah diinput?')"></td>
        </tr>
		</table>
    </form>
	</fieldset>
	</body>
</html>
