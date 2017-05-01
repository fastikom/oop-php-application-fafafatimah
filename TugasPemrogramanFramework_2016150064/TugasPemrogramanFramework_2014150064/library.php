<?php
class Library{
	//membuat konstruktor aplikasi dan menginisialisasi variabel yang equal dengan objek untuk membuat koneksi database dengan teknik PDO
	public function __construct(){
		$this->db = new PDO('mysql:host=localhost;dbname=library','root','');
	}
	//method yang berfungsi untuk menambah data baru ke database
	public function addBook($kode, $judul, $pengarang, $penerbit){
		$sql = "INSERT INTO books (kodeBuku, judulBuku, pengarang, penerbit)
				VALUES('$kode', '$judul', '$pengarang', '$penerbit')";
		$query = $this->db->query($sql);
			if(!$query){
				return "Failed";
			}
			else{
				return "Success";
			}
	}
	//method yang berfungsi untuk mengedit data
	public function editBook($kode){
		$sql = "SELECT * FROM books WHERE kodeBuku='$kode'";
		$query = $this->db->query($sql);
		return $query;
	}
	//method untuk mengupdate data yang ada di database
	public function updateBook($kode, $judul, $pengarang, $penerbit){
		$sql = "UPDATE books SET judulBuku='$judul', pengarang='$pengarang',
				penerbit='$penerbit' WHERE kodeBuku='$kode'";
		$query = $this->db->query($sql);
			if(!$query){
				return "Failed";
			}
			else{
				return "Success";
			}
	}
	//method untuk menampilkan data yang ada di database
	public function showBooks(){
		$sql = "SELECT * FROM books";
		$query = $this->db->query($sql);
		return $query;
	}
	//method untuk menghapus data
	public function deleteBook($kode){
		$sql = "DELETE FROM books WHERE kodeBuku='$kode'";
		$query = $this->db->query($sql);
	}
}
?>