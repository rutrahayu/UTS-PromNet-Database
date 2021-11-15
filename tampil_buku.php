<!DOCTYPE html>
<html>
<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styletampil.css">
	<title></title>
</head>
<body>
   <h1>Data Buku</h1>
   <li class="active"><a href="database.php">Kembali</a></li>
   <table class="table table-hover table-striped">
   	<thead>
   		<tr>
   			<th>NO</th>
            <th>NAMA BUKU</th>
            <th>STOK</th>
   			<th>AKSI</th>
   		</tr>
   	</thead>
   	<tbody>
   		<?php
   		include "koneksi.php";
   		$qry_buku=mysqli_query($conn,"select * from buku");
   		$no=0;
   		while ($data_buku=mysqli_fetch_array($qry_buku)){
   			$no++;?>
   			<tr>
   				<td><?=$no?></td>
               <td><?=$data_buku['nama_buku']?></td>
               <td><?=$data_buku['stok']?></td>
   				<td><a href="hapus_buku.php?id_buku=<?=$data_buku['id_buku']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
   				</td>
   			</tr>
   			<?php
   		}
   		?>
   	</tbody>
   </table>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>