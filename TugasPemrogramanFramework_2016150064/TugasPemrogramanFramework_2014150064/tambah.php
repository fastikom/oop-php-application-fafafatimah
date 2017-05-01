<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Book</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
</head>

<body>
      <div class="panel panel-info">
        <div class="panel-heading">
          <center><h1 class="panel">Data Buku "PerpusKita"</h1></center>
        </div>
        <div class="panel-body">

<div id="body">
 <div id="content">
	      <div class="panel panel-info">
        <div class="panel-body">

		<h2>Tambah Buku Baru</h2>
		<form action="tambah.php" method="POST" class="form-horizontal">
			Kode Buku: <input type="text" name="kode" class="form-control"><br>
			Judul Buku: <input type="text" name="judul" class="form-control"><br>
			Pengarang Buku: <input type="text" name="pengarang" class="form-control"><br>
			Penerbit Buku: <input type="text" name="penerbit" class="form-control"><br>
			<input type="submit" name="addBook" value="Add Book" class="btn btn-success">
			<input type="reset" value="Reset" class="btn btn-warning">
		</form>
	</div>
</div>
	<footer class="footer">
		<div class="container-fluid">
	        <p class="text-muted pull-left">&copy; 2017</p>
	        <p class="text-muted pull-right ">Informatika - Tugas Pemrograman Framework</p>
	    </div>
	</footer>
</body>
</html>
<?php
	require('Library.php');	//memanggil class library
		if(isset($_POST['addBook'])){	//jika buku ditambahkan (proses penyimpanan buku)
			$kode = $_POST['kode'];
			$judul = $_POST['judul'];
			$pengarang = $_POST['pengarang'];
			$penerbit = $_POST['penerbit'];
			$Lib = new Library();		//instance objek library
			$add = $Lib->addBook($kode, $judul, $pengarang, $penerbit);
		if($add == "Success"){		//sukses
	header('Location: index.php');	//lokasi yang akan dituju setelah data berhasil disimpan
	}}
?>
