<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>List Book</title>
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

	<div class="container">
		<h2>Daftar Buku yang Tersedia</h2>
		<table class="table table-striped">
			<tr>
				<td>Kode Buku</td>
				<td>Judul Buku</td>
				<td>Pengarang Buku</td>
				<td>Penerbit Buku</td>
				<td>Edit</td>
				<td>Delete</td>
			</tr>
	</div>
	</div>
	</div>
	</div>
</div>
</div>
			<?php
				require("Library.php");	//memanggil class library
				$Lib = new Library();	//instance objek library
				$show = $Lib->showBooks();
				while($data = $show->fetch(PDO::FETCH_OBJ)){	//PDO
					echo "
						<tr>
						<td>$data->kodeBuku</td>
						<td>$data->judulBuku</td>
						<td>$data->pengarang</td>
						<td>$data->penerbit</td>
						<td><a class='btn btn-info' href='edit.php?kode=$data->kodeBuku'>Edit</td>
						<td><a class='btn btn-danger' href='index.php?delete=$data->kodeBuku'>Delete</a></td>	
						</tr>";
						};
			?>
		</table>
		<a href="tambah.php" class="btn btn-success">Tambah Buku Baru</a>
	</div>
	<?php  //untuk mengeset metode GET yang berfungsi untuk menghapus data
	if(isset($_GET['delete'])){
		$del = $Lib->deleteBook($_GET['delete']);
	}
?>
<footer class="footer">
	    <div class="container-fluid">
        <p class="text-muted pull-left">&copy; 2017</p>
        <p class="text-muted pull-right ">Informatika - Tugas Pemrograman Framework</p>
      </div>
</footer>

</body>
</html>
