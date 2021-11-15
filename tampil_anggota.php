<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styletampil.css">
    <title></title>
</head>
<body>
    <h1>Data Anggota</h1>
    <li class="active"><a href="database.php">Kembali</a></li>
    <table class="table table-hover table-striped">
        <thead>
    		<tr>
    			<th>NO</th>
    			<th>NAMA</th>
    			<th>TANGGAL LAHIR</th>
    			<th>JENIS KELAMIN</th>
    			<th>ALAMAT</th>
    			<th>USERNAME</th>
    			<th>BUKU</th>
    			<th>AKSI</th>
    		
    		</tr>
    	</thead>
    	<tbody>
            
            <?php
            include "koneksi.php";
            $qry_anggota=mysqli_query($conn,"select * from anggota join buku on buku.id_buku=anggota.id_buku");
            $no=0;
            while ($data_anggota=mysqli_fetch_array($qry_anggota)){
                $no++;?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$data_anggota['nama']?></td>
                    <td><?=$data_anggota['tanggal_lahir']?></td>
                    <td><?=$data_anggota['jenis_kelamin']?></td>
                    <td><?=$data_anggota['alamat']?></td>
                    <td><?=$data_anggota['username']?></td>
                    <td><?=$data_anggota['nama_buku']?></td>
                    <td><a href="ubah_anggota.php?id_anggota=<?=$data_anggota['id_anggota']?>" onclick="return confirm('Apakah anda yakin mengubah data ini?')" class="btn btn-success">Ubah</a> | <a href="hapus_anggota.php?id_anggota=<?=$data_anggota['id_anggota']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td></tr>
                    
                
                <?php
            }
            ?>
        </tbody>

    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>