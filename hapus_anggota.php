<?php
if ($_GET['id_anggota']){
	include "koneksi.php";
	$qry_hapus=mysqli_query($conn, "delete from anggota where id_anggota='".$_GET['id_anggota']."'");
	if($qry_hapus){
		echo "<script>alert('Sukses hapus data anggota');location.href='tampil_anggota.php';</script>";
	} else {
		echo "<script>alert('Gagal hapus data anggota');location.href='tampil_anggota.php';</script>";
	}
}
?>