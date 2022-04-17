<?php
include 'koneksi.php';
if (isset($_POST['submit']))
{
    $submit = mysqli_query($koneksi , "INSERT INTO datasiswa (idsiswa,namasiswa,nis,kelas,tahunmasuk)
        Values ('$_POST[ID]',
                '$_POST[NAMA]',
                '$_POST[NIS]',
                '$_POST[KELAS]',
                '$_POST[MASUK]')
            ");
    if($submit)
    {
        echo "<script>
            alert('simpan data sukses');
            document.location='admin.php';
            </script>";
    }
    else{
        echo "<script>
            alert('simpan data gagal');
            document.location='admin.php';
            </script>";
    }
}
?>
<!doctype html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>TK Mentari</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-light  bg-dark">
        <div class="container">
            <a class="navbar-brand text-white" href="admin.php"><strong>Data Siswa</strong></a>
            <a class="navbar-brand text-white" href="admin nilai.php"><strong>Nilai Siswa</strong></a>
            <a class="navbar-brand text-white" href="admin alumni.php"><strong>Data Alumni</strong></a>
            <a class="navbar-brand text-white" href="login.php"><strong>Log Out</strong></a>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Menu -->
    <h1 align="center">TAMBAH DATA SISWA</h1>
    <div class="container">
		<div class="card-body">
			<form method="post" action="">
            <div class="form-group mb-3">
				<label>ID SISWA</label>
				<input type="text" name="ID" value="<?=@$vID?>" class="form-control" placeholder="ID SISWA" required>
			</div>
			<div class="form-group mb-3">
				<label>NAMA SISWA</label>
				<input type="text" name="NAMA" value="<?=@$vNAMA?>" class="form-control" placeholder="NAMA SISWA" required>
			</div>
			<div class="form-group mb-3">
				<label>NIS SISWA</label>
				<input type="text" name="NIS" value="<?=@$vNIS?>" class="form-control" placeholder="NIS SISWA" required>
			</div>
			<div class="form-group mb-3">
				<label>KELAS</label>
				<input type="text" name="KELAS" value="<?=@$vKELAS?>" class="form-control" placeholder="KELAS" required>
			</div>
			<div class="form-group mb-3" ></div>
                <label>TAHUN MASUK</label>
                <input type="text" name="MASUK" value="<?=@$vMASUK?>" class="form-control" placeholder="TAHUN MASUK" required>
            </div>
            <br>
			<button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>  
	</div>
        <!-- Akhir Menu -->

        <!-- Awal Footer -->
        <hr class="footer">
        <div class="container" style="background-color: gray">
            <div class="row footer-body">
                <div class="col-md-6">
                    <div class="copyright">
                        <strong>TK Mentari</strong> <i class="far fa-copyright"></i> Since 2018</p>
                    </div>
                </div>

                <div class="col-md-6 d-flex justify-content-end">
                    <div class="icon-contact">
                        <label class="font-weight-bold">Follow Us </label>
                        <a href="#"><img src="images/icon/fb.png" class="mr-3 ml-4" data-toggle="tooltip" title="Facebook"></a>
                        <a href="#"><img src="images/icon/ig.png" class="mr-3" data-toggle="tooltip" title="Instagram"></a>
                        <a href="#"><img src="images/icon/twitter.png" class="" data-toggle="tooltip" title="Twitter"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Footer -->


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
</body>

</html>