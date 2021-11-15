<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="kode.css">
	<link rel="stylesheet" type="text/css" href="styletampil.css">
	<title></title>
</head>
<body>
	<div class="container">
	<h1><center> Tambah Data Buku </h1></center>
    <li class="active"><a href="database.php">Kembali</a></li>
	<form action="proses_tambah_buku.php" method="post">
		<label>Nama Buku : </label> <br>
		<center><input type="text" name="nama_buku" value="" class="form-control" ></center>
        <br> 
		<label>Stok : </label> <br>
		<center><input type="text" name="stok" value="" class="form-control"></center><br>
		<center><input type="submit" name="simpan" value="Simpan" class="btn btn-primary"></center>
    </form>  
</body>
</html>