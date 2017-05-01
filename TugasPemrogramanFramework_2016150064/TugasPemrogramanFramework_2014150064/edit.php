<?php
require('Library.php');	//memanggil class library
if(isset($_GET['kode'])){
$Lib = new Library();		//mendeklarasikan objek atau hasil cetak dari class library (instance objek library)
$book = $Lib->editBook($_GET['kode']);  //fungsi edit buku
$edit = $book->fetch(PDO::FETCH_OBJ);
echo '
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Book</title>
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
  <h2>Ubah Data Buku</h2>
  <form action="edit.php" method="POST" class="form-group">
    Kode Buku: <input type="text" name="kode" value="'.$edit->kodeBuku.'"class="form-control"><br>
    Judul Buku: <input type="text" name="judul" value="'.$edit->judulBuku.'"class="form-control"><br>
    Pengarang Buku: <input type="text" name="pengarang" value="'.$edit->pengarang.'" class="form-control"><br>
    Penerbit Buku: <input type="text" name="penerbit" value="'.$edit->penerbit.'" class="form-control"><br>
  <input type="submit" name="updateBook" value="Update" class="btn btn-info">
  </form>
  </div>
</div>
</div>
</div>
</div>
  <footer class="footer">
  	    <div class="container-fluid">
          <p class="text-muted pull-left">&copy; 2017</p>
          <p class="text-muted pull-right ">Informatika - Tugas Pemrograman Framework</p>
        </div>
  </footer>
</body>
</html>';
}
if(isset($_POST['updateBook'])){
  $kode = $_POST['kode'];
  $judul = $_POST['judul'];
  $pengarang = $_POST['pengarang'];
  $penerbit = $_POST['penerbit'];
  $Lib = new Library();
  $upd = $Lib->updateBook($kode, $judul, $pengarang, $penerbit);
if($upd == "Success"){
  header('Location: index.php');
}}
?>