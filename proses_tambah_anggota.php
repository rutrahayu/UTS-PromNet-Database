<?php
if($_POST){
	$nama=$_POST['nama'];
	$tanggal_lahir=$_POST['tanggal_lahir'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$alamat=$_POST['alamat'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$id_buku=$_POST['id_buku'];
	if(empty($nama)) {
		echo "<script>alert('Nama tidak boleh kosong');location.href='tambah_anggota.php';</script>";
    }   elseif(empty($tanggal_lahir)) {
		echo "<script>alert('Tanggal lahir tidak boleh kosong');location.href='tambah_anggota.php';</script>";
	}   elseif(empty($jenis_kelamin)) {
		echo "<script>alert('Jenis Kelamin tidak boleh kosong');location.href='tambah_anggota.php';</script>";
	}   elseif(empty($alamat)) {
		echo "<script>alert('Alamat tidak boleh kosong');location.href='tambah_anggota.php';</script>";
	}	elseif(empty($username)) {
		echo "<script>alert('Username tidak boleh kosong');location.href='tambah_anggota.php';</script>";
    } elseif(empty($password)){
		echo "<script>alert('Password tidak boleh kosong');location.href='tambah_anggota.php';</script>";
	} else {
		include "koneksi.php";
		$insert=mysqli_query($conn,"insert into anggota (nama, tanggal_lahir, jenis_kelamin, alamat, username, password, id_buku) value ('".$nama."', '".$tanggal_lahir."','".$jenis_kelamin."','".$alamat."','".$username."','".$password."','".$id_buku."')") or die(mysqli_error($conn)); 
		if($insert){
			echo"<script>alert('Sukses menambah data Anggota');location.href='tampil_anggota.php';</script>";
		} else {
			echo "<script>alert('Gagal menambahkan data Anggota');location.href='tambah_anggota.php';</script>";
}
        
		
	}
}

?>