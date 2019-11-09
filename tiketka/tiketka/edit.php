<style>
body{background-image:url(background.png); background-size:cover}
    tbody > tr:nth-child(2n+1) > td, tbody > tr:nth-child(2n+1) > th {
        background-color: #0000;
    }
</style>
<?php
include 'koneksi.php';

if (isset($_GET['no_id'])) {
    $query = $dbh->query("SELECT * FROM tiketpemesanan WHERE no_id = '$_GET[no_id]'");
    $data  = $query->fetch(PDO::FETCH_ASSOC);
} else {
    echo "ID tidak tersedia!<br /><a href='index.php'>Kembali</a>";
    exit();
}

if ($data === false) {
    echo "Data tidak ditemukan!<br /><a href='index.php'>Kembali</a>";
    exit();
}
?>

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
		<form action="update.php" method="post">
        <table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"required placeholder='nama pembeli' value="<?php echo $data['nama'];?>"></td>
		</tr>
		<tr>
			<td>Nama Kereta</td>
			<td>:</td>
			<td><input type="text" name="nama_kereta"required placeholder='nama KA' value="<?php echo $data['nama_kereta'];?>"></td>
			<td>No KA</td>
			<td>:</td>
			<td><input type="number" name="no_kereta"required placeholder='No KA' value="<?php echo $data['no_kereta'];?>"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td><select name="kelas" value="<?php echo $data['kelas'];?>">>
				<option value="Pilih kelas">---Pilih Kelas---
				<option value="EKONOMI">EKONOMI
				<option value="EKONOMI">BISNIS
				<option value="EKONOMI">EXECUTIVE
			</select></td>
			<td>No Kursi</td>
			<td>:</td>
			<td><input type="number" name="no_kursi"required placeholder='No duduk' value="<?php echo $data['no_kursi'];?>"></td>
		</tr>
		<tr>
			<td>Berangkat</td>
			<td>:</td>
			<td><input type="text" name="berangkat"required placeholder='berangkat' value="<?php echo $data['berangkat'];?>"></td>
			<td>Tanggal</td>
			<td>:</td>
			<td><input type="date" name="tanggal_berangkat" required placeholder='ex:YYYY-MM-DD' value="<?php echo $data['tanggal_berangkat'];?>"></td>
		</tr>
		<tr>
			<td>Tiba</td>
			<td>:</td>
			<td><input type="text" name="tiba"required placeholder='tiba' value="<?php echo $data['tiba'];?>"></td>
			<td>Tanggal</td>
			<td>:</td>
			<td><input type="date" name="tanggal_tiba" required placeholder='ex:YYYY-MM-DD' value="<?php echo $data['tanggal_tiba'];?>"></td>
		</tr>
        <tr>
			<td>Harga</td>
			<td>:</td>
			<td><input type="number" name="harga"required placeholder='harga tiket' value="<?php echo $data['harga'];?>"></td>
		</tr>
        <tr>
            <td><input type="submit" value="Simpan" /></td>
            <td><input type="reset" value="Reset" onclick="return confirm('hapus data yang telah diinput?')"></td>
        </tr>
		</table>
    </form>
	</fieldset>
	<br />
	</body>
</html>