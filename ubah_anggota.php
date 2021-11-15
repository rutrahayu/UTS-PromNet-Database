<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<?php
	include "koneksi.php";
    $qry_get_anggota=mysqli_query($conn,"select * from anggota where id_anggota = '".$_GET ['id_anggota']."'");
	$data_anggota=mysqli_fetch_array($qry_get_anggota);
	?>
	<h3>Ubah Data</h3>
	<form action="proses_ubah_anggota.php" method="post">
		<input type="hidden" name="id_anggota" value="<?=$data_anggota['id_anggota']?>">
		Nama :
		<input type="text" name="nama" value="<?=$data_anggota['nama']?>" class="form-control">
		Tanggal Lahir :
		<input type="date" name="tanggal_lahir" value="<?=$data_anggota['tanggal_lahir']?>" class="form-control">
		Jenis Kelamin :
		<?php
		$arr_jk=array('L'=>'Laki-laki','P'=>'Perempuan');
		?>
		<select name="jenis_kelamin" class="form-control">
			<option></option>
			<?php foreach ($arr_jk as $key_jk => $val_jk):
                if($key_jk==$data_anggota['jenis_kelamin']){
                	$selek="selected";
			} else {
				$selek="";
			}
		?>
		    <option value="<?=$key_gender?>" <?=$selek?>><?=$val_jk?></option>
		<?php endforeach ?>			
		</select>
		Alamat :
		<textarea name="alamat" class="form-control" rows="4"><?=$data_anggota['alamat']?></textarea>
		Buku :
		<select name="id_buku" class="form-control">
			<option></option>
			<?php
			include "koneksi.php";
			$qry_buku=mysqli_query($conn,"select * from buku");
			while($data_buku=mysqli_fetch_array($qry_buku)){
				if($data_buku['id_buku']==$data_anggota['id_buku']){
					$selek="selected";
				} else {
					$selek="";
				}
	    echo '<option value="'.$data_buku['id_buku'].'" '.$selek.'>'.$data_buku['nama_buku'].'</option>';
			}
			?>
		</select>
        Username :
        <input type="text" name="username" value="<?=$data_anggota['username']?>" class="form-control">
        Password :
        <input type="password" name="password" value="" class="form-control">
        <input type="submit" name="simpan" value="Ubah Data Anggota" class="btn btn-primary">	    
	</form>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>