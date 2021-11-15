<?php  
if($_POST){
	$id_anggota=$_POST['id_anggota'];
	$nama=$_POST['nama'];
	$tanggal_lahir=$_POST['tanggal_lahir'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$alamat=$_POST['alamat'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$id_buku=$_POST['id_buku'];
	if(empty($nama)){
		echo"<script>alert('nama tidak boleh kosong');location.href='tambah_anggota.php';</script>";

	} elseif(empty($username)){
		echo "<script>alert('username tidak boleh kosong');location.href='tambah_anggota.php';</script>";
	} else {
		include "koneksi.php";
		if(empty($password)){
			$update=mysqli_query($conn,"update mahasiswa set nama='".$nama."',tanggal_lahir='".$tanggal_lahir."', jenis_kelamin='".$jenis_kelamin."', alamat='".$alamat."', username='".$username."', id_anggota='".$id_anggota."' where id_mhs = '".$id_anggota."' ") or die (mysql_error($conn));
			if($update){
				echo "<script>alert('Sukses update data');location.href='tampil_anggota.php';</script>";
			} else {
				echo "<script>alert('Gagal update data');location.href='ubah_anggota.php?id_anggota=".$id_mhs."';</script>";
			}
		} else {
			$update=mysqli_query($conn,"update anggota set nama='".$nama."',tanggal_lahir='".$tanggal_lahir."', jenis_kelamin='".$jenis_kelamin."', alamat='".$alamat."', username='".$username."', password='".$password."', id_buku='".$id_buku."' where id_anggota = '".$id_anggota."'") or die(mysqli_error($conn));
			if($update){
				echo "<script>alert('Sukses update data');location.href='tampil_anggota.php';</script>";
			} else {
				echo "<script>alert('Gagal update data');location.href='ubah_anggota.php?id_anggota=".$id_anggota."';</script>";
			}
		}
	}	
}
?>