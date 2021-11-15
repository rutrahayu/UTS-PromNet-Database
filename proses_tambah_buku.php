<?php
if($_POST){
	$nama_buku=$_POST['nama_buku'];
	$stok=$_POST['stok'];
	if(empty($nama_buku)) {
		echo "<script>alert('Nama Buku tidak boleh kosong');location.href='tambah_buku.php';</script>";

	} elseif(empty($stok)){
		echo "<script>alert('Stok tidak boleh kosong');location.href='tambah_buku.php';</script>";
	} else {
		include "koneksi.php";
		$insert=mysqli_query($conn,"insert into buku (nama_buku, stok) value ('".$nama_buku."','".$stok."')");
		if($insert){
			echo"<script>alert('Sukses menambah data buku');location.href='tampil_jurusan.php';</script>";
		} else {
			echo "<script>alert('Gagal menambahkan data buku');location.href='tambah_buku.php';</script>";
			
		}
	}
}
?>