<?php
include 'koneksi.php';
?>
<style>
body{background-image:url(background.jpg); background-size:cover}
    tbody > tr:nth-child(2n+1) > td, tbody > tr:nth-child(2n+1) > th {
        background-color: #0000;
    }
    table{
        width: 75%;
        margin: auto;
        border-collapse: collapse;
        box-shadow: darkgrey 7px;
    }
    thead tr {
        background-color: red;
    }
</style>
<!DOCTYPE html>
<html>
	<head>
		<title>Halaman CRUD Pemesana Tiket KA</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body>
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <img  alt="Kereta" src="kai.png" width="42px" style="margin: 1px;padding: 0px color:white;">
    <a href="#" class="nav-item nav-link">Sistem Informasi Pemesanan Kereta Api</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
        
    </div>
</nav>
<br/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
		<h3 align="center">TABEL PEMESANAN TIKET KERETA API INDONESIA</h3>
		<center><a href="input.php">Inputan Pemesanan Tiket Kereta Api Indonesia &Gt; </a></center>
		<br />

		<table border="3">
			<thead>
			<tr>
                <b>
				<td width=10%>No ID</th>
				<td width=20%>Nama</th>
				<td width=20%>Nama Kereta</th>
				<td width=10%>No KA</th>
				<td width=10%>Kelas</th>
				<td width=10%>No Kursi</th>
				<td width=10%>Berangkat</th>
				<td width=10%>Tanggal</th>
				<td width=10%>Tiba</th>
				<td width=10%>Tanggal</th>
				<td width=10%>Harga</th>
				<td width=10%>Action</th>
                </b>
			</tr>
		</thead> 
    <tbody>
    <?php
    $sql = "SELECT * FROM tiketpemesanan ORDER BY no_id";
    $no  = 1;
    foreach ($dbh->query($sql) as $data) :
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['nama_kereta'] ?></td>
            <td><?php echo $data['no_kereta'] ?></td>
            <td><?php echo $data['kelas'] ?></td>
			<td><?php echo $data['no_kursi'] ?></td>
			<td><?php echo $data['berangkat'] ?></td>
			<td><?php echo $data['tanggal_berangkat'] ?></td>
			<td><?php echo $data['tiba'] ?></td>
			<td><?php echo $data['tanggal_tiba'] ?></td>
			<td><?php echo $data['harga'] ?></td>
            <td align="center">
                <a href="edit.php?no_id=<?php echo $data['no_id'] ?>"><img alt="edit" src="icon/edit.png" /></a>
                &nbsp;&nbsp;
                <a href="hapus.php?no_id=<?php echo $data['no_id'] ?>" onclick="return confirm('Anda yakin akan menghapus data?')"><img alt="hapus" src="icon/hapus.png" /></a>
            </td>
        </tr>
    <?php
    endforeach;
    ?>
    </tbody>
	</table>
	</body>
</html>

